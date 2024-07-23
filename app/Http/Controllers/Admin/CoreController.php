<?php

namespace App\Http\Controllers\Admin;

use App\Bus\CommandBus;
use App\Bus\QueryBus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Produkty\Commands\UstawZdjecieStronyCommand;
use Modules\Strony\Commands\CreateGalerieStronyCommand;
use Modules\Strony\Commands\CreateStronaCommand;
use Modules\Strony\Commands\UpdateStronaCommand;
use Modules\Strony\Queries\PobierzStronePoIdQuery;
use Modules\Strony\Queries\PobierzStronyQuery;

class CoreController extends Controller
{

    public function index()
    {
        return view('admin.dashboard', [
            'key' => 'dashboard'
        ]);
    }

}
