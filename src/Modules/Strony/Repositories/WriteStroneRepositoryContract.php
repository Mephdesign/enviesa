<?php

namespace Modules\Strony\Repositories;


interface WriteStroneRepositoryContract
{

    public function create(
        string $nazwa,
        string $slug,
        int $status,
    ): int;

}
