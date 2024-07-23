<?php

namespace Modules\Produkty\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Repositories\WriteProduktRepository;


class UpdateProduktCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteProduktRepository $repository,
    ) {
    }

    public function handle(UpdateProduktCommand $command): array
    {
        return $this->repository->update(
            id: $command->getId(),
            nazwa: $command->getNazwa(),
            slug: $command->getSlug(),
            status: $command->getStatus(),
            opis: $command->getOpis(),
            specyfikacja: $command->getSpecyfikacja(),
            tabela_rozmiarow: $command->getTabelaRozmiarow(),
            kategorie: $command->getKategorie(),
            cena: $command->getCena(),
            img: $command->getImg()
        );
    }

}
