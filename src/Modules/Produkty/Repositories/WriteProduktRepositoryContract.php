<?php

namespace Modules\Produkty\Repositories;


interface WriteProduktRepositoryContract
{

    public function create(
        string $nazwa,
        string $slug,
        int $status,
        string $opis,
        string $specyfikacja,
        string $tabela_rozmiarow,
        string $kategorie,
        float $cena,
        string $img
    ): int;

}
