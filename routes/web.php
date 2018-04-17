<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/login', function(){
    return view('auth.login');
})->name('login')->middleware('cekkategori');
Auth::routes();
Route::post('exit', 'Auth\LoginController@logout')->name('logout');
// Route::resource('kabupaten', 'KabupatenController');
Route::resource('berita', 'BeritaController');
// Route::resource('userr', 'UserrController');
Route::auth();
Route::group([
  'middleware'=>['auth']] ,function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/provinsi/profil', 'SuperController@profil')->name('profil');
Route::put('/provinsi/profil/store', 'SuperController@storeProfil')->name('profil.update');
Route::get('/provinsi/kabupaten/tambah', 'SuperController@tambah_kabupaten')->name('kabupaten.tambah');
Route::get('/provinsi/kabupaten', 'SuperController@kabupaten')->name('kabupaten');
Route::post('/provinsi/kabupaten/tambah/store', 'SuperController@storeKabupaten')->name('kabupaten.store');
Route::get('/provinsi/kabupaten/edit/{id}', 'SuperController@edit_kabupaten')->name('kabupaten.edit');
Route::put('/provinsi/kabupaten/edit/update/{id}', 'SuperController@updateKabupaten')->name('kabupaten.update');
Route::get('/provinsi/opd', 'SuperController@opd')->name('opd.index');
Route::get('/provinsi/opd/tambah', 'SuperController@tambah_opd')->name('opd.tambah');
Route::post('/provinsi/opd/tambah/store', 'SuperController@storeOpd')->name('opd.store');
Route::get('/provinsi/opd/edit/{id}', 'SuperController@edit_opd')->name('opd.edit');
Route::put('/provinsi/opd/edit/update/{id}', 'SuperController@updateOpd')->name('opd.update');
Route::get('/provinsi/upp', 'SuperController@upp')->name('upp.index');
Route::get('/provinsi/upp/tambah', 'SuperController@tambah_upp')->name('upp.tambah');
Route::post('/provinsi/upp/tambah/store', 'SuperController@storeUpp')->name('upp.store');
Route::get('/provinsi/upp/edit/{id}', 'SuperController@edit_upp')->name('upp.edit');
Route::put('/provinsi/upp/edit/update/{id}', 'SuperController@updateUpp')->name('upp.update');
Route::get('/provinsi/upp/kuesioner/{id}', 'SuperController@kuesioner')->name('kuesioner.index');
Route::get('/provinsi/kuesioner/tambah/{id}', 'SuperController@tambah_kuesioner')->name('kuesioner.tambah');
Route::post('/provinsi/kuesioner/tambah/store/{id}', 'SuperController@storeKuesioner')->name('kuesioner.store');
Route::get('/provinsi/kuesioner/edit/{id}', 'SuperController@edit_kuesioner')->name('kuesioner.edit');
Route::put('/provinsi/kuesioner/edit/update/{id}', 'SuperController@updateKuesioner')->name('kuesioner.update');
Route::get('/provinsi/kuesioner/preview/{id}', 'SuperController@previewkuesioner')->name('kuesioner.preview');
Route::get('/provinsi/kuesioner/jawab/{id}', 'SuperController@jawabkuesioner')->name('kuesioner.jawab');
Route::post('/provinsi/kuesioner/jawab/store', 'SuperController@jawabStore')->name('jawab.store');
Route::get('/provinsi/upp/kuesioner/v2/{id}', 'SuperController@kuesionerv2')->name('kuesionerv2.index');
Route::get('/provinsi/kuesioner/tambah/v2/{id}', 'SuperController@tambah_kuesionerv2')->name('kuesionerv2.tambah');
Route::post('/provinsi/kuesioner/tambah/store/v2/{id}', 'SuperController@storeKuesionerv2')->name('kuesionerv2.store');
Route::get('/provinsi/kuesioner/edit/v2/{id}', 'SuperController@edit_kuesionerv2')->name('kuesionerv2.edit');
Route::put('/provinsi/kuesioner/edit/update/v2/{id}', 'SuperController@updateKuesionerv2')->name('kuesionerv2.update');
Route::get('/provinsi/kuesioner/preview/v2/{id}', 'SuperController@previewkuesioner')->name('kuesionerv2.preview');
Route::get('/provinsi/kuesioner/print/v2/{id}', 'SuperController@printkuesioner')->name('kuesionerv2.print');
Route::get('/provinsi/kuesioner/jawab/v2/{id}', 'SuperController@jawabkuesioner')->name('kuesionerv2.jawab');
Route::post('/provinsi/kuesioner/jawab/store/v2', 'SuperController@jawabStorev2')->name('jawabv2.store');
Route::post('/formkues','SuperController@formkues');
Route::get('search', ['as' => 'search', 'uses' => 'SuperController@search']);
Route::get('/provinsi/responden', 'SuperController@responden')->name('responden.index');
Route::get('/provinsi/responden/tambah', 'SuperController@tambah_responden')->name('responden.tambah');
Route::post('/provinsi/responden/tambah/store', 'SuperController@storeResponden')->name('responden.store');
Route::get('/provinsi/responden/edit/{id}', 'SuperController@edit_responden')->name('responden.edit');
Route::put('/provinsi/responden/edit/update/{id}', 'SuperController@updateResponden')->name('responden.update');
Route::get('/provinsi/report/kuesioner', 'SuperController@rekuesioner')->name('report.kuesioner');
Route::get('/provinsi/report/kuesioner/{id}', 'SuperController@reportkuesioner')->name('report.kuesioner.index');
Route::get('/provinsi/report/kuesioner/tambah/{id}', 'SuperController@tambah_kuesioner')->name('report.kuesioner.tambah');
Route::post('/provinsi/report/kuesioner/tambah/store/{id}', 'SuperController@storeKuesioner')->name('report.kuesioner.store');
Route::get('/provinsi/report/kuesioner/edit/{id}', 'SuperController@edit_kuesioner')->name('report.kuesioner.edit');
Route::put('/provinsi/report/kuesioner/edit/update/{id}', 'SuperController@updateKuesioner')->name('report.kuesioner.update');
Route::get('/provinsi/report/kuesioner/preview/{id}', 'SuperController@previewkuesioner')->name('report.kuesioner.preview');
Route::get('/provinsi/report/kuesioner/jawab/{id}', 'SuperController@jawabkuesioner')->name('report.kuesioner.jawab');
Route::post('/provinsi/report/kuesioner/jawab/store', 'SuperController@jawabStore')->name('report.jawab.store');


Route::get('/upp', 'UppController@index')->name('upp.upp.index');
Route::get('/upp/profil', 'UppController@profil')->name('upp.upp.profil');
Route::put('/upp', 'UppController@storeProfil')->name('upp.upp.profil.store');
Route::get('/upp/kuesioner/v2', 'UppController@kuesioner')->name('upp.kuesionerv2.index');
Route::get('/upp/kuesioner/preview/v2/{id}', 'UppController@previewkuesioner')->name('upp.kuesionerv2.preview');
Route::get('/upp/kuesioner/print/v2/{id}', 'UppController@printkuesioner')->name('upp.kuesionerv2.print');
Route::get('/upp/kuesioner/jawab/v2/{id}', 'UppController@jawabkuesioner')->name('upp.kuesionerv2.jawab');
Route::post('/upp/kuesioner/jawab/store/v2', 'UppController@jawabStorev2')->name('upp.jawabv2.store');
Route::get('/upp/report/kuesioner', 'UppController@reportkuesioner')->name('upp.report.kuesioner.index');
// Route::post('/formkues','SuperController@formkues');
//Route::get('/provinsi/report/laporan', 'SuperController@reportlaporan')->name('report.laporan.index');
// ====================kabupaten route=============
});