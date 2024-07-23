<?php

namespace Modules\Produkty\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ReadGalerieProduktuRepository implements ReadGalerieProduktuRepositoryContract
{

    /**
     * @param int $id
     * @return object|Collection|null
     */
    public function find(int $id): ?object
    {
        $cols = [
            'id',
            'nazwa',
            'path',
            'title',
            'alt'
        ];
        $galeria = DB::table('cms_galerie')
            ->select($cols)
            ->where('produkt_id',$id)
            ->get();

        return $galeria;
    }
}
