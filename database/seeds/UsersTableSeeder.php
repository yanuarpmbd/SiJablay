<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Superadmin',
            'username' => 'superadmin',
            'password' => bcrypt('ninja2009'),
        ]);
        $admin->roles()->attach(1);

        $yanjin = User::create([
            'name' => 'Pelayanan Perizinan',
            'username' => 'yanjin',
            'password' => bcrypt('yanjin123'),
        ]);
        $yanjin->roles()->attach(7);

        $promosi = User::create([
            'name' => 'Promosi',
            'username' => 'promosi',
            'password' => bcrypt('promosi123'),
        ]);
        $promosi->roles()->attach(4);

        $wasdal = User::create([
            'name' => 'Pengawasan dan Pengendalian',
            'username' => 'wasdal',
            'password' => bcrypt('wasdal123'),
        ]);
        $wasdal->roles()->attach(5);

        $pengaduan = User::create([
            'name' => 'Pengaduan dan Peningkatan Layanan',
            'username' => 'pengaduan',
            'password' => bcrypt('pengaduan123'),
        ]);
        $pengaduan->roles()->attach(6);

        $pdi = User::create([
            'name' => 'Pengelolaan Data dan Informasi',
            'username' => 'pdi',
            'password' => bcrypt('pdi123'),
        ]);
        $pdi->roles()->attach(2);

        $sekretariat = User::create([
            'name' => 'Sekretariat',
            'username' => 'sekretariat',
            'password' => bcrypt('sekretariat123'),
        ]);
        $sekretariat->roles()->attach(8);

        $renbang = User::create([
            'name' => 'Perencanaan dan Pengembangan',
            'username' => 'renbang',
            'password' => bcrypt('renbang123'),
        ]);
        $renbang->roles()->attach(3);
    }
}
