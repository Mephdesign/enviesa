<?php

namespace Modules\Strony\Queries;

use App\Bus\Query;

class PobierzStronePoSlugQuery extends Query
{

    public function __construct(
        private readonly string $slug,
    ) {}

    public function getSlug(): string
    {
        return $this->slug;
    }

}
