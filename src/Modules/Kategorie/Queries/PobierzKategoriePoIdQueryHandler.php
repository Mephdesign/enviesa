<?php

namespace Modules\Kategorie\Queries;

use App\Bus\Query;
use Modules\Strony\Repositories\ReadStronePoIdRepository;

class PobierzKategoriePoIdQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadKategoriePoIdRepository $repository,
    ) {}

    public function handle(PobierzKategoriePoIdQuery $query): ?object
    {
        return $this->repository->find($query->getId());
    }

}
