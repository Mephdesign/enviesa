<?php

namespace Modules\Produkty\Commands;

use App\Bus\Command;

class UstawZdjecieProduktuCommand extends Command
{

    public function __construct(

        private readonly int $id,
        private readonly string $img,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getImg(): string
    {
        return $this->img;
    }

}
