<?php

namespace Modules\Produkty\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Repositories\WriteProduktRepository;
use Modules\Strony\Repositories\WriteStroneRepository;


class UstawZdjecieStronyCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteStroneRepository $repository,
    ) {
    }

    public function handle(UstawZdjecieStronyCommand $command): array
    {
        return $this->repository->ustawZdjecieStrony(
            id: $command->getId(),
            img: $command->getImg(),
        );
    }

}
