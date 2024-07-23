<?php

namespace Modules\Produkty\Repositories;


interface WriteGalerieProduktuRepositoryContract
{

    public function create(
        array $images,
        int $produkt_id,
        string $nazwa,
        string $path
    ): array;

}
