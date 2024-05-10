<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\PompisteController;
use App\Http\Controllers\CmdfournisseurController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PretController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

///////////////////////// NOS ROUTES

//route vers login
Route::get('/login', function (){
    return view('Auth.login');
})->name('auth.login');


Route::get('/gerant/taches', function (){
    return view('Gerants.taches');
})->name('gerant.taches');


Route::resource('client', ClientController::class)->names([
    'index' => 'client.index',
    'create' => 'client.create',
    'edit' => 'client.edit',
    'update' => 'client.update'
]);

Route::resource('fournisseur', FournisseurController::class)->names([
    'index' => 'fournisseur.index',
    'create' => 'fournisseur.create',
    'edit' => 'fournisseur.edit',
    'update' => 'fournisseur.update'
]);


Route::resource('operation', OperationController::class)->names([
    'index' => 'operation.index',
    'create' => 'operation.create',
    'edit' => 'operation.edit',
    'update' => 'operation.update'
]);


Route::resource('article', ArticleController::class)->names([
    'index' => 'article.index',
    'create' => 'article.create',
    'edit' => 'article.edit',
    'update' => 'article.update'
]);


Route::resource('pompiste', PompisteController::class)->names([
    'index' => 'pompiste.index',
    'create' => 'pompiste.create',
    'edit' => 'pompiste.edit',
    'update' => 'pompiste.update'
]);

Route::resource('cmdfournisseur', CmdfournisseurController::class)->names([
    'index' => 'cmdfournisseur.index',
    'create' => 'cmdfournisseur.create',
    'edit' => 'cmdfournisseur.edit',
    'update' => 'cmdfournisseur.update'
]);

Route::resource('pret', PretController::class)->names([
    'index' => 'pret.index',
    'create' => 'pret.create',
    'edit' => 'pret.edit',
    'update' => 'pret.update',
]);

Route::post('valide', [PretController::class, 'valide'])->name('pret.valide');



////////////////////////// NOS ROUTES

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
