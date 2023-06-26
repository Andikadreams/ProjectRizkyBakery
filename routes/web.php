<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;

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
//     return view('search');
// });

/*------------------------------------------
--------------------------------------------
All Guest Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('auth/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']); 
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('register/simpan',[AuthController::class, 'registerSimpan'])->name('register.simpan');
Auth::routes();

/*------------------------------------------
--------------------------------------------
All Owner Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['auth', 'level:owner']], function () {
	Route::get('/dashboard/owner', [App\Http\Controllers\HomeController::class, 'ownerHome'])->name('dashboard_owner');

	Route::controller(UserController::class)->prefix('user')->group(function () {
		Route::get('', 'index')->name('user');
		Route::get('tambah', 'create')->name('user.create');
		Route::post('tambah', 'store')->name('user.create.store');
		Route::get('edit/{id}', 'edit')->name('user.edit');
		Route::post('edit/{id}', 'update')->name('user.create.update');
		Route::get('hapus/{id}', 'destroy')->name('user.destroy');
		Route::get('/search','search')->name('user.search');
	});

	Route::controller(PesananController::class)->prefix('laporan')->group(function (){
		Route::get('', 'indexPenjualan')->name('laporan.penjualan');
		Route::get('/search/penjualan','indexPenjualan')->name('laporan.search.penjualan');
	});

	Route::get('/laporan/cetak', [App\Http\Controllers\PesananController::class, 'cetakLaporan'])->name('cetak.laporan');
	Route::get('/laporan/cetak/{start_date}/{end_date}', [App\Http\Controllers\PesananController::class, 'cetakPertanggal'])->name('laporan.cetak.pertanggal');

	// Route::controller(ProfileController::class)->prefix('profile')->group(function (){
	// 	Route::get('', 'show')->name('profile.owner');
	// 	Route::get('edit/{id}', 'edit')->name('profile.edit.owner');
	// 	Route::post('edit/{id}', 'update')->name('profile.create.edit.owner');
	// });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['auth', 'level:admin']], function () {

	Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('dashboard');
	Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
		Route::get('', 'index')->name('kategori');
		Route::get('tambah', 'create')->name('kategori.create');
		Route::post('tambah', 'store')->name('kategori.create.store');
		Route::get('edit/{id}', 'edit')->name('kategori.edit');
		Route::post('edit/{id}', 'update')->name('kategori.create.update');
		Route::get('detail/{id}', 'show')->name('kategori.detail');
		Route::get('hapus/{id}', 'destroy')->name('kategori.destroy');
		Route::get('/search','search')->name('kategori.search');

	});

	Route::controller(ProdukController::class)->prefix('produk')->group(function () {
		Route::get('', 'index')->name('produk');
		Route::get('tambah', 'create')->name('produk.create');
		Route::post('tambah', 'store')->name('produk.create.store');
		Route::get('edit/{id}', 'edit')->name('produk.edit');
		Route::post('edit/{id}', 'update')->name('produk.create.update');
		Route::get('detail/{id}', 'show')->name('produk.detail');
		Route::get('hapus/{id}', 'destroy')->name('produk.destroy');
		Route::get('/search','search')->name('produk.search');
	});

	Route::controller(PesananController::class)->prefix('pesanan')->group(function (){
		Route::get('', 'index')->name('pesanan');
		Route::get('detail/{id}','show')->name('pesanan.detail');
		Route::get('/search','index')->name('pesanan.search');
	});

	Route::controller(ProfileController::class)->prefix('profile-admin')->group(function (){
		Route::get('', 'show')->name('profile');
		Route::get('edit/{id}', 'edit')->name('profile.edit');
		Route::post('edit/{id}', 'update')->name('profile.create.edit');
	});
	
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['auth', 'level:pelanggan']], function () {

	// Route::get('/home', function(){
	//     return view ('index_pelanggan');
	// })->name('home');
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'pelangganHome'])->name('home');
	Route::get('shop', [ShopController::class, 'index'])->name('shop');
	Route::get('pesan/{id}', [OrderController::class, 'index'])->name('pesan');
	Route::post('pesan/{id}', [OrderController::class, 'process'])->name('process');
	Route::get('check-out', [OrderController::class, 'check_out'])->name('checkout');
	Route::delete('check-out/{id}', [OrderController::class, 'delete'])->name('delete');
	Route::get('konfirmasi-check-out', [OrderController::class, 'konfirmasi'])->name('konfirmasi');
	Route::get('riwayat', [RiwayatController::class, 'index'])->name('riwayat');
	route::get('riwayat/{id}', [RiwayatController::class, 'detail'])->name('riwayat_detail');
	Route::get('riwayat/{id}/export', [RiwayatController::class, 'exportToPDF'])->name('riwayat.export');
	Route::post('shop', [ShopController::class, 'search'])->name('search');

	Route::controller(ProfileController::class)->prefix('profile')->group(function (){
		Route::get('', 'showPelanggan')->name('profile.pelanggan');
		Route::get('edit/{id}', 'editPelanggan')->name('profile.edit.pelanggan');
		Route::post('edit/{id}', 'updatePelanggan')->name('profile.create.edit.pelanggan');
	});
});

Route::get('auth/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

// Route::controller(AuthController::class)->group(function () {
// 	Route::get('register', 'register')->name('register');
// 	Route::post('register', 'registerSimpan')->name('register.simpan');

// 	Route::get('login', 'login')->name('login');
// 	Route::post('login', 'loginAksi')->name('login.aksi');

// 	Route::get('logout', 'logout')->middleware('auth')->name('logout');
// });

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/simpan', [AuthController::class, 'registerSimpan'])->name('register.simpan');



route::get('pesanan', [PesananController::class, 'index'])->name('pesanan');
