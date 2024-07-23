<?php

namespace Modules\Strony\Commands;

use App\Bus\Command;

class CreateGalerieStronyCommand extends Command
{

    public function __construct(

        private readonly array $images,
        private readonly int $strona_id,
        private readonly string $nazwa,
        private readonly string $path,

    ) {}

    public function getImages(): array
    {
        return $this->images;
    }

    public function getStronaId(): int
    {
        return $this->strona_id;
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
