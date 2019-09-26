<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'sekretariat',
            'yanzin',
            'renbang',
            'promosi',
            'pengaduan',
            'wasdal',
            'pdi'
        ];


        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
