<?php

use App\Http\Controllers\AcceuilController;
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
route::get('/contact', [App\Http\Controllers\AcceuilController::class, 'contact'])->name('contact');
route::get('/search', [App\Http\Controllers\VillesController::class, 'search'])->name('search');
route::get('/about', [App\Http\Controllers\AcceuilController::class, 'about'])->name('about');
route::get('/service', [App\Http\Controllers\AcceuilController::class, 'service'])->name('service');
route::get('/prix', [App\Http\Controllers\AcceuilController::class, 'prix'])->name('prix');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/selectville', [App\Http\Controllers\EntrepriseController::class, 'villes'])->name('selectville');
Route::get('/selectcommune', [App\Http\Controllers\EntrepriseController::class, 'communes'])->name('selectcommune');
Route::get('/selectsecteur', [App\Http\Controllers\EntrepriseController::class, 'secteurs'])->name('selectsecteur');
Route::get('/selectaille', [App\Http\Controllers\EntrepriseController::class, 'tailles'])->name('selecttaille');
Route::get('/recherche', [App\Http\Controllers\EntrepriseController::class, 'recherche'])->name('recherche');
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
//livewire
Route::get('user-datatables', function () {
    return view('welcome');
});
