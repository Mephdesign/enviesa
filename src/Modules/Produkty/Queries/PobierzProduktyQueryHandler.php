<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;
use Modules\Produkty\Repositories\ReadProduktyRepository;
use Modules\Strony\Repositories\ReadStronyRepository;


class PobierzProduktyQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadProduktyRepository $repository,
    ) {}

    public function handle(PobierzProduktyQuery $query): ?object
    {
        return $this->repository->find();
    }

}
