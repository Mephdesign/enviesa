<?php

namespace Modules\Strony\Queries;

use App\Bus\Query;

class PobierzStronePoIdQuery extends Query
{

    public function __construct(
        private readonly int $id,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

}
