<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatController;
use App\Http\Controllers\Stat2Controller;
use App\Http\Controllers\EntrainementController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profilage', [Stat2Controller::class, 'create'])->name('profilage');
    Route::post('/profilage', [Stat2Controller::class, 'store'])->name('stats.store');
    Route::get('/resultat', [Stat2Controller::class, 'showResult'])->name('resultat');
    Route::get('/accueil', [Stat2Controller::class, 'index'])->name('accueil');



    Route::get('/domaine/{id}', [EntrainementController::class, 'show'])->name('domaine.show');
    Route::post('/store-order-preference', [UserController::class, 'storeOrderPreference'])->name('user.storeOrderPreference');


    Route::get('/create', [EntrainementController::class, 'create'])->name('create');
    Route::post('/create', [EntrainementController::class, 'store'])->name('store');
    Route::get('/edit/{entrainement}', [EntrainementController::class, 'edit'])->name('edit');
    Route::put('/update/{entrainement}', [EntrainementController::class, 'update'])->name('update');
    Route::delete('/delete{entrainement}', [EntrainementController::class, 'destroy'])->name('delete');




    Route::get('/video/{id}', [EntrainementController::class, 'play'])->name('video');
});

// Route::get('/accueil', function () {
//     return view('accueil');
// })->name('accueil');


// Route::get('/domaine', function () {
//     return view('domaine');
// })->name('domaine');


Route::get('/choix', function () {
    return view('choix');
})->name('choix');


