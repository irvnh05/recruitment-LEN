<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/lowongan', 'ClowonganController@index')->name('lowongan');
Route::get('/details/{id}', 'ClowonganController@detail')->name('detail');
Route::get('/pengumuman/{id}', 'DetailpengumumanController@index')->name('pengumuman');
// Route::post('/details/{id}', 'ClowonganController@add')->name('detail-add');

// pelamar
// Route::prefix('beranda')
//     ->namespace('User')
//     ->middleware(['auth','user'])
//     ->group(function() {
//         Route::get('/', 'DashboardController@index')->name('beranda-dashboard');
//     });
Route::group(['middleware' => ['auth','user']], function () {

    Route::get('datadiri/', 'BiodataController@store')
        ->name('datapribadi-store');
    Route::get('test/', 'BiodataController@home')
        ->name('test');
    Route::post('datadiri/update/{redirect}', 'BiodataController@update')
        ->name('datapribadi-redirect');
    Route::post('lamar/{id}', 'LamarController@process')->name('lamar');
    Route::get('sukses', 'LamarController@show')->name('sukses');


Route::get('/beranda', 'DashboardController@index')->name('beranda');
        Route::resource('lihatlowongan','LowongannController');
        Route::resource('datakeluarga','DataKeluargaController');
        
        // Route::resource('datapribadi','BiodataController');
        Route::resource('pengalamankerja','PengalamanKerjaController');
        Route::resource('pendidikanformal','PendidikanFormalController');
        Route::resource('pendidikannonformal','PendidikanLainController');
        Route::resource('bahasa','BahasaController');
        Route::resource('beasiswa','BeasiswaController');
        Route::resource('pengalamanorganisasi','PengalamanOrganisasiController');
        Route::resource('harapan','HarapanController');        
        Route::resource('keluarga','KeluargaController'); 
        Route::resource('infolain','InfoLainController');        
        Route::resource('lamaran','BerkasController');       
        Route::resource('lampiran','BerkasLampiranController');       

    });
Route::group(['prefix' => 'ujian'], function () {
    Route::get('finish/{id}', 'SoalController@finishUjian')->name('pertanyaan-finish');                     
    Route::get('detail/{id}', 'SoalController@detailUjian')->name('pertanyaan-detail');
    Route::get('pertanyaan', 'SoalController@ujian')->name('pertanyaan');   
	Route::get('finish/{id}', 'SoalController@finishUjian');
    Route::get('get-soal/{id}', 'SoalController@getSoal');
    Route::post('jawab', 'SoalController@jawab');
    Route::post('kirim-jawaban', 'SoalController@kirimJawaban');
});
// admin 
// Route::group(['prefix' => 'reports'], function() {
// Route::get('/return', 'ReportController@returnReport')->name('report.return');
// Route::get('/return/pdf/{daterange}', 'ReportController@returnReportPdf')->name('report.return_pdf');
// });

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/','DashboardController@index')->name('admin-dashboard');
        Route::resource('user','UserController');
        Route::resource('lowongan','LowonganController');
        Route::resource('program','ProgramController');
        Route::resource('pengumuman','PengumumanController');
        Route::resource('soal','SoalController');
        Route::resource('pelamar','PelamarController');      
        Route::resource('report','ReportController');    
        Route::get('/result/{id}', 'PelamarController@result')->name('pelamar.result');
        Route::get('/return', 'ReportController@returnReport')->name('report.return');
        Route::get('/return/pdf/{daterange}', 'ReportController@returnReportPdf')->name('report.return_pdf');
        Route::get('soal/detail/{id}', 'SoalController@detail')->name('detail-soal');
        Route::get('buatsoal/{id}', 'SoalController@soaldetailcreate')->name('buat-soal');
        Route::post('buat/{id}', 'SoalController@store1')->name('store1');     
        Route::get('/get-detail-soal', 'SoalController@dataDetailSoal')->name('elearning.get-detail-soal');        
    });

Auth::routes();

    // Route::get('/clear-cache', function() {
    // Artisan::call('cache:clear');
    // return "Cache is cleared";