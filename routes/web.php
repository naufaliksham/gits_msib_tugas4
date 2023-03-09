<?php

use App\Http\Controllers\tryBladeTemplate;
use App\Http\Controllers\tryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/nama', function () {
//     return "Halo pengunjung";
// });

// Route::get('/nama/{namaorang}', function($namaorang = 'naufal') {
//     return "Nama = " . $namaorang;
// });

Route::get('/nama/{nama}', function($nama) {
    return "Halo <b>$nama</b>";
})->where('id', '[0-9]+'); //kondisi id hanya angka

Route::get('/nama/{nama}/{id}', function($nama, $id) {
    return "Halo  <b>$nama</b> dengan ID $id";
})->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']); // id hanya angka, nama hanya huruf

// Dengan controller
Route::get('/post', [tryController::class, 'index']);
Route::get('/post/{nama}', [tryController::class, 'detail'])->where('nama', '[A-Za-z]+');
Route::get('/', [tryController::class, 'index']);
Route::get('/{nama}', [tryController::class, 'detail']);

// Route::get('/', [tryBladeTemplate::class, 'index']);
Route::get('/about', [tryBladeTemplate::class, 'about']);
Route::get('/contact', [tryBladeTemplate::class, 'contact']);

