<?php

namespace Modules\Kategorie\Queries;

use App\Bus\Query;

class PobierzKategoriePoIdQuery extends Query
{

    public function __construct(
        private readonly int $id,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

}
