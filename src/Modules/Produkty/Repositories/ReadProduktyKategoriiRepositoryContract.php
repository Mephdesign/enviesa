<?php

namespace Modules\Produkty\Repositories;

interface ReadProduktyKategoriiRepositoryContract
{

    public function find(int $kategoria): ?object;

}
