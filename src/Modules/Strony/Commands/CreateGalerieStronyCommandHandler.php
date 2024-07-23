<?php

namespace Modules\Strony\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Commands\CreateGalerieProduktuCommand;
use Modules\Produkty\Repositories\WriteGalerieProduktuRepository;
use Modules\Produkty\Repositories\WriteProduktRepository;
use Modules\Strony\Repositories\WriteGalerieStronyRepository;


class CreateGalerieStronyCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteGalerieStronyRepository $repository,
    ) {
    }

    public function handle(CreateGalerieStronyCommand $command): array
    {
        return $this->repository->create(
            images: $command->getImages(),
            strona_id: $command->getStronaId(),
            nazwa: $command->getNazwa(),
            path: $command->getPath(),
        );
    }

}
