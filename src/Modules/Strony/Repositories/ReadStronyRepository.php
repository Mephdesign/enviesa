<?php

namespace Modules\Strony\Repositories;

use Illuminate\Support\Facades\DB;

class ReadStronyRepository implements ReadStronyRepositoryContract
{

    public function find(): ?object
    {
        $cols = [
            'id',
            'created_at',
            'nazwa',
            'slug',
            'status'
        ];
        $stronyList = DB::table('cms_strony')
            ->select($cols)
            ->get();

        return $stronyList;
    }
}
