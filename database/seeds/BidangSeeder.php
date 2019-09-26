<?php

use App\Models\All\Bidang;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bidang = Bidang::create([
            'kode_bidang' => '01',
            'nama_bidang' => 'Sekretariat',
            'nama_short' => 'Sekretariat',
        ]);
        $bidang = Bidang::create([
            'kode_bidang' => '02',
            'nama_bidang' => 'Perencanaan Dan Pengembangan',
            'nama_short' => 'Renbang',
        ]);
        $bidang = Bidang::create([
            'kode_bidang' => '03',
            'nama_bidang' => 'Promosi Penanaman Modal',
            'nama_short' => 'Promosi',
        ]);
        $bidang = Bidang::create([
            'kode_bidang' => '04',
            'nama_bidang' => 'Pelayanan Perizinan',
            'nama_short' => 'Yanjin',
        ]);
        $bidang = Bidang::create([
            'kode_bidang' => '05',
            'nama_bidang' => 'Pengawasan dan Pengendalian Penanaman Modal',
            'nama_short' => 'Wasdal',
        ]);
        $bidang = Bidang::create([
            'kode_bidang' => '06',
            'nama_bidang' => 'Pengaduan dan Peningkatan Layanan',
            'nama_short' => 'Pengaduan',
        ]);
        $bidang = Bidang::create([
            'kode_bidang' => '07',
            'nama_bidang' => 'Pengelolaan Data dan Informasi',
            'nama_short' => 'PDI',
        ]);
    }
}
