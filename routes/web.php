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

Route::get('import-nomor', 'Sekretariat\NomorController@importArsipNomor');
//Route::get('spare', 'Sekretariat\Nomor\SettingNomorController@updateTanggalSpare');
Route::post('import-nomor', 'Sekretariat\NomorController@postimportArsipNomor')->name('postimport');

//NO AUTH//
Route::prefix('kegiatan')->group(function (){
    Route::get('/', 'All\KegiatanController@showKegiatan')->name('get.kegiatan');
    Route::get('/databidang', 'All\DataBidangController@gabungbidang')->name('gabung.bidang');
});

/////ROUTE DATA EKSTERNAL///////
Route::prefix('eksternal')->group(function () {
    Route::get('/show', 'EKSTERNAL\DataEksternalController@index')->name('show.eksternal');
    Route::post('/filter', 'EKSTERNAL\DataEksternalController@filter')->name('filter');
    Route::post('/', 'EKSTERNAL\EksporImporController@addEksporImpor')->name('add.eksporimpor');
    Route::get('/edit/{id}', 'EKSTERNAL\EksporImporController@editEksporImpor')->name('edit.eksporimpor');
    Route::post('/update/{id}', 'EKSTERNAL\EksporImporController@updateEksporImpor')->name('update.eksporimpor');
    Route::delete('/hapus/{id}', 'EKSTERNAL\EksporImporController@deleteEksporImpor')->name('delete.eksporimpor');
    Route::get ('/ExportEksporImpor','EKSTERNAL\EksporImporController@EksporImporExport')->name('export.eksporimpor');

});
Route::prefix('pelabuhan')->group(function () {
    Route::post('/filterpelabuhan', 'EKSTERNAL\PelabuhanController@filterpelabuhan')->name('filterpelabuhan');
    Route::post('/', 'EKSTERNAL\PelabuhanController@addPelabuhan')->name('add.pelabuhan');
    Route::get('/edit/{id}', 'EKSTERNAL\PelabuhanController@editPelabuhan')->name('edit.pelabuhan');
    Route::post('/update/{id}', 'EKSTERNAL\PelabuhanController@updatePelabuhan')->name('update.pelabuhan');
    Route::delete('/hapus/{id}', 'EKSTERNAL\PelabuhanController@deletePelabuhan')->name('delete.pelabuhan');
    Route::get ('/PelabuhanMuat','EKSTERNAL\PelabuhanController@PelabuhanMuatExport')->name('export.pelabuhan');
});
Route::prefix('negara')->group(function () {
    Route::post('/', 'EKSTERNAL\NegaraTujuanController@addNegara')->name('add.negara');
    Route::get('/edit/{id}', 'EKSTERNAL\NegaraTujuanController@editNegara')->name('edit.negara');
    Route::post('/update/{id}', 'EKSTERNAL\NegaraTujuanController@updateNegara')->name('update.negara');
    Route::delete('/hapus/{id}', 'EKSTERNAL\NegaraTujuanController@deleteNegara')->name('delete.negara');
    Route::get ('/negara','EKSTERNAL\NegaraTujuanController@NegaraTujuanExport')->name('export.negara');
});
Route::prefix('penanaman')->group(function () {
    Route::post('/', 'EKSTERNAL\StatusPenanamanModalController@addStatusPenanaman')->name('add.penanaman');
    Route::get('/edit/{id}', 'EKSTERNAL\StatusPenanamanModalController@editStatusPenanaman')->name('edit.penanaman');
    Route::post('/update/{id}', 'EKSTERNAL\StatusPenanamanModalController@updateStatusPenanaman')->name('update.penanaman');
    Route::delete('/hapus/{id}', 'EKSTERNAL\StatusPenanamanModalController@deleteStatusPenanaman')->name('delete.penanaman');
    Route::get ('/penanaman','EKSTERNAL\StatusPenanamanModalController@StatusPenanamanModalExport')->name('export.penanaman');
});
Route::prefix('kepemilikan')->group(function () {
    Route::post('/', 'EKSTERNAL\KepemilikanModalController@addKepemilikanModal')->name('add.kepemilikan');
    Route::get('/edit/{id}', 'EKSTERNAL\KepemilikanModalController@editKepemilikanModal')->name('edit.kepemilikan');
    Route::post('/update/{id}', 'EKSTERNAL\KepemilikanModalController@updateKepemilikanModal')->name('update.kepemilikan');
    Route::delete('/hapus/{id}', 'EKSTERNAL\KepemilikanModalController@deleteKepemilikanModal')->name('delete.kepemilikan');
    Route::get ('/kepemilikan','EKSTERNAL\KepemilikanModalController@KepemilikanModalExport')->name('export.kepemilikan');
});
Route::prefix('bayarpekerja')->group(function () {
    Route::post('/', 'EKSTERNAL\BayarPekerjaController@addBayarPekerja')->name('add.bayarpekerja');
    Route::get('/edit/{id}', 'EKSTERNAL\BayarPekerjaController@editBayarPekerja')->name('edit.bayarpekerja');
    Route::post('/update/{id}', 'EKSTERNAL\BayarPekerjaController@updateBayarPekerja')->name('update.bayarpekerja');
    Route::delete('/hapus/{id}', 'EKSTERNAL\BayarPekerjaController@deleteBayarPekerja')->name('delete.bayarpekerja');
    Route::get ('/bayar','EKSTERNAL\BayarPekerjaController@BayarPekerjaExport')->name('export.bayarpekerja');

});
Route::prefix('pengeluaranpekerja')->group(function () {
    Route::post('/', 'EKSTERNAL\PengeluaranPekerjaController@addPengeluaranPekerja')->name('add.pengeluaranpekerja');
    Route::get('/edit/{id}', 'EKSTERNAL\PengeluaranPekerjaController@editPengeluaranPekerja')->name('edit.pengeluaranpekerja');
    Route::post('/update/{id}', 'EKSTERNAL\PengeluaranPekerjaController@updatePengeluaranPekerja')->name('update.pengeluaranpekerja');
    Route::delete('/hapus/{id}', 'EKSTERNAL\PengeluaranPekerjaController@deletePengeluaranPekerja')->name('delete.pengeluaranpekerja');
    Route::get ('/pengeluaran','EKSTERNAL\PengeluaranPekerjaController@PengeluaranPekerjaExport')->name('export.pengeluaranpekerja');
});
Route::prefix('bahanbakar')->group(function () {
    Route::post('/', 'EKSTERNAL\BahanBakarController@addBahanBakar')->name('add.bahanbakar');
    Route::get('/edit/{id}', 'EKSTERNAL\BahanBakarController@editBahanBakar')->name('edit.bahanbakar');
    Route::post('/update/{id}', 'EKSTERNAL\BahanBakarController@updateBahanBakar')->name('update.bahanbakar');
    Route::delete('/hapus/{id}', 'EKSTERNAL\BahanBakarController@deleteBahanBakar')->name('delete.bahanbakar');
    Route::get ('/bahanbakar','EKSTERNAL\BahanBakarController@BahanBakarExport')->name('export.bahanbakar');
});
Route::prefix('listrik')->group(function () {
    Route::post('/', 'EKSTERNAL\ListrikController@addListrik')->name('add.listrik');
    Route::get('/edit/{id}', 'EKSTERNAL\ListrikController@editListrik')->name('edit.listrik');
    Route::post('/update/{id}', 'EKSTERNAL\ListrikController@updateListrik')->name('update.listrik');
    Route::delete('/hapus/{id}', 'EKSTERNAL\ListrikController@deleteListrik')->name('delete.listrik');
    Route::get ('/listrik','EKSTERNAL\ListrikController@ListrikExport')->name('export.listrik');
});
Route::prefix('pengeluaranperusahaan')->group(function () {
    Route::post('/', 'EKSTERNAL\PengeluaranPerusahaanController@addPengeluaranPerusahaan')->name('add.pengeluaranperusahaan');
    Route::get('/edit/{id}', 'EKSTERNAL\PengeluaranPerusahaanController@editPengeluaranPerusahaan')->name('edit.pengeluaranperusahaan');
    Route::post('/update/{id}', 'EKSTERNAL\PengeluaranPerusahaanController@updatePengeluaranPerusahaan')->name('update.pengeluaranperusahaan');
    Route::delete('/hapus/{id}', 'EKSTERNAL\PengeluaranPerusahaanController@deletePengeluaranPerusahaan')->name('delete.pengeluaranperusahaan');
    Route::get ('/pengeluaran','EKSTERNAL\PengeluaranPerusahaanController@PengeluaranPerusahaanExport')->name('export.pengeluaranperusahaan');
});
Route::prefix('pendapatanperusahaan')->group(function () {
    Route::post('/', 'EKSTERNAL\NilaiPendapatanPerusahaanController@addNilaiPendapatanPerusahaan')->name('add.nilaipendapatanperusahaan');
    Route::get('/edit/{id}', 'EKSTERNAL\NilaiPendapatanPerusahaanController@editNilaiPendapatanPerusahaan')->name('edit.nilaipendapatanperusahaan');
    Route::post('/update/{id}', 'EKSTERNAL\NilaiPendapatanPerusahaanController@updateNilaiPendapatanPerusahaan')->name('update.nilaipendapatanperusahaan');
    Route::delete('/hapus/{id}', 'EKSTERNAL\NilaiPendapatanPerusahaanController@deleteNilaiPendapatanPerusahaan')->name('delete.nilaipendapatanperusahaan');
    Route::get ('/pendapatan','EKSTERNAL\NilaiPendapatanPerusahaanController@NilaiPendapatanPerusahaanExport')->name('export.nilaipendapatanperusahaan');
});
Route::prefix('nilaitambah')->group(function () {
    Route::post('/', 'EKSTERNAL\NilaiTambahPerusahaanController@addNilaiTambahPerusahaan')->name('add.nilaitambahperusahaan');
    Route::get('/edit/{id}', 'EKSTERNAL\NilaiTambahPerusahaanController@editNilaiTambahPerusahaan')->name('edit.nilaitambahperusahaan');
    Route::post('/update/{id}', 'EKSTERNAL\NilaiTambahPerusahaanController@updateNilaiTambahPerusahaan')->name('update.nilaitambahperusahaan');
    Route::delete('/hapus/{id}', 'EKSTERNAL\NilaiTambahPerusahaanController@deleteNilaiTambahPerusahaan')->name('delete.nilaitambahperusahaan');
    Route::get ('/nilaitambah','EKSTERNAL\NilaiTambahPerusahaanController@NilaiTambahPerusahaanExport')->name('export.nilaitambahperusahaan');
});
Route::prefix('stokawal')->group(function () {
    Route::post('/', 'EKSTERNAL\SelisihStokAwalController@addSelisihStokAwal')->name('add.stokawal');
    Route::get('/edit/{id}', 'EKSTERNAL\SelisihStokAwalController@editSelisihStokAwal')->name('edit.stokawal');
    Route::post('/update/{id}', 'EKSTERNAL\SelisihStokAwalController@updateSelisihStokAwal')->name('update.stokawal');
    Route::delete('/hapus/{id}', 'EKSTERNAL\SelisihStokAwalController@deleteSelisihStokAwal')->name('delete.stokawal');
    Route::get ('/selisih','EKSTERNAL\SelisihStokAwalController@SelisihStokAwalExport')->name('export.stokawal');
});
Route::prefix('barangmodal')->group(function () {
    Route::post('/', 'EKSTERNAL\BarangModalTetapController@addBarangModalTetap')->name('add.barangmodal');
    Route::get('/edit/{id}', 'EKSTERNAL\BarangModalTetapController@editBarangModalTetap')->name('edit.barangmodal');
    Route::post('/update/{id}', 'EKSTERNAL\BarangModalTetapController@updateBarangModalTetap')->name('update.barangmodal');
    Route::delete('/hapus/{id}', 'EKSTERNAL\BarangModalTetapController@deleteBarangModalTetap')->name('delete.barangmodal');
    Route::get ('/modal','EKSTERNAL\BarangModalTetapController@BarangModalTetapExport')->name('export.barangmodal');
});
Route::prefix('penjualan')->group(function () {
    Route::post('/', 'EKSTERNAL\PenjualanBarangController@addPenjualanBarang')->name('add.penjualan');
    Route::get('/edit/{id}', 'EKSTERNAL\PenjualanBarangController@editPenjualanBarang')->name('edit.penjualan');
    Route::post('/update/{id}', 'EKSTERNAL\PenjualanBarangController@updatePenjualanBarang')->name('update.penjualan');
    Route::delete('/hapus/{id}', 'EKSTERNAL\PenjualanBarangController@deletePenjualanBarang')->name('delete.penjualan');
    Route::get ('/jual','EKSTERNAL\PenjualanBarangController@PenjualanBarangExport')->name('export.penjualan');
});

