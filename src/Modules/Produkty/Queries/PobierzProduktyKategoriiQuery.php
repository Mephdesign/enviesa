<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;

class PobierzProduktyKategoriiQuery extends Query
{

    public function __construct(
        private readonly int $kategoria,
    ) {}

    public function getKategoria()
    {
        return $this->kategoria;
    }

}
