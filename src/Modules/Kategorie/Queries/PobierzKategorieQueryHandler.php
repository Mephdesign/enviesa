<?php

namespace Modules\Kategorie\Queries;

use App\Bus\Query;
use Modules\Kategorie\Repositories\ReadKategorieRepository;
use Modules\Strony\Repositories\ReadStronyRepository;


class PobierzKategorieQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadKategorieRepository $repository,
    ) {}

    public function handle(PobierzKategorieQuery $query): ?object
    {
        return $this->repository->find();
    }

}
