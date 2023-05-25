<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
//     return view('index_pelanggan');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Auth::routes();


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['auth','level:admin']], function(){

    Route::get('/dashboard', function(){
        return view ('dashboard_admin');
    })->name('dashboard');  
    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
		Route::get('', 'index')->name('kategori');
		Route::get('tambah', 'tambah')->name('kategori.tambah');
		Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori.edit');
		Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
	});

    Route::controller(BarangController::class)->prefix('barang')->group(function () {
		Route::get('', 'index')->name('barang');
		Route::get('tambah', 'tambah')->name('barang.tambah');
		Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('barang.edit');
		Route::post('edit/{id}', 'update')->name('barang.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
	});

});
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['auth','level:pelanggan']], function(){
    
    Route::get('/home', function(){
        return view ('index_pelanggan');
    });

});

Route::get('auth/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']); 