Route::prefix('negara')->group(function () {
    Route::post('/', 'EKSTERNAL\NegaraTujuanController@addNegara')->name('add.negara');
    Route::get('/edit/{id}', 'EKSTERNAL\NegaraTujuanController@editNegara')->name('edit.negara');
    Route::post('/update/{id}', 'EKSTERNAL\NegaraTujuanController@updateNegara')->name('update.negara');
    Route::delete('/hapus/{id}', 'EKSTERNAL\NegaraTujuanController@deleteNegara')->name('delete.negara');
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
    Route::get('/settings/setting-penomoran', 'Sekretariat\Nomor\SettingNomorController@showSetting')->name('show.setting-nomor');
	Route::post('/settings/add-nomor', 'Sekretariat\Nomor\SettingNomorController@addNomor')->name('add.nd');
        Route::get('/settings/edit-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@editNomor')->name('edit.nd');
        Route::patch('/settings/update-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@updateNomor')->name('update.nd');
    //KEPALAAAAAAA//
    Route::post('setting_kode', 'Sekretariat\Nomor\SettingNomorController@filterKode')->name('setting.kode');
    Route::post('unsetting_kode', 'Sekretariat\Nomor\SettingNomorController@unFilterKode')->name('unsetting.kode');
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

        Route::get('/setting/spt', 'SPT\CreateSPTController@gabung')->name('setting.spt');
        Route::post('/setting/formDasarHukum','SPT\DasarHukumController@addDasarHukum')->name('add.dasar');
        Route::get('setting/edit/{id}', 'SPT\DasarHukumController@editDasarHukum')->name('edit.dasar');
        Route::patch('/setting/update/{id}', 'SPT\DasarHukumController@updateDasarHukum')->name('update.dasar');
        Route::delete('/setting/detete/{id}', 'SPT\DasarHukumcontroller@deleteDasarHukum')->name('delete.dasar');
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


        Route::post('/settings/add-kategori-nomor', 'Sekretariat\Nomor\SettingNomorController@addKategori')->name('add.kategori-nomor');
        Route::get('/settings/edit-kategori-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@editKategori')->name('edit.kategori-nomor');
        Route::patch('/settings/update-kategori-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@updateKategori')->name('update.kategori-nomor');
        Route::delete('/settings/delete-kategori-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@deleteKategori')->name('delete.kategori-nomor');

        Route::post('/settings/add-setting-nomor', 'Sekretariat\Nomor\SettingNomorController@addSetting')->name('add.setting-nomor');
        Route::get('/settings/edit-setting-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@editSetting')->name('edit.setting-nomor');
        Route::patch('/settings/update-setting-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@updateSetting')->name('update.setting-nomor');
        Route::delete('/settings/delete-setting-nomor/{id}', 'Sekretariat\Nomor\SettingNomorController@deleteSetting')->name('delete.setting-nomor');



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


    //SEKTOR//
    Route::prefix('sektor')->group(function (){
        Route::get('/', 'All\SektorController@formSektor')->name('form.sektor');
        Route::post('/', 'All\SektorController@addSektor')->name('add.sektor');
        Route::get('/edit/{id}', 'All\SektorController@editSektor')->name('edit.sektor');
        Route::patch('/update/{id}', 'All\SektorController@updateSektor')->name('update.sektor');
        Route::delete('/delete/{id}', 'All\SektorController@deleteSektor')->name('delete.sektor');

    });
    //END SEKTOR//


    //MEDIA//
    Route::prefix('media')->group (function(){
        Route::get('/', 'All\MediaController@formMedia')->name('form.media');
        Route::post('/', 'All\MediaController@addMedia')->name('add.media');
        Route::get('/edit/{id}', 'All\MediaController@editMedia')->name('edit.media');
        Route::patch('/update/{id}', 'All\MediaController@updateMedia')->name('update.media');
        Route::delete('/detete/{id}', 'All\MediaController@deleteMedia')->name('delete.media');

    });
    //END MEDIA//


    //JENEIS LAYANAN.../////////////////
    Route::prefix('layanan')->group (function(){
        Route::get('/', 'PPL\JenisLayananController@formLayanan')->name('form.layanan');
        Route::post('/', 'PPL\JenisLayananController@addLayanan')->name('add.layanan');
        Route::get('/edit/{id}', 'PPL\JenisLayananController@editLayanan')->name('edit.layanan');
        Route::patch('/update/{id}', 'PPL\JenisLayananController@updateLayanan')->name('update.layanan');
        Route::delete('/detete/{id}', 'PPL\JenisLayananController@deleteLayanan')->name('delete.layanan');

    });
//// END LAYANAN//////


    //TABULASI//
    Route::prefix('tabulasi')->group (function(){
        Route::get('/tabulasi', 'PPL\TabulasiController@index')->name('rekap.tabulasi');
        Route::get ('/ExportTabulasi','PPL\TabulasiController@ExportTabulasi')->name('export.tabulasi');
        Route::get('/tabulasi/show','PPL\TabulasiController@showTabulasi')->name('show.tabulasi');
        Route::get('tabulasi/count','PPL\TabulasiController@count')->name('count.tabulasi');
    });
    //END TABULASI//




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




