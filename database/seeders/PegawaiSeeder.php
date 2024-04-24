<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Pegawai::factory(10)->create();

        \App\Models\Pegawai::factory()->create([
            'nama_pegawai' => 'Test User',
            'email_pegawai' => 'test@example.com',
            'password' => bcrypt('pegawai'),
            'remember_token' => String::random(10),
        ]);
    }
}
