<?php

namespace Modules\Strony\Queries;

use App\Bus\Query;
use Modules\Strony\Repositories\ReadStronyRepository;


class PobierzStronyQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadStronyRepository $repository,
    ) {}

    public function handle(PobierzStronyQuery $query): ?object
    {
        return $this->repository->find();
    }

}
