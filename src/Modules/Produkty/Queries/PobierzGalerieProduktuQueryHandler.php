<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;
use Modules\Produkty\Repositories\ReadGalerieProduktuRepository;

class PobierzGalerieProduktuQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadGalerieProduktuRepository $repository,
    ) {}

    public function handle(PobierzGalerieProduktuQuery $query): ?object
    {
        return $this->repository->find($query->getId());
    }

}
