<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;

class PobierzGalerieProduktuQuery extends Query
{

    public function __construct(
        private readonly int $id,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

}
