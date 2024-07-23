<?php

namespace Modules\Produkty\Repositories;

interface ReadGalerieProduktuRepositoryContract
{

    /**
     * @param int $id
     * @return object|null
     */
    public function find(int $id): ?object;

}
