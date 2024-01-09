<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('home');

// rotte artisti
// CREATE
Route::get('/artists/new', [ArtistController::class, 'create'])->name('artists.create');
Route::post('/artists/added', [ArtistController::class, 'store'])->name('artists.store');
// READ
Route::get('/artists/collection', [ArtistController::class, 'index'])->name('artists.index');
Route::get('artists/detail/{artist}', [ArtistController::class, 'show'])->name('artist.show');
// UPDATE
Route::get('/artists/edit/{artist}', [ArtistController::class, 'edit'])->name('artist.edit');
Route::put('/artists/edit/{artist}', [ArtistController::class, 'update'])->name('artist.update');
// DELETE
Route::delete('/artists/delete/{artist}', [ArtistController::class, 'destroy'])->name('artist.delete');
// FILTRO PER CATEGORIA
Route::get('/artists/categories/{category}', [ArtistController::class, 'filterByCategory'])->name('artists.filter');

// rotte concerti
// index
Route::get('/live/attended', [LiveController::class, 'index'])->name('live.index');
// form
Route::get('/live/new', [LiveController::class, 'create'])->name('live.create');
Route::post('/live/added', [LiveController::class, 'store'])->name('live.store');