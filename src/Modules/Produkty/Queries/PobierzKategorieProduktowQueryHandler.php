<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;
use Modules\Produkty\Repositories\ReadKategorieProduktowRepository;
use Modules\Produkty\Repositories\ReadProduktyRepository;
use Modules\Strony\Repositories\ReadStronyRepository;


class PobierzKategorieProduktowQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadKategorieProduktowRepository $repository,
    ) {}

    public function handle(PobierzKategorieProduktowQuery $query): ?object
    {
        return $this->repository->find();
    }

}
