<?php

namespace Modules\Strony\Queries;

use App\Bus\Query;
use Modules\Strony\Repositories\ReadStronePoIdRepository;
use Modules\Strony\Repositories\ReadStronePoSlugRepository;

class PobierzStronePoSlugQueryHandler extends Query
{

    public function __construct(
        protected readonly ReadStronePoSlugRepository $repository,
    ) {}

    public function handle(PobierzStronePoSlugQuery $query): ?object
    {
        return $this->repository->find($query->getSlug());
    }

}
