<?php

namespace Modules\Strony\Queries;

use App\Bus\Query;
use Modules\Strony\Repositories\ReadStronePoIdRepository;

class PobierzStronePoIdQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadStronePoIdRepository $repository,
    ) {}

    public function handle(PobierzStronePoIdQuery $query): ?object
    {
        return $this->repository->find($query->getId());
    }

}
