<?php

namespace Modules\Produkty\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Repositories\WriteGalerieProduktuRepository;
use Modules\Produkty\Repositories\WriteProduktRepository;


class CreateGalerieProduktuCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteGalerieProduktuRepository $repository,
    ) {
    }

    public function handle(CreateGalerieProduktuCommand $command): array
    {
        return $this->repository->create(
            images: $command->getImages(),
            produkt_id: $command->getProduktId(),
            nazwa: $command->getNazwa(),
            path: $command->getPath(),
        );
    }

}
