<?php

namespace Modules\Produkty\Commands;

use App\Bus\Command;

class CreateGalerieProduktuCommand extends Command
{

    public function __construct(

        private readonly array $images,
        private readonly int $produkt_id,
        private readonly string $nazwa,
        private readonly string $path,

    ) {}

    public function getImages(): array
    {
        return $this->images;
    }

    public function getProduktId(): int
    {
        return $this->produkt_id;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getPath(): string
    {
        return $this->path;
    }

}
