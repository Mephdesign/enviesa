<?php

namespace Modules\Produkty\Repositories;

use App\Models\CmsGaleria;
use App\Models\CmsProdukt;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;

class WriteGalerieProduktuRepository implements WriteGalerieProduktuRepositoryContract
{


    public function create(
        array $images,
        int $produkt_id,
        string $nazwa,
        string $path,
    ): array
    {
        $aImages = [];
        if ($images){
            foreach($images as $key => $image)
            {
                $manager = new ImageManager(new Driver());

                $orygin = $manager->read($image);

                $image = $orygin->toWebp(60);

                $imageName = time().rand(1,99).'.webp';
                if(!is_dir($path.$produkt_id))
                {
                    mkdir($path.$produkt_id);
                }
                $image->save(public_path($path.$produkt_id.'/'.$imageName));
                $aImages[] = $imageName;
            }
        }

        //TODO: ustawienie zdjecia glownego - poprawic na wybierane
        $oProdukt = CmsProdukt::find($produkt_id);
        $oProdukt->img = $aImages[0];
        $oProdukt->save();

        foreach ($aImages as $key => $image) {
            $image = [
                'nazwa' => $image,
                'produkt_id' => $produkt_id,
                'path' => $path,
            ];
            CmsGaleria::create($image);
        }
        return ['ststus' => 'success'];
    }

    /**
     * @param int $id
     * @param string $nazwa
     * @param string $slug
     * @param int $status
     * @param string $opis
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
