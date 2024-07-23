<?php

namespace App\Providers;

use App\Bus\QueryBus;
use App\Bus\CommandBus;
use App\Bus\IlluminateQueryBus;
use App\Bus\IlluminateCommandBus;
use Illuminate\Support\ServiceProvider;
use Modules\Kategorie\Commands\CreateKategoriaCommand;
use Modules\Kategorie\Commands\CreateKategoriaCommandHandler;
use Modules\Kategorie\Commands\UpdateKategoriaCommand;
use Modules\Kategorie\Commands\UpdateKategoriaCommandHandler;
use Modules\Kategorie\Queries\PobierzKategoriePoIdQuery;
use Modules\Kategorie\Queries\PobierzKategoriePoIdQueryHandler;
use Modules\Kategorie\Queries\PobierzKategorieQuery;
use Modules\Kategorie\Queries\PobierzKategorieQueryHandler;
use Modules\Kategorie\Repositories\ReadKategoriePoIdRepository;
use Modules\Kategorie\Repositories\ReadKategoriePoIdRepositoryContract;
use Modules\Kategorie\Repositories\ReadKategorieRepository;
use Modules\Kategorie\Repositories\ReadKategorieRepositoryContract;
use Modules\Kategorie\Repositories\WriteKategorieRepository;
use Modules\Kategorie\Repositories\WriteKategorieRepositoryContract;
use Modules\Produkty\Commands\CreateGalerieProduktuCommand;
use Modules\Produkty\Commands\CreateGalerieProduktuCommandHandler;
use Modules\Produkty\Commands\CreateProduktCommand;
use Modules\Produkty\Commands\CreateProduktCommandHandler;
use Modules\Produkty\Commands\DuplikujProduktCommand;
use Modules\Produkty\Commands\DuplikujProduktCommandHandler;
use Modules\Produkty\Commands\UpdateProduktCommand;
use Modules\Produkty\Commands\UpdateProduktCommandHandler;
use Modules\Produkty\Commands\UstawZdjecieProduktuCommand;
use Modules\Produkty\Commands\UstawZdjecieProduktuCommandHandler;
use Modules\Produkty\Commands\UstawZdjecieStronyCommand;
use Modules\Produkty\Commands\UstawZdjecieStronyCommandHandler;
use Modules\Produkty\Queries\PobierzGalerieProduktuQuery;
use Modules\Produkty\Queries\PobierzGalerieProduktuQueryHandler;
use Modules\Produkty\Queries\PobierzKategorieProduktowQuery;
use Modules\Produkty\Queries\PobierzKategorieProduktowQueryHandler;
use Modules\Produkty\Queries\PobierzProduktPoIdQuery;
use Modules\Produkty\Queries\PobierzProduktPoIdQueryHandler;
use Modules\Produkty\Queries\PobierzProduktyKategoriiQuery;
use Modules\Produkty\Queries\PobierzProduktyKategoriiQueryHandler;
use Modules\Produkty\Queries\PobierzProduktyQuery;
use Modules\Produkty\Queries\PobierzProduktyQueryHandler;
use Modules\Produkty\Repositories\DuplikujProduktRepository;
use Modules\Produkty\Repositories\DuplikujProduktRepositoryContract;
use Modules\Produkty\Repositories\ReadGalerieProduktuRepository;
use Modules\Produkty\Repositories\ReadGalerieProduktuRepositoryContract;
use Modules\Produkty\Repositories\ReadKategorieProduktowRepository;
use Modules\Produkty\Repositories\ReadKategorieProduktowRepositoryContract;
use Modules\Produkty\Repositories\ReadProduktPoIdRepository;
use Modules\Produkty\Repositories\ReadProduktPoIdRepositoryContract;
use Modules\Produkty\Repositories\ReadProduktyKategoriiRepository;
use Modules\Produkty\Repositories\ReadProduktyKategoriiRepositoryContract;
use Modules\Produkty\Repositories\ReadProduktyRepository;
use Modules\Produkty\Repositories\ReadProduktyRepositoryContract;
use Modules\Produkty\Repositories\WriteGalerieProduktuRepository;
use Modules\Produkty\Repositories\WriteGalerieProduktuRepositoryContract;
use Modules\Produkty\Repositories\WriteProduktRepository;
use Modules\Produkty\Repositories\WriteProduktRepositoryContract;
use Modules\Strony\Commands\CreateGalerieStronyCommand;
use Modules\Strony\Commands\CreateGalerieStronyCommandHandler;
use Modules\Strony\Commands\CreateStronaCommand;
use Modules\Strony\Commands\CreateStronaCommandHandler;
use Modules\Strony\Commands\UpdateStronaCommand;
use Modules\Strony\Commands\UpdateStronaCommandHandler;
use Modules\Strony\Queries\PobierzStronePoIdQuery;
use Modules\Strony\Queries\PobierzStronePoIdQueryHandler;
use Modules\Strony\Queries\PobierzStronePoSlugQuery;
use Modules\Strony\Queries\PobierzStronePoSlugQueryHandler;
use Modules\Strony\Queries\PobierzStronyQuery;
use Modules\Strony\Queries\PobierzStronyQueryHandler;
use Modules\Strony\Repositories\ReadStronePoIdRepository;
use Modules\Strony\Repositories\ReadStronePoIdRepositoryContract;
use Modules\Strony\Repositories\ReadStronePoSlugRepository;
use Modules\Strony\Repositories\ReadStronePoSlugRepositoryContract;
use Modules\Strony\Repositories\ReadStronyRepository;
use Modules\Strony\Repositories\ReadStronyRepositoryContract;
use Modules\Strony\Repositories\WriteGalerieStronyRepository;
use Modules\Strony\Repositories\WriteGalerieStronyRepositoryContract;
use Modules\Strony\Repositories\WriteStroneRepository;
use Modules\Strony\Repositories\WriteStroneRepositoryContract;
use Modules\User\Queries\FindUserQuery;
use Modules\User\Commands\CreateUserCommand;
use Modules\User\Queries\FindUserQueryHandler;
use Modules\User\Repositories\ReadUserRepository;
use Modules\User\Repositories\WriteUserRepository;
use Modules\User\Commands\CreateUserCommandHandler;
use Modules\User\Repositories\ReadUserRepositoryContract;
use Modules\User\Repositories\WriteUserRepositoryContract;
use Modules\FeatureFlag\Clients\GrowthbookFeatureFlagClient;
use Modules\FeatureFlag\Contracts\FeatureFlagClientInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $singletons = [
            CommandBus::class => IlluminateCommandBus::class,
            QueryBus::class => IlluminateQueryBus::class,

            WriteUserRepositoryContract::class => WriteUserRepository::class,
            ReadUserRepositoryContract::class => ReadUserRepository::class,

            WriteStroneRepositoryContract::class => WriteStroneRepository::class,
            ReadStronyRepositoryContract::class => ReadStronyRepository::class,
            ReadStronePoIdRepositoryContract::class => ReadStronePoIdRepository::class,
            ReadStronePoSlugRepositoryContract::class => ReadStronePoSlugRepository::class,

            WriteProduktRepositoryContract::class => WriteProduktRepository::class,
            WriteGalerieProduktuRepositoryContract::class => WriteGalerieProduktuRepository::class,
            WriteGalerieStronyRepositoryContract::class => WriteGalerieStronyRepository::class,
            ReadProduktyRepositoryContract::class => ReadProduktyRepository::class,
            ReadProduktyKategoriiRepositoryContract::class => ReadProduktyKategoriiRepository::class,
            ReadProduktPoIdRepositoryContract::class => ReadProduktPoIdRepository::class,
            ReadGalerieProduktuRepositoryContract::class => ReadGalerieProduktuRepository::class,
            ReadKategorieProduktowRepositoryContract::class => ReadKategorieProduktowRepository::class,
            DuplikujProduktRepositoryContract::class => DuplikujProduktRepository::class,

            WriteKategorieRepositoryContract::class => WriteKategorieRepository::class,
            ReadKategoriePoIdRepositoryContract::class => ReadKategoriePoIdRepository::class,
            ReadKategorieRepositoryContract::class => ReadKategorieRepository::class,


        ];

        foreach ($singletons as $abstract => $concrete) {
            $this->app->singleton(
                $abstract,
                $concrete,
            );
        }

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $commandBus = app(CommandBus::class);

        $commandBus->register([
            CreateUserCommand::class => CreateUserCommandHandler::class,
            CreateStronaCommand::class => CreateStronaCommandHandler::class,
            CreateGalerieStronyCommand::class => CreateGalerieStronyCommandHandler::class,
            CreateProduktCommand::class => CreateProduktCommandHandler::class,
            CreateGalerieProduktuCommand::class => CreateGalerieProduktuCommandHandler::class,
            UpdateProduktCommand::class => UpdateProduktCommandHandler::class,
            UstawZdjecieProduktuCommand::class => UstawZdjecieProduktuCommandHandler::class,
            UstawZdjecieStronyCommand::class => UstawZdjecieStronyCommandHandler::class,
            UpdateStronaCommand::class => UpdateStronaCommandHandler::class,
            CreateKategoriaCommand::class => CreateKategoriaCommandHandler::class,
            UpdateKategoriaCommand::class => UpdateKategoriaCommandHandler::class,
            DuplikujProduktCommand::class => DuplikujProduktCommandHandler::class
        ]);

        $queryBus = app(QueryBus::class);

        $queryBus->register([
            FindUserQuery::class => FindUserQueryHandler::class,
            PobierzStronyQuery::class => PobierzStronyQueryHandler::class,
            PobierzStronePoIdQuery::class => PobierzStronePoIdQueryHandler::class,
            PobierzStronePoSlugQuery::class => PobierzStronePoSlugQueryHandler::class,
            PobierzProduktyQuery::class => PobierzProduktyQueryHandler::class,
            PobierzProduktyKategoriiQuery::class => PobierzProduktyKategoriiQueryHandler::class,
            PobierzProduktPoIdQuery::class => PobierzProduktPoIdQueryHandler::class,
            PobierzGalerieProduktuQuery::class => PobierzGalerieProduktuQueryHandler::class,
            PobierzKategorieProduktowQuery::class => PobierzKategorieProduktowQueryHandler::class,
            PobierzKategorieQuery::class => PobierzKategorieQueryHandler::class,
            PobierzKategoriePoIdQuery::class => PobierzKategoriePoIdQueryHandler::class,
        ]);
    }
}
