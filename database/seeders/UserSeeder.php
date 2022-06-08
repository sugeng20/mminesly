<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama_depan' => 'guru',
                'nama_belakang' => 'smp',
                'email' => 'guru@gmail.com',
                'nis_nik' => 12346,
                'password' => Hash::make('guru'),
                'role' => 'GURU'
            ],
            [
                'nama_depan' => 'siswa',
                'nama_belakang' => 'smp',
                'email' => 'siswa@gmail.com',
                'nis_nik' => 123,
                'password' => Hash::make('siswa'),
                'role' => 'SISWA'
            ]
        ]);
    }
}
