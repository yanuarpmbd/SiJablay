<?php

use App\Models\PangkatModel;
use Illuminate\Database\Seeder;
use App\Models\Admin\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pangkat = PangkatModel::create([
            'gol' => 'I/a',
            'pangkat' => 'Juru Muda',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'I/b',
            'pangkat' => 'Juru Muda Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'I/c',
            'pangkat' => 'Juru',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'I/d',
            'pangkat' => 'Juru Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'II/a',
            'pangkat' => 'Pengatur Muda',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'II/b',
            'pangkat' => 'Pengatur Muda Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'II/c',
            'pangkat' => 'Pengatur',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'II/d',
            'pangkat' => 'Pengatur Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'III/a',
            'pangkat' => 'Penata Muda',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'III/b',
            'pangkat' => 'Penata Muda Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'III/c',
            'pangkat' => 'Penata',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'III/d',
            'pangkat' => 'Penata Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'IV/a',
            'pangkat' => 'Pembina',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'IV/b',
            'pangkat' => 'Pembina Tingkat I',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'IV/c',
            'pangkat' => 'Pembina Utama Muda',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'IV/d',
            'pangkat' => 'Pembina UtamaMadya',
        ]);
        $pangkat = PangkatModel::create([
            'gol' => 'IV/e',
            'pangkat' => 'Pembina Utama',
        ]);
    }
}
