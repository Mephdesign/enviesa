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
use Modules\Produkty\Queries\PobierzProduktyKategoriiQuery;
use Modules\Produkty\Queries\PobierzProduktyQuery;

class ProduktyController extends Controller
{
    public function __construct(
        protected CommandBus $commandBus,
        protected QueryBus $queryBus,
    ) {
    }

    public function pobierzListeProduktow()
    {
        $produktyList = $this->queryBus->ask(
            new PobierzProduktyQuery(
            )
        );

        return view('front.produkty', [
            'produkty' => $produktyList,
            'key' => 'produktyKategoriiLista'
        ]);
    }


    public function pobierzProduktyKategorii(int $kategoria)
    {
        $produktyList = $this->queryBus->ask(
            new PobierzProduktyKategoriiQuery(
                kategoria: $kategoria
            )
        );


        return view('front.produkty', [
            'produkty' => $produktyList,
            'key' => 'produktyKategoriiLista'
        ]);
    }




    public function pobierzProduktPoId(int $id)
    {
        $produkt = $this->queryBus->ask(
            new PobierzProduktPoIdQuery(
                id: $id
            )
        );

        $galeria = $this->queryBus->ask(
            new PobierzGalerieProduktuQuery(
                id: $id
            )
        );
        $kategorie = json_decode($produkt->kategorie,true);
        $produkt->kategorie = $kategorie;

        return view('front.produkt', [
            'produkt' => $produkt,
            'galeria' => $galeria
        ]);
    }
}
