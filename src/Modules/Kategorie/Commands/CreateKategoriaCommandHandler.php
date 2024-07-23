<?php

namespace Modules\Kategorie\Commands;

use App\Bus\CommandHandler;
use Modules\Kategorie\Repositories\WriteKategorieRepository;
use Modules\Strony\Repositories\WriteStroneRepository;


class CreateKategoriaCommandHandler extends CommandHandler
{
    public function __construct(
        protected WriteKategorieRepository $repository,
    ) {
    }

    public function handle(CreateKategoriaCommand $command): int
    {
        return $this->repository->create(
            nazwa: $command->getNazwa(),
            slug: $command->getSlug(),
        );
    }

}
