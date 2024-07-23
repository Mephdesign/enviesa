<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dodaj strone</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="javascript:history.back()" class="btn btn-sm btn-outline-danger my-4">Anuluj</a>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{ route('strony.zapiszPoEdycji', ['id' => $strona->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="nazwa">Nazwa strony</label>
                        <input id="nazwa" type="text" class="form-control" name="nazwa" value="{{ $strona->nazwa }}" oninput="createSlug()">

                        <label for="slug">Slug</label>
                        <input id="slug" type="text" class="form-control" name="slug" value="{{ $strona->slug }}">

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status" id="status" value="1" checked>
                            <label class="form-check-label" for="status">Opublikowana</label>
                        </div>

                        <label for="zajawka">Zajawka</label>

                        <textarea class="ckeditor form-control"
                                  name="zajawka"
                                  id="editor"
                        >{{ $strona->zajawka ?? '' }}</textarea>
                        @error('zajawka')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="content">Treść</label>

                        <textarea class="ckeditor form-control"
                                  name="content"
                                  id="editor2"
                        >{{ $strona->content ?? '' }}</textarea>
                        @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-sm btn-outline-success">Zapisz</button>
                        <a href="javascript:history.back()" class="btn btn-sm btn-outline-danger my-4">Anuluj</a>
                    </form>
                </div>
            </div>
            <hr class="mt-5">

            <div class="row">
                <div class="col-md-12 mb-3">
                    <article class="content px-3 py-5 p-md-5">
                        <p>Galeria</p>
                        <form action="{{ route('strony.zapiszGalerie') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="strona_id"
                                    id="strona_id"
                                    value="{{ $strona->id ?? $id ?? '' }}" hidden>
                                <label class="form-label" for="strona_id">Wybierz zdjęcia:</label>
                                <input
                                    type="file"
                                    name="images[]"
                                    id="inputImage"
                                    multiple
                                    class="form-control @error('images') is-invalid @enderror">
                                @error('images')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Dodaj zdjęcia</button>
                            </div>
                        </form>
                        <div class="row">
                            @if(isset($galeria))
                                @foreach($galeria as $image)
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-10 thumbnail img-thumbnail">
                                                <img src="{{ asset('images/'.$strona->id.'/'.$image->nazwa) }}">
                                            </div>
                                            <div class="col-md-2">
                                                @if($strona->img == $image->nazwa)
                                                    <a href="/admin/{{ $strona->id.'/'.$image->nazwa }}"
                                                       type="button" class="btn btn-outline-primary" hidden><i
                                                            class="bi bi-image"></i></a>
                                                    <a type="button" class="btn btn-outline-danger" hidden><i
                                                            class="bi bi-trash" title="Usuń"></i></a>
                                                @else
                                                    <a href="{{ route('produkty.ustawZdjecie',['id' => $strona->id, 'image' => $image->nazwa])}}"
                                                       type="button" class="btn btn-outline-primary"
                                                       title="Ustaw jako główne"><i class="bi bi-image"></i></a>
                                                    <form
                                                        action="/admin/produkty/{{ $strona->id.'/'.$image->nazwa }}"
                                                        method="POST">
                                                        @csrf <!-- {{ csrf_field() }} -->
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"><i
                                                                class="bi bi-trash" title="Usuń"></i></button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-grid gap-2 d-md-block">
                                                <form action="/admin/apartamenty/aktualizuj-galerie"
                                                      method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <input class="form-control" name="apartament_id" type="text"
                                                           value="{{ $strona->id }}" hidden>
                                                    <input class="form-control" name="image_name" type="text"
                                                           value="{{ $image->nazwa }}" hidden>
                                                    <input class="form-control" name="title" type="text"
                                                           value="{{ $image->title ?? '' }}"
                                                           placeholder="nazwa">
                                                    <input class="form-control" name="alt" type="text"
                                                           value="{{ $image->alt ?? '' }}"
                                                           placeholder="tekst alternatywny">

                                                    <button type="submit" class="btn btn-success">Zapisz
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </article>
                </div>
            </div>
        </div>
</main>
