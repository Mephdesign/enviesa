<?php

namespace Modules\Kategorie\Commands;

use App\Bus\Command;

class UpdateKategoriaCommand extends Command
{

    public function __construct(

        private readonly int $id,
        private readonly string $nazwa,
        private readonly string $slug,
        private readonly string $zajawka,
        private readonly string $content,
        private readonly int $status,

    ) {}

    public function getId(): int
    {
        return $this->id;
    }
    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getZajawka(): string
    {
        return $this->zajawka;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

}
