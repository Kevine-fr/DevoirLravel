<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferencielController;
use App\Http\Controllers\TypeController;
use App\Models\Formation;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TypeController::class, 'store'])->name('Accueil');

Route::get('/types/{id}', [TypeController::class, 'show'])->whereNumber('id');
Route::get('/referentiels/{id}', [ReferencielController::class, 'show'])->whereNumber('id');
Route::get('/formations/{id}', [FormationController::class,'show'])->whereNumber('id');
Route::post('/ajoute', [EtudiantController::class,'store']);
Route::get('/dashboard', [FormationController::class, 'canByfor']);
Route::get('/Formation_Par_Referentiel',[ReferencielController::class, 'forByRef']);
Route::get('/candidats_par_sexe',[EtudiantController::class,'repartitionParSexe']);
Route::get('/Tranche_age', [EtudiantController::class, 'trancheAge']);


