<?php

namespace Modules\Strony\Repositories;

use Illuminate\Support\Facades\DB;

class ReadStronePoSlugRepository implements ReadStronePoSlugRepositoryContract
{

    public function find(string $slug): ?object
    {
        $cols = [
            'id',
            'created_at',
            'nazwa',
            'slug',
            'zajawka',
            'content',
            'status',
            'img'
        ];
        $strona = DB::table('cms_strony')
            ->select($cols)
            ->where('slug',$slug)
            ->first();
        return $strona;
    }
}
