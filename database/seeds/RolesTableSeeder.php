<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = Non::create([
            'name' => 'Superadmin',
            'slug' => 'superadmin',
        ]);

        $pdi = Role::create([
            'name' => 'PDI',
            'slug' => 'pdi',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $renbang = Role::create([
            'name' => 'RENBANG',
            'slug' => 'renbang',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $promosi = Role::create([
            'name' => 'PROMOSI',
            'slug' => 'promosi',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $wasdal = Role::create([
            'name' => 'WASDAL',
            'slug' => 'wasdal',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $pengaduan = Role::create([
            'name' => 'PENGADUAN',
            'slug' => 'pengaduan',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $yanjin = Role::create([
            'name' => 'YANJIN',
            'slug' => 'yanjin',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $sekretariat = Role::create([
            'name' => 'SEKRETARIAT',
            'slug' => 'sekretariat',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
        $kepala = Role::create([
            'name' => 'KEPALA',
            'slug' => 'kepala',
            'permissions' => [
                'user-manager' => false,
            ],
        ]);
    }
}
