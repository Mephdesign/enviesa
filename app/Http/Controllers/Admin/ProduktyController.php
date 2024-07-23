<?php

namespace App\Http\Controllers\Admin;

use App\Bus\CommandBus;
use App\Bus\QueryBus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Kategorie\Queries\PobierzKategorieQuery;
use Modules\Produkty\Commands\CreateGalerieProduktuCommand;
use Modules\Produkty\Commands\CreateProduktCommand;
use Modules\Produkty\Commands\DuplikujProduktCommand;
use Modules\Produkty\Commands\UpdateProduktCommand;
use Modules\Produkty\Commands\UstawZdjecieProduktuCommand;
use Modules\Produkty\Queries\PobierzGalerieProduktuQuery;
use Modules\Produkty\Queries\PobierzKategorieProduktowQuery;
use Modules\Produkty\Queries\PobierzProduktPoIdQuery;
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
            new PobierzProduktyQuery()
        );


        return view('admin.dashboard', [
            'produktyList' => $produktyList,
            'key' => 'produktyLista'
        ]);
    }

    public function dodajProdukt()
    {
        $kategorie = $this->queryBus->ask(
            new PobierzKategorieQuery()
        );
        return view('admin.dashboard', [
            'kategorie' => $kategorie,
            'key' => 'produktyDodaj'
        ]);
    }

    public function zapiszProdukt(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nazwa' => 'required',
            'cena' => 'required',
            'opis' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $id = $this->commandBus->dispatch(
                new CreateProduktCommand(
                    nazwa: $request->nazwa,
                    slug: $request->slug,
                    kategorie: json_encode($request->kategorie),
                    cena: $request->cena,
                    opis: $request->opis,
                    specyfikacja: $request->specyfikacja ?? '',
                    tabela_rozmiarow: $request->tabela_rozmiarow ?? '',
                    status: $request->status ?? 0,
                    img: $request->img ?? ''
                )
        );
        return redirect( route('produkty.edytuj',['id' => $id]));
    }

    public function edytujProdukt(int $id)
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

        $kategorie = $this->queryBus->ask(
            new PobierzKategorieProduktowQuery()
        );

        return view('admin.dashboard', [
            'key' => 'produktyEdytuj',
            'produkt' => $produkt,
            'galeria' => $galeria,
            'kategorie' => $kategorie
        ]);
    }

    public function zapiszProduktPoEdycji(int $id, Request $request)
    {
        $id = $this->commandBus->dispatch(
            new UpdateProduktCommand(
                id: $id,
                nazwa: $request->nazwa,
                slug: $request->slug,
                kategorie: json_encode($request->kategorie),
                cena: $request->cena,
                opis: $request->opis,
                specyfikacja: $request->specyfikacja ?? '',
                tabela_rozmiarow: $request->tabela_rozmiarow ?? '',
                status: $request->status ?? 0,
                img: $request->img ?? ''
            )
        );
        toastr()->success('Produkt został zaktualizowany');
        return redirect()->back();
    }
    public function zapiszGalerieProduktu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $this->commandBus->dispatch(new CreateGalerieProduktuCommand(
            images: $request->images,
            produkt_id: $request->produkt_id,
            nazwa: $request->nazwa ?? '',
            path: 'images/',
        ));

        toastr()->success('Produkt został zaktualizowany');
        return redirect()->back();
    }

    public function ustawZdjecieGlowne(int $id, string $image)
    {
        $status = $this->commandBus->dispatch(
            new UstawZdjecieProduktuCommand(
                id: $id,
                img: $image
            )
        );
        toastr()->success('Zdjęcie główne zostało zaktualizowane');
        return redirect()->back();
    }

    public function aktualizujGalerieApartamentu()
    {

    }

    public function duplikujProdukt(int $id)
    {
        $nowyProdukt = $this->commandBus->dispatch(
            new DuplikujProduktCommand(
                id: $id
            )
        );
        toastr()->success('Zduplikowano produkt');
        return redirect()->back();
    }
}
