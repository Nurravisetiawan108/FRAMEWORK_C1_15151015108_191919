<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');



Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');

Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');






 Route::get('pengguna','penggunacontroller@awal');
 Route::get('pengguna/tambah','penggunacontroller@tambah');
 Route::get('pengguna/add' , function(){
 $pengguna = new App\pengguna();
     	$pengguna->username = 'jon_doe';
     	$pengguna->password = 'doe_jon';
     	$pengguna ->save();
     	return "data dengan username {$pengguna->username} telah disimpan";

 });
