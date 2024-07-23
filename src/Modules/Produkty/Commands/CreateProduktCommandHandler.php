<?php

namespace Modules\Produkty\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Repositories\WriteProduktRepository;


class CreateProduktCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteProduktRepository $repository,
    ) {
    }

    public function handle(CreateProduktCommand $command): int
    {
        return $this->repository->create(
            nazwa: $command->getNazwa(),
            slug: $command->getSlug(),
            status: $command->getStatus(),
            opis: $command->getOpis(),
            specyfikacja: $command->getSpecyfikacja(),
            tabela_rozmiarow: $command->getTabelaRozmiarow(),
            cena: $command->getCena(),
            kategorie: $command->getKategorie(),
            img: $command->getImg(),
        );
    }

}
