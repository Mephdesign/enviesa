<?php

namespace Modules\Strony\Repositories;

use App\Models\CmsGaleria;
use App\Models\CmsProdukt;
use App\Models\CmsStrona;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Modules\Produkty\Repositories\WriteGalerieProduktuRepositoryContract;

class WriteGalerieStronyRepository implements WriteGalerieStronyRepositoryContract
{


    public function create(
        array $images,
        int $strona_id,
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
                if(!is_dir($path.$strona_id))
                {
                    mkdir($path.$strona_id);
                }
                $image->save(public_path($path.$strona_id.'/'.$imageName));
                $aImages[] = $imageName;
            }
        }

        //TODO: ustawienie zdjecia glownego - poprawic na wybierane
        $oProdukt = CmsStrona::find($strona_id);
        $oProdukt->img = $aImages[0];
        $oProdukt->save();

        foreach ($aImages as $key => $image) {
            $image = [
                'nazwa' => $image,
                'produkt_id' => $strona_id,
                'path' => $path,
            ];
            CmsGaleria::create($image);
        }
        return ['ststus' => 'success'];
    }
}
