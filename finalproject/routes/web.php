<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\TugasController;

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

Route::get('/showdata',[KelasController::class,'showdata']) ->name('showdata');
Route::get('/showdataM',[MahasiswaController::class,'showdataM']) ->name('showdataM');
Route::get('/delete/{id}',[KelasController::class,'delete'])->name('delete');
Route::get('/insert',[MahasiswaController::class,'insert']) ->name('insert');
Route::get('/tampildataM/{id}',[MahasiswaController::class,'tampildataM']) ->name('tampildataM');
Route::post('/editM/{id}',[MahasiswaController::class,'editM'])->name('editM');
Route::get('/delete/{id}',[MahasiswaController::class,'deleteM'])->name('delete');
Route::get('/insertD',[DosenController::class,'insertD']) ->name('insertD');
Route::post('/editD/{id}',[DosenController::class,'editD'])->name('editD');
Route::get('/showdataD',[DosenController::class,'showdataD']) ->name('showdataD');
Route::get('/deleteD/{id}',[MahasiswaController::class,'deleteD'])->name('deleteD');
Route::get('/insertMa',[MatakuliahController::class,'insertMa']) ->name('insertMa');
Route::get('/showdataMa',[MatakuliahController::class,'showdataMa']) ->name('showdataMa');
Route::post('/editMa/{id}',[MatakuliahController::class,'editMa'])->name('editMa');
Route::get('/deleteMa/{id}',[MatakuliahController::class,'deleteMa'])->name('deleteMa');
Route::get('/insertT',[TugasController::class,'insertT']) ->name('insertT');
Route::get('/showdataT',[TugasController::class,'showdataT']) ->name('showdataT');
Route::post('/editT/{id}',[TugasController::class,'editT'])->name('editT');
Route::get('/deleteT/{id}',[TugasController::class,'deleteT'])->name('deleteT');