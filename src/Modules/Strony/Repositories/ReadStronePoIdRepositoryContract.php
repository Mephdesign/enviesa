<?php

namespace Modules\Strony\Repositories;

interface ReadStronePoIdRepositoryContract
{

    public function find(int $id): ?object;

}
