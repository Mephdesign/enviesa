<?php

namespace Modules\Produkty\Repositories;

use Illuminate\Support\Facades\DB;

class ReadProduktyRepository implements ReadProduktyRepositoryContract
{

    public function find(): ?object
    {
        $cols = [
            'id',
            'img',
            'cena',
            'created_at',
            'nazwa',
            'slug',
            'status'
        ];
        $produktyList = DB::table('cms_produkty')
            ->select($cols)
            ->get();

        return $produktyList;
    }
}
