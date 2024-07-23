<?php

namespace Modules\Kategorie\Repositories;

use Illuminate\Support\Facades\DB;

class ReadKategorieRepository implements ReadKategorieRepositoryContract
{

    public function find(): ?object
    {
        $cols = [
            'id',
            'created_at',
            'nazwa',
            'slug',
        ];
        $stronyList = DB::table('cms_kategorie')
            ->select($cols)
            ->get();

        return $stronyList;
    }
}
