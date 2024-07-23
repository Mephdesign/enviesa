<?php

namespace Modules\Produkty\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class DuplikujProduktRepository implements DuplikujProduktRepositoryContract
{

    /**
     * @param int $id
     * @return object|Collection|null
     */
    public function find(int $id): ?object
    {
        $cols = [
            'id',
            'img',
            'created_at',
            'nazwa',
            'slug',
            'opis',
            'specyfikacja',
            'tabela_rozmiarow',
            'cena',
            'kategorie',
            'status'
        ];
        $produkt = DB::table('cms_produkty')
            ->select($cols)
            ->where('id',$id)
            ->get();

        return $produkt;
    }

    public function duplicate(int $id)
    {
        $produkt = $this->find($id);
        $produkt = $produkt->map(function ($entry) {
            $entry = (array) $entry;
            unset($entry['id']); // Usuń klucz główny
            $entry['nazwa'] = 'SZKIC - '.$entry['nazwa'];
            return $entry;
        })->toArray();

// Wstaw wpisy ponownie do bazy
        DB::table('cms_produkty')->insert($produkt);

        return true;
    }
}
