<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LatihanController;
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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index']);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return "Halo World";
// });

// Route::get('/latihan', [LatihanController::class, 'index']);

// Route::get('/blog/{id}', [LatihanController::class, 'blog']);

// Route::get('/blog/{idblog}/komentar/{idkomentar}', [LatihanController::class, 'komentar']);

// Route::get('/beranda', [LatihanController::class, 'beranda']);
