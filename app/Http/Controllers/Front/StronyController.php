<?php

namespace App\Http\Controllers\Front;

use App\Bus\CommandBus;
use App\Bus\QueryBus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Produkty\Commands\CreateGalerieProduktuCommand;
use Modules\Produkty\Commands\CreateProduktCommand;
use Modules\Produkty\Commands\UpdateProduktCommand;
use Modules\Produkty\Commands\UstawZdjecieProduktuCommand;
use Modules\Produkty\Queries\PobierzGalerieProduktuQuery;
use Modules\Produkty\Queries\PobierzProduktPoIdQuery;
use Modules\Produkty\Queries\PobierzProduktyQuery;
use Modules\Strony\Queries\PobierzStronePoSlugQuery;

class StronyController extends Controller
{
    public function __construct(
        protected CommandBus $commandBus,
        protected QueryBus $queryBus,
    ) {
    }

    public function pobierzStroneGlowna()
    {
        $strona = $this->queryBus->ask(
            new PobierzStronePoSlugQuery(
                slug: 'home'
            )
        );

        return view('front.strona', [
            'strona' => $strona,
        ]);
    }
    public function pobierzStronePoSlug(string $slug)
    {
        $strona = $this->queryBus->ask(
            new PobierzStronePoSlugQuery(
                slug: $slug
            )
        );

        return view('front.strona', [
            'strona' => $strona,
        ]);
    }
}
