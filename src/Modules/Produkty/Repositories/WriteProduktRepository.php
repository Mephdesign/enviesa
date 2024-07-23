<?php

namespace Modules\Produkty\Repositories;

use App\Models\CmsProdukt;
use Illuminate\Support\Facades\DB;

class WriteProduktRepository implements WriteProduktRepositoryContract
{

    /**
     * @param string $nazwa
     * @param string $slug
     * @param int $status
     * @param string $opis
     * @param string $specyfikacja
     * @param string $tabela_rozmiarow
     * @param string $kategorie
     * @param float $cena
     * @param string $img
     * @return int
     */
    public function create(
        string $nazwa,
        string $slug,
        int $status,
        string $opis,
        string $specyfikacja,
        string $tabela_rozmiarow,
        string $kategorie,
        float $cena,
        string $img
    ): int
    {

        return DB::table('cms_produkty')->insertGetId([
            'nazwa' => $nazwa,
            'slug' => $slug,
            'status' => $status,
            'opis' => $opis,
            'specyfikacja' => $specyfikacja,
            'tabela_rozmiarow' => $tabela_rozmiarow,
            'kategorie' => $kategorie,
            'cena' => $cena,
            'img' => $img
        ]);
    }

    /**
     * @param int $id
     * @param string $nazwa
     * @param string $slug
     * @param int $status
     * @param string $opis
     * @param string $specyfikacja
     * @param string $tabela_rozmiarow
     * @param string $kategorie
     * @param float $cena
     * @param string $img
     * @return string[]
     */
    public function update(
        int $id,
        string $nazwa,
        string $slug,
        int $status,
        string $opis,
        string $specyfikacja,
        string $tabela_rozmiarow,
        string $kategorie,
        float $cena,
        string $img
    ): array
    {

        $result = CmsProdukt::find($id);

        if ($result)
        {
            $result->nazwa = $nazwa;
            $result->slug = $slug;
            $result->status = $status;
            $result->opis = $opis;
            $result->specyfikacja = $specyfikacja;
            $result->tabela_rozmiarow = $tabela_rozmiarow;
            $result->kategorie= $kategorie;
            $result->cena = $cena;
            $result->img = $img;
            $result->save();

            return [
                'status' => 'success'
            ];
        }else
        {
            return [
                'status' => 'Nie ma takiego produktu'
            ];
        }

    }

    /**
     * @param int $id
     * @param string $img
     * @return string[]
     */
    public function ustawZdjecieProduktu(
        int $id,
        string $img
    ): array
    {

        $result = CmsProdukt::find($id);

        if ($result)
        {
            $result->img = $img;
            $result->save();

            return [
                'status' => 'success'
            ];
        }else
        {
            return [
                'status' => 'Nie ma takiego produktu'
            ];
        }

    }
}
