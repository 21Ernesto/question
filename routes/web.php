<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EncuestaController;


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

Route::get('/', [EncuestaController::class, 'index'])->name('encuesta.index');
Route::get('/encuesta/create', [EncuestaController::class, 'create'])->name('encuesta.create');
Route::get('/encuesta/createnrodoc/{person_nrodoc}', [EncuestaController::class, 'person_nrodoc'])->name('encuesta.person_nrodoc');
Route::post('/encuesta/store', [EncuestaController::class, 'store'])->name('encuesta.store')->middleware('web');
Route::post('/person', [EncuestaController::class, 'person_nrdoc'])->name('person_nrdoc');
