<?php

namespace Modules\Produkty\Repositories;

use Illuminate\Support\Facades\DB;

class ReadProduktyKategoriiRepository implements ReadProduktyKategoriiRepositoryContract
{

    public function find(int $kategoria): ?object
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
            ->where('kategorie','=', $kategoria)
            ->get();

        return $produktyList;
    }
}
