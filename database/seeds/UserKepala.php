<?php

use App\Models\Admin\User;
use Illuminate\Database\Seeder;


class UserKepala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Kepala Dinas DPMPTSP Prov Jateng',
            'username' => 'kadis_dpmptsp',
            'password' => bcrypt('kadis123321'),
        ]);
    }
}
