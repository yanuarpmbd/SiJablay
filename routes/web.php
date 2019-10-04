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

//HOME//
Route::get('/', function () {
    return view('layouts.home');
});

//NO AUTH//
Route::prefix('kegiatan')->group(function (){
    Route::get('/', 'All\KegiatanController@showKegiatan')->name('get.kegiatan');
    Route::get('/databidang', 'All\DataBidangController@gabungbidang')->name('gabung.bidang');
});

//AUTH//
Route::namespace('Auth')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login.post');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::post('logout', 'LoginController@logout')->name('logout');
});

//MAIN ROUTES//
Route::middleware(['web', 'auth'])->group(function () {

    Route::get('/home', 'All\HomeController@home')->name('home');

    //KEPALAAAAAAA//
    Route::get('kepala/rekap', 'Admin\RekapController@showRekap')->name('rekap.kepala');

    //SPT dan SPPD//
    Route::prefix('spt')->group(function (){
        Route::get('/all', 'SPT\CreateSPTController@gabung')->name('form.spt');
        Route::post('/all', 'SPT\CreateSPTController@store')->name('create.spt');
        Route::get('/all/edit/{id}', 'SPT\CreateSPTController@edit')->name('edit.spt');
        Route::patch('/all/update/{id}', 'SPT\CreateSPTController@update')->name('update.spt');
        Route::get('/rekap/spt', 'SPT\RekapSPTController@getSpt')->name('rekap.spt');

        Route::get('/spt_cetak/{id}', 'SPT\RekapSPTController@cetakSpt')->name('cetak.spt');
        Route::get('/sppd_cetak/{id}', 'SPT\RekapSPTController@cetakSppd')->name('cetak.sppd');
        Route::get('/nodin_cetak/{id}', 'SPT\RekapSPTController@cetakNodin')->name('cetak.nodin');
        Route::delete('/hapus/{id}', 'SPT\RekapSPTController@hapusSpt')->name('hapus.spt');
        Route::delete('/destroy/{id}', 'SPT\RekapSPTController@destroy')->name('destroy.spt');

        Route::get('/advance', 'SPT\AdvanceSPTController@formSPT')->name('adv.spt');
        Route::post('/advance', 'SPT\AdvanceSPTController@postSPT')->name('adv.postSpt');
        Route::get('/advance/sppd', 'SPT\AdvanceSPTController@getSPPD')->name('adv.sppd');
        Route::get('/sppd_cetak-adv/{id}', 'SPT\AdvanceSPTController@cetakAdvSppd')->name('cetak-adv.sppd');
    });

    //All Bidang Sementara//
    Route::prefix('allbidang')->group(function (){
        Route::get('/form', 'All\AllBidangController@showForm')->name('show.bidang');
        Route::post('/postform', 'All\AllBidangController@postForm')->name('post.allbidang');
        Route::get('/', 'All\AllBidangController@rekap')->name('rekap.allbidang');
        Route::get('/download/{id}','All\AllBidangController@pdfview')->name('download.allbidang');
    });

    //NOTULEN//
    Route::prefix('notulen')->group(function (){
        Route::get('/', 'All\CreateNotulenController@gabung')->name('gabung.notulen');
        Route::post('/', 'All\CreateNotulenController@storeNotulen')->name('store.notulen');
        Route::get('/add', 'All\CreateNotulenController@showForm')->name('form.notulen');
        Route::get('/rekap/notulen', 'All\CreateNotulenController@getNotulen')->name('rekap.notulen');
        Route::get('/cetak_notulen/{id}', 'All\CreateNotulenController@cetakNotulen')->name('cetak.notulen');
        Route::get('/{id}', 'All\KegiatanController@editKegiatan')->name('edit.notulen');
        Route::get('/edit/{id}', 'All\CreateNotulenController@editNotulen')->name('edit.notulen');
        Route::patch('/update/{id}', 'All\CreateNotulenController@updateNotulen')->name('update.notulen');
        Route::get('/{id}', 'All\CreateNotulenController@hapusNotulen')->name('hapus.notulen');
    });

    //SETTING BIDANG//
    Route::prefix('settings')->group(function (){
        Route::get('/', 'All\SettingController@setting')->name('setting.all');
        Route::get('/nomor', 'SetBidang\SettingController@getNo')->name('get.set');
        Route::post('/nomor', 'SetBidang\SettingController@postNo')->name('post.set');
        Route::get('/user', 'SetBidang\SettingController@showEditUsername')->name('get.user');
        Route::patch('/user/{id}', 'SetBidang\SettingController@editUsername')->name('edit.user');
    });

    //ROUTE SEKRETARIAT//
    Route::prefix('sekretariat')->group(function (){
        Route::get('/', 'Sekretariat\SettingController@gabung')->name('get.all');
        Route::get('/settings', 'Sekretariat\SettingController@plh')->name('get.setting');
        Route::post('/settings', 'Sekretariat\SettingController@storePlh')->name('post.setting');
        Route::get('/settings/plt', 'Sekretariat\SettingController@pltSet')->name('get.plt');
        Route::post('/', 'Sekretariat\SettingController@storePlt')->name('post.plt');
        Route::get('/settings/plh', 'Sekretariat\SettingController@plhSet')->name('get.plh');
        Route::get('/settings/{id}/edit' , 'Sekretariat\SettingController@editPlh')->name('edit.setting');
        Route::patch('/settings/{id}', 'Sekretariat\SettingController@updatePlh')->name('update.setting');
        Route::delete('/settings/{id}' , 'Sekretariat\SettingController@delete')->name('delete.setting');
        Route::get('/setting/refresh', 'Sekretariat\DataAsnController@updatesimpeg')->name('update.simpeg');
        Route::post('/setting/refresh', 'Sekretariat\DataAsnController@updatesimpeg')->name('update.simpeg');
        Route::get('/addpegawai', 'Sekretariat\TambahPegawaiController@showForm')->name('form.tambahpegawai');
        Route::post('/tambahpegawai', 'sekretariat\TambahPegawaiController@addpegawai')->name('tambah.pegawai');

        Route::get('/RKO', 'Sekretariat\RkoController@showForm')->name('show.rko');
        Route::post('/RKO', 'Sekretariat\RkoController@storeRKO')->name('post.rko');
        Route::get('/rekRKO', 'Sekretariat\RkoController@rekapRKO')->name('rek.rko');
        Route::get('/RKO/{id}', 'Sekretariat\RkoController@edit')->name('edit.rko');
        Route::patch('/RKO/update/{id}', 'Sekretariat\RkoController@update')->name('update.rko');
        Route::get('RKO/delete/{id}', 'Sekretariat\RkoCOntroller@destroy')->name('delete.rko');
        Route::get('/TargetRealisasi', 'Sekretariat\TargetRealisasiController@showForm')->name('show.targetrealisasi');
        Route::post('/TargetRealisasi', 'Sekretariat\TargetRealisasiController@storeTargetRealisasi')->name('post.targetrealisasi');
        Route::get('/rekapTargetRKO', 'Sekretariat\TargetRealisasiController@show')->name('rekap.rko');
        Route::post('/rekapTargetRKO', 'Sekretariat\TargetRealisasiController@show')->name('postrekap.rko');
        Route::get('/rekapTargetRealisasi', 'Sekretariat\TargetRealisasiController@rekapTarget')->name('rekap.targetrealisasi');
        Route::get('/{id}', 'Sekretariat\TargetRealisasiController@edit')->name('edit.targetrealisasi');
        Route::patch('/update/{id}', 'Sekretariat\TargetRealisasiController@update')->name('update.targetrealisasi');
        Route::get('/delete/{id}', 'Sekretariat\TargetRealisasiController@destroy')->name('delete.targetrealisasi');

        Route::get('/settings/rek', 'Sekretariat\RekController@rek')->name('get.rek');
        Route::post('/settings/rek', 'Sekretariat\RekController@rekPost')->name('post.rek');
    });

    //POK//
    Route::prefix('POK')->group(function (){
        Route::get('/POK', 'All\PokController@showPOK')->name('show.pok');
        Route::post('/POK', 'All\PokController@storePOK')->name('post.pok');
        Route::get('/rekapPOK', 'All\PokController@rekapPOK')->name('rekap.pok');
        Route::get('/{id}', 'All\PokController@edit')->name('edit.pok');
        Route::patch('/update/{id}', 'All\PokController@update')->name('update.pok');
        Route::get('/delete/{id}', 'All\PokController@destroy')->name('delete.pok');
        Route::get('/POK/download', 'All\PokController@export')->name('export.pok');
        Route::get('/', 'All\PokController@gabungPOK')->name('gabung.pok');
    });

    //PROMOSI//
    Route::prefix('promosi')->group(function (){
        Route::get('/', 'Promosi\KemitraanController@gabung')->name('form.kemitraan');
        Route::post('/', 'Promosi\KemitraanController@store')->name('store.kemitraan');
        Route::get('/add', 'Promosi\KemitraanController@showForm')->name('form.mitra');
        Route::get('/rekap', 'Promosi\KemitraanController@rekap')->name('rekap.mitra');
        Route::get('/edit/{id}', 'Promosi\KemitraanController@edit')->name('edit.mitra');
        Route::patch('/update/{id}', 'Promosi\KemitraanController@update')->name('update.mitra');
        Route::get('/download', 'Promosi\KemitraanController@export')->name('export.mitra');
        Route::get('/mou/download/{id}','Promosi\KemitraanController@pdfview')->name('download.mou');
    });

    //PDI//
    Route::prefix('pdi')->group(function (){
       Route::get('/oss/show', 'PDI\RekapOSSController@index')->name('show.oss');
       Route::post('/oss/import', 'PDI\RekapOSSController@import')->name('import.rekoss');
       Route::get('/oss/rekap', 'PDI\RekapOSSController@rekap')->name('rekap.oss');
       Route::get('/download', 'PDI\RekapOSSController@export')->name('export.oss');
       Route::get('/', 'PDI\RekapOSSController@gabung')->name('gabung.oss');
    });

    //WASDAL//
    Route::prefix('wasdal')->group(function (){
       Route::get('PMA/invest', 'Wasdal\PMAInvestController@index')->name('show.pma');
       Route::post('PMA/import', 'Wasdal\PMAInvestController@import')->name('import.pma');
       Route::get('PMA/rekap', 'Wasdal\PMAInvestController@rekap')->name('rekap.pma');
       Route::get('/', 'Wasdal\PMAInvestController@gabung')->name('gabung.pma');
    });

    //YANZIN//
    Route::prefix('yanzin')->group(function (){
        Route::get('/settingsop', 'Yanzin\SopPerizinanController@show')->name('sop.perizinan');
        Route::post('/settingsop', 'Yanzin\SopPerizinanController@store')->name('post.sop');
        Route::patch('/update', 'Yanzin\SopPerizinanController@update')->name('update.sop');
        Route::get('/', 'Yanzin\SopPerizinanController@gabung')->name('gabung.yanzin');
        Route::get('/rekapperizinan', 'Yanzin\RekapPerizinanController@show')->name('show.rekap');
        Route::post('/rekapperizinan', 'Yanzin\RekapPerizinanController@store')->name('store.rekap');
        Route::get('/show', 'Yanzin\RekapPerizinanController@showrekap')->name('show.izin');
        Route::get('/download', 'Yanzin\RekapPerizinanController@export')->name('export.perizinan');
        Route::get('/setting', 'Yanzin\RekapPerizinanController@gabungsetting')->name('setting.yanzin');
        Route::get('/', 'Yanzin\RekapPerizinanController@gabung')->name('gabung.perizinan');
    });

    //PENGADUAN//
    Route::prefix('ppl')->group(function (){
       Route::get('/', 'PPL\RekapPengaduanController@gabung')->name('gabung.pengaduan');
       Route::get('/pengaduan', 'PPL\RekapPengaduanController@index')->name('show.pengaduan');
       Route::post('/pengaduan', 'PPL\RekapPengaduanController@store')->name('store.pengaduan');
       Route::get('/pengaduan/rekap', 'PPL\RekapPengaduanController@rekap')->name('rekap.pengaduan');
       Route::get('/edit/{id}', 'PPL\RekapPengaduanController@edit')->name('edit.pengaduan');
       Route::patch('/update/{id}', 'PPL\RekapPengaduanController@update')->name('update.pengaduan');
       Route::get('/download', 'PPL\RekapPengaduanController@export')->name('export.pengaduan');
       Route::delete('/hapus/{id}', 'PPL\RekapPengaduanController@delete')->name('delete.pengaduan');
    });

    //KEGIATAN//
    Route::prefix('kegiatans')->group(function (){
        Route::get('/', 'All\KegiatanController@gabungKegiatan')->name('gabung.kegiatan');
        Route::post('/add', 'All\KegiatanController@postKegiatan')->name('post.kegiatan');
        Route::get('/tempatkegiatan', 'All\KegiatanController@showTempatKegiatan')->name('show.tempat-keg');
        Route::post('/tempatkegiatan', 'All\KegiatanController@addTempatKegiatan')->name('add.tempat-keg');
        Route::get('/download', 'All\KegiatanController@exportKegiatan')->name('export.kegiatan');
        Route::get('/{id}', 'All\KegiatanController@editKegiatan')->name('edit.kegiatan');
        Route::get('/edit/{id}', 'All\KegiatanController@editKegiatan')->name('edit.kegiatan');
        Route::patch('/update/{id}', 'All\KegiatanController@updateKegiatan')->name('update.kegiatan');
        Route::get('/pilih/{id}', 'All\KegiatanController@pilihKegiatan')->name('pilih.kegiatan');
        Route::patch('/terpilih/{id}', 'All\KegiatanController@tentukanKegiatan')->name('terpilih.kegiatan');
        Route::get('/delete/{id}', 'All\KegiatanController@hapusKegiatan')->name('hapus.kegiatan');
    });

    /*Route::prefix('datapegawai')->group(function () {
        Route::get('/', 'All\AbsenSimpegController@absensimpeg')->name('get.presensi');
        Route::get('/show', 'All\AbsenSimpegController@index')->name('show.presensi');
    });*/

    //DATA ASN//
    Route::prefix('dataasn')->group(function () {
        Route::get('/presensi', 'All\DataAsnController@absensimpeg')->name('get.presensi');
        Route::get('/asn', 'All\DataAsnController@dataasn')->name('get.asn');
        Route::get('/', 'All\DataAsnController@gabungdataasn')->name('gabung.asn');
        //Route::get('/show', 'All\AbsenSimpegController@index')->name('show.presensi');
    });

    /*USER MANAGEMENT*/
    Route::resource('roles','Admin\RoleController');
    Route::resource('users','Admin\UserController');

    //ROUTE USER MANAGEMENT// ADMIIIIN
    Route::get('/usersa', 'Admin\UserManagerController@index');
    Route::get('add_user', array('uses' => 'Admin\UserManagerController@ShowAddUser', 'as' => 'add_user' ));
    Route::post('/storeuser', 'Admin\UserManagerController@store')->name('store.user');

    Route::get('/edituser/{id}', 'Admin\UserManagerController@edit' );
    Route::patch('/updateuser/{edit}', 'Admin\UserManagerController@update');
    Route::delete('/deleteuser/{id}', 'Admin\UserManagerController@destroy');
});




