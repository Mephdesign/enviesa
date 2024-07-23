<?php

namespace Modules\Strony\Repositories;


interface WriteGalerieStronyRepositoryContract
{

    public function create(
        array $images,
        int $strona_id,
        string $nazwa,
        string $path
    ): array;

}
