<?php

namespace App\Livewire\DashboardGuru\Siswa;

use Livewire\Component;

class RekapSiswa extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.siswa.rekap-siswa', [
            'title' => 'Rekap Siswa - Guru'
        ]);
    }
}
