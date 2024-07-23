<?php

namespace Modules\Produkty\Commands;

use App\Bus\CommandHandler;
use Modules\Produkty\Repositories\DuplikujProduktRepository;



class DuplikujProduktCommandHandler extends CommandHandler
{
    public function __construct(
        protected DuplikujProduktRepository $repository,
    ) {
    }

    public function handle(DuplikujProduktCommand $command): bool
    {
        return $this->repository->duplicate(
            id: $command->getId(),
        );
    }

}
