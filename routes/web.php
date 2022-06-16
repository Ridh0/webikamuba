<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudayaController;

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



Route::get('penjual', function () {
    return view('penjual');
})->middleware(['checkRole:penjual']);
Route::get('pembeli', function () {
    return view('pembeli');
})->middleware(['checkRole:pembeli,admin']);
Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('frontend');
Route::get('/data-umum', 'App\Http\Controllers\FrontendController@dataumum')->name('dataumum');
Route::get('/visimisi', 'App\Http\Controllers\FrontendController@visimisi')->name('visimisi');
Route::get('/tujuan', 'App\Http\Controllers\FrontendController@tujuan')->name('tujuan');
Route::get('/pengurus', 'App\Http\Controllers\FrontendController@pengurus')->name('pengurus');
Route::get('/strukturorganisasi', 'App\Http\Controllers\FrontendController@strukturorganisasi')->name('strukturorganisasi');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
Route::post('store', [FileUploadController::class, 'store']);
Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::get('upgrade', function () {
    return view('pages.upgrade');
})->name('upgrade');
Route::get('map', function () {
    return view('pages.maps');
})->name('map');
Route::get('carousel', [App\Http\Controllers\CarouselController::class, 'index'])->name('carousel');
Route::get('addcarousel', [App\Http\Controllers\CarouselController::class, 'create'])->name('carousel.create');
Route::post('storecarousel', [App\Http\Controllers\CarouselController::class, 'store'])->name('carousel.store');
Route::get('kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('addkategori', [App\Http\Controllers\KategoriController::class, 'create'])->name('kategori.create');
Route::post('storekategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori.store');
Route::get('budaya', [App\Http\Controllers\BudayaController::class, 'index'])->name('budaya');
Route::get('pengurus2', [App\Http\Controllers\PengurusController::class, 'dashboard'])->name('pengurus2');
Route::get('addbudaya', [App\Http\Controllers\BudayaController::class, 'create'])->name('budaya.create');
Route::post('storebudaya', [App\Http\Controllers\BudayaController::class, 'store'])->name('budaya.store');
Route::post('storewisata', [App\Http\Controllers\WisataController::class, 'store'])->name('wisata.store');
Route::get('wisata', [App\Http\Controllers\WisataController::class, 'index'])->name('wisata');
Route::get('addwisata', [App\Http\Controllers\WisataController::class, 'create'])->name('wisata.create');
Route::get('icons', function () {
    return view('pages.icons');
})->name('icons');
Route::post('storepemerintah', [App\Http\Controllers\PemerintahController::class, 'store'])->name('pemerintah.store');
Route::get('pemerintah', [App\Http\Controllers\PemerintahController::class, 'index'])->name('pemerintah');
Route::get('addpemerintah', [App\Http\Controllers\PemerintahController::class, 'create'])->name('pemerintah.create');
Route::get('icons', function () {
    return view('pages.icons');
})->name('icons');
Route::get('table-list', function () {
    return view('pages.tables');
})->name('table');
Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
Route::get('admin',  'App\Http\Controllers\HomeController@index')->middleware('checkRole:pembeli');

Route::get('file-upload', [FileUploadController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
