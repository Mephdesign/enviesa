<?php

namespace Modules\Produkty\Repositories;

use Illuminate\Support\Facades\DB;

class ReadKategorieProduktowRepository implements ReadKategorieProduktowRepositoryContract
{

    public function find(): ?object
    {
        $cols = [
            'id',
            'nazwa',
            'slug'
        ];
        $kategorieList = DB::table('cms_kategorie')
            ->select($cols)
            ->get();

        return $kategorieList;
    }
}
