<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// PART USER

Route::get('/', function () {
    return view('index');
});

Route::get('/connexion', function () {
    return view('auth.connexion');
})->name('connexion');

Route::get('/inscription', function () {
    return view('auth.inscription');
})->name('inscription');

Route::get('/Facture', function () {
    return view('layouts.userspace.facture');
})->name('facture');

Route::get('/Prenium', function () {
    return view('layouts.userspace.prenium');
})->name('Prenium');

Route::get('/Company', function () {
    return view('layouts.userspace.company');
})->name('company');

Route::get('/Accueil', function () {
    return view('index');
})->name('index');

//Route pour voir les commande dans le dashboard





// PART ADMI

Route::get('/DashboardAdmi', function () {
    return view('auth.register');
});

Route::post('/login', [LoginController::class, 'login'])->name('login1')->middleware("guest");

Route::post('/login-add', [LoginController::class, 'register'])->name('register1')->middleware("guest");


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
