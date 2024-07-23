<?php

namespace Modules\Produkty\Queries;

use App\Bus\Query;
use Modules\Produkty\Repositories\ReadProduktPoIdRepository;

class PobierzProduktPoIdQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadProduktPoIdRepository $repository,
    ) {}

    public function handle(PobierzProduktPoIdQuery $query): ?object
    {
        return $this->repository->find($query->getId());
    }

}
