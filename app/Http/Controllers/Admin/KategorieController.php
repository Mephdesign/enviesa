<?php

namespace App\Http\Controllers\Admin;

use App\Bus\CommandBus;
use App\Bus\QueryBus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Kategorie\Commands\CreateKategoriaCommand;
use Modules\Kategorie\Queries\PobierzKategorieQuery;
use Modules\Produkty\Commands\UstawZdjecieStronyCommand;
use Modules\Strony\Commands\CreateGalerieStronyCommand;
use Modules\Strony\Commands\CreateStronaCommand;
use Modules\Strony\Commands\UpdateStronaCommand;
use Modules\Strony\Queries\PobierzStronePoIdQuery;
use Modules\Strony\Queries\PobierzStronyQuery;

class KategorieController extends Controller
{
    public function __construct(
        protected CommandBus $commandBus,
        protected QueryBus $queryBus,
    ) {
    }

    public function pobierzListeKategorii()
    {
        $kategorieList = $this->queryBus->ask(
            new PobierzKategorieQuery()
        );

        return view('admin.dashboard', [
            'kategorieList' => $kategorieList,
            'key' => 'kategorieLista'
        ]);
    }

    public function dodajKategorie()
    {
        return view('admin.dashboard', [
            'key' => 'kategorieDodaj'
        ]);
    }

    public function zapiszKategorie(Request $request)
    {
        $id = $this->commandBus->dispatch(
            new CreateKategoriaCommand(
                nazwa: $request->nazwa,
                slug: $request->slug
            )
        );

        toastr()->success('Kategoria została dodana. ID '.$id);
        return redirect(route('kategorie.lista'));
    }

    public function edytujKategorie(int $id)
    {
        $kategoria = $this->queryBus->ask(
            new PobierzKategoriePoIdQuery(
                id: $id
            )
        );
        return view('admin.dashboard', [
            'key' => 'kategoriaEdytuj',
            'strona' => $kategoria,
        ]);
    }

        public function zapiszKategoriePoEdycji(int $id, Request $request)
    {
        $this->commandBus->dispatch(
            new UpdateKategoriaCommand(
                id: $id,
                nazwa: $request->nazwa,
                slug: $request->slug,
            )
        );
        toastr()->success('Kategoria została zaktualizowana');
        return redirect()->back();
    }

}
