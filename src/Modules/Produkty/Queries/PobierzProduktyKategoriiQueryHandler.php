<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;
use Modules\Produkty\Repositories\ReadProduktyKategoriiRepository;
use Modules\Produkty\Repositories\ReadProduktyRepository;
use Modules\Strony\Repositories\ReadStronyRepository;


class PobierzProduktyKategoriiQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadProduktyKategoriiRepository $repository,
    ) {}

    public function handle(PobierzProduktyKategoriiQuery $query): ?object
    {
        return $this->repository->find($query->getKategoria());
    }

}
