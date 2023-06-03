<?php

use App\Http\Controllers\ArrondissementController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\paysController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\VillesController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EntrepriseController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/entreprise', [App\Http\Controllers\EntrepriseController::class, 'index'])->name('entreprise');
//Route::resource('entreprise', App\Http\Controllers\EntrepriseController::class);
Route::resource('entreprise', EntrepriseController::class);
Route::resource('country', countryController::class);
Route::resource('cities', CitiesController::class);
Route::resource('category', CitiesController::class);
Route::resource('pays', paysController::class);
Route::resource('villes', VillesController::class);
Route::resource('communes', CommuneController::class);
Route::resource('secteurs', SecteurController::class);