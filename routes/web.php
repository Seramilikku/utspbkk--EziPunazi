<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SanksiController;


Route::resource('bukus', BukuController::class);
Route::resource('penuliss', PenulisController::class);
Route::resource('raks', RakController::class);
Route::resource('anggotas', AnggotaController::class);
Route::resource('peminjamans', PeminjamanController::class);
Route::resource('sanksis', SanksiController::class);

Route::get('/', function () {
    return view('welcome'); 
})->name('home'); 

Route::get('/buku', 'App\Http\Controllers\BukuController@index')->name('buku.index');
Route::get('/buku/create', 'App\Http\Controllers\BukuController@create')->name('buku.create');
Route::post('/buku/store', 'App\Http\Controllers\BukuController@store')->name('buku.store');
Route::get('/buku/edit/{id}', 'App\Http\Controllers\BukuController@edit')->name('buku.edit');
Route::put('/buku/update/{id}', 'App\Http\Controllers\BukuController@update')->name('buku.update');
Route::delete('/buku/delete/{id}', 'App\Http\Controllers\BukuController@destroy')->name('buku.destroy');

Route::get('/anggota', 'App\Http\Controllers\AnggotaController@index')->name('anggota.index');
Route::get('/anggota/create', 'App\Http\Controllers\AnggotaController@create')->name('anggota.create');
Route::post('/anggota/store', 'App\Http\Controllers\AnggotaController@store')->name('anggota.store');
Route::get('/anggota/edit/{id}', 'App\Http\Controllers\AnggotaController@edit')->name('anggota.edit');
Route::put('/anggota/update/{id}', 'App\Http\Controllers\AnggotaController@update')->name('anggota.update');
Route::delete('/anggota/delete/{id}', 'App\Http\Controllers\AnggotaController@destroy')->name('anggota.destroy');


Route::get('/peminjaman', 'App\Http\Controllers\PeminjamanController@index')->name('peminjaman.index');
Route::get('/peminjaman/create', 'App\Http\Controllers\PeminjamanController@create')->name('peminjaman.create');
Route::post('/peminjaman/store', 'App\Http\Controllers\PeminjamanController@store')->name('peminjaman.store');
Route::get('/peminjaman/edit/{id}', 'App\Http\Controllers\PeminjamanController@edit')->name('peminjaman.edit');
Route::put('/peminjaman/update/{id}', 'App\Http\Controllers\PeminjamanController@update')->name('peminjaman.update');
Route::delete('/peminjaman/delete/{id}', 'App\Http\Controllers\PeminjamanController@destroy')->name('peminjaman.destroy');

Route::get('/penulis', 'App\Http\Controllers\PenulisController@index')->name('penulis.index');
Route::get('/penulis/create', 'App\Http\Controllers\PenulisController@create')->name('penulis.create');
Route::post('/penulis/store', 'App\Http\Controllers\PenulisController@store')->name('penulis.store');
Route::get('/penulis/edit/{id}', 'App\Http\Controllers\PenulisController@edit')->name('penulis.edit');
Route::put('/penulis/update/{id}', 'App\Http\Controllers\PenulisController@update')->name('penulis.update');
Route::delete('/penulis/delete/{id}', 'App\Http\Controllers\PenulisController@destroy')->name('penulis.destroy');

Route::get('/rak', 'App\Http\Controllers\RakController@index')->name('rak.index');
Route::get('/rak/create', 'App\Http\Controllers\RakController@create')->name('rak.create');
Route::post('/rak/store', 'App\Http\Controllers\RakController@store')->name('rak.store');
Route::get('/rak/edit/{id}', 'App\Http\Controllers\RakController@edit')->name('rak.edit');
Route::put('/rak/update/{id}', 'App\Http\Controllers\RakController@update')->name('rak.update');
Route::delete('/rak/delete/{id}', 'App\Http\Controllers\RakController@destroy')->name('rak.destroy');

Route::get('/sanksi', 'App\Http\Controllers\SanksiController@index')->name('sanksi.index');
Route::get('/sanksi/create', 'App\Http\Controllers\SanksiController@create')->name('sanksi.create');
Route::post('/sanksi/store', 'App\Http\Controllers\SanksiController@store')->name('sanksi.store');
Route::get('/sanksi/edit/{id}', 'App\Http\Controllers\SanksiController@edit')->name('sanksi.edit');
Route::put('/sanksi/update/{id}', 'App\Http\Controllers\SanksiController@update')->name('sanksi.update');
Route::delete('/sanksi/delete/{id}', 'App\Http\Controllers\SanksiController@destroy')->name('sanksi.destroy');
