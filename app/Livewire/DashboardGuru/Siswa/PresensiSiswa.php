<?php

namespace App\Livewire\DashboardGuru\Siswa;

use Livewire\Component;

class PresensiSiswa extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.siswa.presensi-siswa', [
            'title' =>'Presensi Siswa - Guru'
        ]);
    }
}
