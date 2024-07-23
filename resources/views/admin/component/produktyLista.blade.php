<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lista produktów</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('produkty.dodaj') }}" type="button" class="btn btn-sm btn-outline-primary">Dodaj</a>
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>
    <div class="table-responsive small mt-5">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data utworzenia</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Slug</th>
                <th scope="col">Status</th>
                <th scope="col">Operacje</th>
            </tr>
            </thead>
            <tbody>
                @foreach($produktyList as $produkt)
                    <tr>
                        <td> {{ $produkt->id }} </td>
                        <td> {{ $produkt->created_at }} </td>
                        <td> {{ $produkt->nazwa }} </td>
                        <td> {{ $produkt->slug }} </td>
                        <td> {{ $produkt->status == 1 ? 'Opublikowana' : 'Szkic' }} </td>
                        <td>
                            <a type="button" class="btn btn-sm btn-outline-success" href="{{ route('produkty.edytuj', ['id' => $produkt->id]) }}">E</a>
                            <a type="button" class="btn btn-sm btn-outline-success" href="{{ route('produkty.duplikuj', ['id' => $produkt->id]) }}">D</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
