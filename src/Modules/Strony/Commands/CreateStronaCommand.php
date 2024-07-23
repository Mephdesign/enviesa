<?php

namespace Modules\Strony\Commands;

use App\Bus\Command;

class CreateStronaCommand extends Command
{

    public function __construct(

        private readonly string $nazwa,
        private readonly string $slug,
        private readonly int $status,


    ) {}

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

}
