<?php

use App\Http\Controllers\Absen;
use App\Http\Controllers\Beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Duabelasrpl;
use App\Http\Controllers\Duabelastkj;


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



Route::get('/beranda', function () {
    return view('beranda', [
        'title' => 'Home'
    ]);
});
Route::get('/datasiswa', function () {
    return view('datasiswa', [
        'title' => 'Data Siswa'
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil User'
    ]);
});


// Route::get('/12-rpl', [Duabelasrpl::class, 'index',]);
Route::resource('/tigarpl', Duabelasrpl::class);
Route::resource('/tigatkj', Duabelastkj::class);

// Route::get('/12-rpl/addrpl', [Duabelasrpl::class, 'store',]);

// Route::post('/addrpl', [Duabelasrpl::class, 'create',]);
// Route::put('/12-rpl-edit', [Duabelasrpl::class, 'edit',]);
// Route::post('/12-rp-store', [Duabelasrpl::class, 'store',]);


// Route::resource('/12-rpl', Duabelasrpl::class);
Route::resource('/absen', Absen::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('datasiswa', [Beranda::class, 'index']);
