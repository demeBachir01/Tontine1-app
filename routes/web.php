<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controlleur;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ Controlleur::class, 'authentification']);

Route::get('/adherent', [ Controlleur::class, 'adherent']);

Route::get('/tontine', [ Controlleur::class, 'tontine']);

Route::get('/echeance', [ Controlleur::class, 'echeance']);

Route::get('/cotiser', [ Controlleur::class, 'cotiser']);

Route::get('/participer', [ Controlleur::class, 'participer']);
