<?php

namespace Modules\Produkty\Commands;

use App\Bus\Command;

class CreateProduktCommand extends Command
{

    public function __construct(

        private readonly string $nazwa,
        private readonly string $slug,
        private readonly string $kategorie,
        private readonly float $cena,
        private readonly string $opis,
        private readonly string $specyfikacja,
        private readonly string $tabela_rozmiarow,
        private readonly int $status,
        private readonly string $img,



    ) {}

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getKategorie(): string
    {
        return $this->kategorie;
    }

    public function getCena(): float
    {
        return $this->cena;
    }

    public function getOpis(): string
    {
        return $this->opis;
    }

    public function getSpecyfikacja(): string
    {
        return $this->specyfikacja;
    }

    public function getTabelaRozmiarow(): string
    {
        return $this->tabela_rozmiarow;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getImg(): string
    {
        return $this->img;
    }

}
