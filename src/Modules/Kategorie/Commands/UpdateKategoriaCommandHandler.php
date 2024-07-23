<?php

namespace Modules\Kategorie\Commands;

use App\Bus\CommandHandler;
use Modules\Kategorie\Repositories\WriteKategorieRepository;
use Modules\Strony\Repositories\WriteStroneRepository;


class UpdateKategoriaCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteKategorieRepository $repository,
    ) {
    }

    public function handle(UpdateKategoriaCommand $command): array
    {
        return $this->repository->update(
            id: $command->getId(),
            nazwa: $command->getNazwa(),
            slug: $command->getSlug(),
        );
    }

}
