<?php

namespace Modules\Produkty\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ReadProduktPoIdRepository implements ReadProduktPoIdRepositoryContract
{

    /**
     * @param int $id
     * @return object|Collection|null
     */
    public function find(int $id): ?object
    {
        $cols = [
            'id',
            'img',
            'created_at',
            'nazwa',
            'slug',
            'opis',
            'specyfikacja',
            'tabela_rozmiarow',
            'cena',
            'kategorie',
            'status'
        ];
        $produkt = DB::table('cms_produkty')
            ->select($cols)
            ->where('id',$id)
            ->first();

        return $produkt;
    }
}
