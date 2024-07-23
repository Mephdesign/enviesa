<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dodaj kategorie</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="javascript:history.back()" class="btn btn-sm btn-outline-danger my-4">Anuluj</a>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{ route('kategorie.zapisz') }}" method="POST">
                        @csrf
                        <label for="nazwa">Nazwa kategorii</label>
                        <input id="nazwa" type="text" class="form-control" name="nazwa" oninput="createSlug()">

                        <label for="slug">Slug</label>
                        <input id="slug" type="text" class="form-control" name="slug">

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status" id="status" value="1" checked>
                            <label class="form-check-label" for="status">Opublikowana</label>
                        </div>

                        <button type="submit" class="btn btn-sm btn-outline-success">Zapisz</button>
                        <a href="javascript:history.back()" class="btn btn-sm btn-outline-danger my-4">Anuluj</a>
                    </form>
                </div>
            </div>
        </div>
</main>
