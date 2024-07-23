<?php

namespace Modules\Strony\Repositories;

use Illuminate\Support\Facades\DB;

class ReadStronePoIdRepository implements ReadStronePoIdRepositoryContract
{

    public function find(int $id): ?object
    {
        $cols = [
            'id',
            'created_at',
            'nazwa',
            'slug',
            'zajawka',
            'content',
            'status'
        ];
        $stronyList = DB::table('cms_strony')
            ->select($cols)
            ->where('id',$id)
            ->first();

        return $stronyList;
    }
}
