<?php

namespace Modules\Strony\Commands;

use App\Bus\CommandHandler;
use Modules\Strony\Repositories\WriteStroneRepository;


class CreateStronaCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteStroneRepository $repository,
    ) {
    }

    public function handle(CreateStronaCommand $command): int
    {
        return $this->repository->create(
            nazwa: $command->getNazwa(),
            slug: $command->getSlug(),
            status: $command->getStatus(),
        );
    }

}
