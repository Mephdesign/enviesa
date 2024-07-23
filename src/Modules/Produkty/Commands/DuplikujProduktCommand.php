<?php

namespace Modules\Produkty\Commands;

use App\Bus\Command;

class DuplikujProduktCommand extends Command
{

    public function __construct(

        private readonly int $id,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

}
