<?php

namespace Modules\Strony\Repositories;

interface ReadStronePoSlugRepositoryContract
{

    public function find(string $slug): ?object;

}
