<?php

namespace Modules\Kategorie\Repositories;

interface ReadKategoriePoIdRepositoryContract
{

    public function find(int $id): ?object;

}
