<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dodaj produkt</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="javascript:history.back()" class="btn btn-sm btn-outline-danger my-4">Anuluj</a>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{ route('produkty.zapisz') }}" method="POST">
                        @csrf
                        <label for="nazwa">Nazwa produktu</label>
                        <input id="nazwa"
                               type="text"
                               class="form-control @error('nazwa') is_invalid @enderror"
                               name="nazwa"
                               value="{{ $produkt->nazwa ?? '' }}"
                               oninput="createSlug()"
                        >
                        @error('nazwa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="slug">Slug</label>
                        <input id="slug"
                               type="text"
                               class="form-control"
                               name="slug"
                        >

                        <div class="form-check form-switch">
                            <input class="form-check-input"
                                   type="checkbox"
                                   name="status"
                                   id="status"
                                   value="1"
                            >
                            <label class="form-check-label" for="status">Opublikowana</label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="cena">Cena</label>
                                <input id="cena"
                                       type="number"
                                       class="form-control @error('cena') is_invalid @enderror"
                                       name="cena"
                                       value="{{ $produkt->cena ?? '' }}"
                                >
                                @error('cena')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label class="form-check-label" for="status">Kategoria</label>
                                <select class="form-control" multiple name="kategorie[]" id="kategoria_id">
                                    <option value="0" selected>Bez kategorii</option>
                                    @foreach($kategorie as $kategoria)
                                        <option value="{{ $kategoria->id }}">{{ $kategoria->nazwa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="opis">Opis produktu</label>

                        <textarea class="form-control"
                                  name="opis"
                                  id="editor"
                        >{{ $produkt->opis ?? '' }}</textarea>
                        @error('opis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="specyfikacja">Specyfikacja produktu</label>

                        <textarea class="form-control"
                                  name="specyfikacja"
                                  id="editor2"
                        >{{ $produkt->specyfikacja ?? '' }}</textarea>
                        @error('specyfikacja')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="tabela_rozmiarow">Tabela wymiarów</label>

                        <textarea class="form-control"
                                  name="tabela_rozmiarow"
                                  id="editor3"
                        >{{ $produkt->tabela_rozmiarow ?? '' }}</textarea>
                        @error('tabela_rozmiarow')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <hr class="mt-5">

                        <button type="submit" class="btn btn-sm btn-outline-success">Zapisz</button>
                        <a href="javascript:history.back()" class="btn btn-sm btn-outline-danger my-4">Anuluj</a>
                    </form>
                </div>
            </div>
        </div>
</main>
