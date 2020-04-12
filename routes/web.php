<?php

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

//Route Global (Utama)
Route::get('/', function () { 
    return view('master'); //untuk menampilkan halaman yang bernama 'master' di folder resources -> views
});
Route::get('/home','ControllerHome@menampilkanhome')->name('home');
                            //nama controller       //nama function yang berada didalam controller
Route::get('/user','ControllerUser@menampilkandatauser')->name('user'); 
          //buat nama url                                                        //nama pemanggilan(alias)
Route::get('/pegawai','ControllerPegawai@menampilkandatapegawai')->name('pegawai');
Route::get('/desa','ControllerDesa@menampilkandatadesa')->name('desa');
Route::get('/kecamatan','ControllerKecamatan@menampilkandatakecamatan')->name('kecamatan');
Route::get('/kader','ControllerKader@menampilkandatakader')->name('kader');
Route::get('/jeniskb','ControllerJeniskb@menampilkandatajeniskb')->name('jeniskb');
Route::get('/pesertakb','ControllerPesertakb@menampilkandatapesertakb')->name('pesertakb');
Route::get('/rekapkb','ControllerRekapkb@menampilkandatarekapkb')->name('rekapkb');

//Route Menu User
Route::get('/user','ControllerUser@index')->name('user');
Route::post('/user/insert','ControllerUser@insertuser')->name('insertuser');
Route::get('/user/edit/{id}','ControllerUser@edituser')->name('edituser');
Route::post('/user/update/{id}','ControllerUser@updateuser')->name('updateuser');
Route::get('/user/hapus/{id}','ControllerUser@hapususer')->name('hapususer');

