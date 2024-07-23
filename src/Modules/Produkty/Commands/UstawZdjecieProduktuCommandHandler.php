<?php

namespace Modules\Produkty\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Repositories\WriteProduktRepository;


class UstawZdjecieProduktuCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteProduktRepository $repository,
    ) {
    }

    public function handle(UstawZdjecieProduktuCommand $command): array
    {
        return $this->repository->ustawZdjecieProduktu(
            id: $command->getId(),
            img: $command->getImg(),
        );
    }

}
