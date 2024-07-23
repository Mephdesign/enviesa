<?php

namespace Modules\Kategorie\Commands;

use App\Bus\Command;

class CreateKategoriaCommand extends Command
{

    public function __construct(

        private readonly string $nazwa,
        private readonly string $slug,


    ) {}

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
