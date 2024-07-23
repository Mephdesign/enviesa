<?php

namespace Modules\Produkty\Repositories;

interface DuplikujProduktRepositoryContract
{

    /**
     * @param int $id
     * @return object|null
     */
    public function find(int $id): ?object;

}
