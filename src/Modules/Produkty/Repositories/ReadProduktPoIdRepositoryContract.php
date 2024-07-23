<?php

namespace Modules\Produkty\Repositories;

interface ReadProduktPoIdRepositoryContract
{

    /**
     * @param int $id
     * @return object|null
     */
    public function find(int $id): ?object;

}
