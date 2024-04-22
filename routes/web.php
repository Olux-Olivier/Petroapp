<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FournisseurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

///////////////////////// NOS ROUTES

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
