<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Obat;
use App\Models\pasien;
use App\Models\pendaftaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Ravel',
            'no_hp' => '11111111',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '22222222',
            'password' => 'password',
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '33333333',
            'password' => Hash::make('password'),
            'role' => 'loket'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '44444444',
            'password' => Hash::make('password'),
            'role' => 'dokter'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '55555555',
            'password' => 'password',
            'role' => 'apoteker'
        ]);
        User::create([
            'username' => 'Ravel',
            'no_hp' => '66666666',
            'password' => 'password',
            'role' => 'kasir'
        ]);

        pasien::create([
            'nama' => 'Ravel',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => Carbon::create('2002', '01', '01'),
            'no_hp' => '0897687576'
        ]);

        pendaftaran::create([
            'nama' => 'Ravel',
            'poly' => 'apa aja',
            'gejala' => 'jatuh dari tangga',
            'tgl_periksa' => Carbon::create('2024', '01', '12'),
            'chekin' => 'sudah chekin'
        ]);

        Obat::create([
            'nama_obat' => 'paracetamol',
            'harga' => 20000
        ]);
    }
}
