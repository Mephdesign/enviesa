<?php

namespace Modules\Strony\Commands;

use App\Bus\CommandHandler;
use Modules\Strony\Repositories\WriteStroneRepository;


class UpdateStronaCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteStroneRepository $repository,
    ) {
    }

    public function handle(UpdateStronaCommand $command): array
    {
        return $this->repository->update(
            id: $command->getId(),
            nazwa: $command->getNazwa(),
            slug: $command->getSlug(),
            zajawka: $command->getZajawka(),
            content: $command->getContent(),
            status: $command->getStatus(),
        );
    }

}
