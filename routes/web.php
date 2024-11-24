<?php

use App\Http\Controllers\Admin\CoreController;
use App\Http\Controllers\Admin\KategorieController;
use App\Http\Controllers\Admin\ProduktyController;
use App\Http\Controllers\Admin\StronyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produkty', [App\Http\Controllers\Front\ProduktyController::class, 'pobierzListeProduktow'])->name('front.produkty');

Route::get('/produkty/{id}', [App\Http\Controllers\Front\ProduktyController::class, 'pobierzProduktPoId'])->name('front.produkt');
Route::get('/produkty/kat/{kategoria}', [App\Http\Controllers\Front\ProduktyController::class, 'pobierzProduktyKategorii'])->name('front.produktyKategorii');



Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [CoreController::class, 'index'])->name('dashboard');
    Route::get('/admin/strony', [StronyController::class, 'pobierzListeStron'])->name('strony.lista');
    Route::get('/admin/strony/dodaj', [StronyController::class, 'dodajStrone'])->name('strony.dodaj');
    Route::get('/admin/strony/{id}', [StronyController::class, 'edytujStrone'])->name('strony.edytuj');
    Route::post('/admin/strony/zapisz', [StronyController::class, 'zapiszStrone'])->name('strony.zapisz');
    Route::put('/admin/strony/{id}', [StronyController::class, 'zapiszStronePoEdycji'])->name('strony.zapiszPoEdycji');
    Route::post('admin/strony/zapisz-galerie', [StronyController::class, 'zapiszGalerieStrony'])->name('strony.zapiszGalerie');

    Route::get('/admin/produkty', [ProduktyController::class, 'pobierzListeProduktow'])->name('produkty.lista');
    Route::get('/admin/produkty/dodaj', [ProduktyController::class, 'dodajProdukt'])->name('produkty.dodaj');
    Route::get('/admin/produkty/{id}', [ProduktyController::class, 'edytujProdukt'])->name('produkty.edytuj');
    Route::get('/admin/produkty/duplikuj/{id}', [ProduktyController::class, 'duplikujProdukt'])->name('produkty.duplikuj');
    Route::put('/admin/produkty/{id}', [ProduktyController::class, 'zapiszProduktPoEdycji'])->name('produkty.zapiszPoEdycji');
    Route::post('/admin/produkty/zapisz', [ProduktyController::class, 'zapiszProdukt'])->name('produkty.zapisz');
    Route::get('/admin/produkty/{id}/{image}', [ProduktyController::class, 'ustawZdjecieGlowne'])->name('produkty.ustawZdjecie');

    Route::post('admin/produkty/zapisz-galerie', [ProduktyController::class, 'zapiszGalerieProduktu'])->name('produkty.zapiszGalerie');
    Route::get('/admin/produkty/{produkt_id}', [ProduktyController::class, 'ustawZdjecieGlowne']);
    Route::put('/aktualizuj-galerie', [ProduktyController::class, 'aktualizujGalerieApartamentu']);

    Route::get('/admin/kategorie', [KategorieController::class, 'pobierzListeKategorii'])->name('kategorie.lista');
    Route::get('/admin/kategorie/dodaj', [KategorieController::class, 'dodajKategorie'])->name('kategorie.dodaj');
    Route::post('/admin/kategorie/zapisz', [KategorieController::class, 'zapiszKategorie'])->name('kategorie.zapisz');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/zamowiania/{id}', [App\Http\Controllers\Front\ZamowieniaController::class, 'dodajZamowienie'])->name('front.zamowienie');


require __DIR__.'/auth.php';
Route::get('/{slug}', [App\Http\Controllers\Front\StronyController::class, 'pobierzStronePoSlug'])->name('front.strona');
