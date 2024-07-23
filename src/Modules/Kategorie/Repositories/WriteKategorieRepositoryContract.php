<?php

namespace Modules\Kategorie\Repositories;


interface WriteKategorieRepositoryContract
{

    public function create(
        string $nazwa,
        string $slug,
    ): int;

}
