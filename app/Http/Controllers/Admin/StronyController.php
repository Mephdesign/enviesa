<?php

namespace App\Http\Controllers\Admin;

use App\Bus\CommandBus;
use App\Bus\QueryBus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Kategorie\Queries\PobierzKategorieQuery;
use Modules\Produkty\Commands\UstawZdjecieStronyCommand;
use Modules\Strony\Commands\CreateGalerieStronyCommand;
use Modules\Strony\Commands\CreateStronaCommand;
use Modules\Strony\Commands\UpdateStronaCommand;
use Modules\Strony\Queries\PobierzStronePoIdQuery;
use Modules\Strony\Queries\PobierzStronyQuery;

class StronyController extends Controller
{
    public function __construct(
        protected CommandBus $commandBus,
        protected QueryBus $queryBus,
    ) {
    }

    public function pobierzListeStron()
    {
        $stronyList = $this->queryBus->ask(
            new PobierzStronyQuery()
        );


        return view('admin.dashboard', [
            'stronyList' => $stronyList,
            'key' => 'stronyLista'
        ]);
    }

    public function dodajStrone()
    {
        return view('admin.dashboard', [
            'key' => 'stronyDodaj'
        ]);
    }

    public function edytujStrone(int $id)
    {
        $strona = $this->queryBus->ask(
            new PobierzStronePoIdQuery(
                id: $id
            )
        );
        return view('admin.dashboard', [
            'key' => 'stronyEdytuj',
            'strona' => $strona,
        ]);
    }

        public function zapiszStronePoEdycji(int $id, Request $request)
    {
        $this->commandBus->dispatch(
            new UpdateStronaCommand(
                id: $id,
                nazwa: $request->nazwa,
                slug: $request->slug,
                zajawka: $request->zajawka ?? '',
                content: $request->content ?? '',
                status: $request->status ?? 0,
            )
        );
        toastr()->success('Strona została zaktualizowana');
        return redirect()->back();
    }


    public function zapiszStrone(Request $request)
    {
        $id = $this->commandBus->dispatch(
                new CreateStronaCommand(
                    nazwa: $request->nazwa,
                    slug: $request->slug,
                    status: $request->status ?? 0
                )
        );
        toastr()->success('Strona została dodana. ID: '.$id);
        return redirect(route('strony.lista'));
    }

    public function zapiszGalerieStrony(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $this->commandBus->dispatch(new CreateGalerieStronyCommand(
            images: $request->images,
            strona_id: $request->strona_id,
            nazwa: $request->nazwa ?? '',
            path: 'images/strony/',
        ));

        toastr()->success('Zdjęcie zostało dodane');
        return redirect()->back();
    }

    public function ustawZdjecieGlowne(int $id, string $image)
    {
        $status = $this->commandBus->dispatch(
            new UstawZdjecieStronyCommand(
                id: $id,
                img: $image
            )
        );
        toastr()->success('Zdjęcie główne zostało zaktualizowane');
        return redirect()->back();
    }
}
