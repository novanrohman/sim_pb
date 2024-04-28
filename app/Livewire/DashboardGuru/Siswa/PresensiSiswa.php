<?php

namespace App\Livewire\DashboardGuru\Siswa;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PresensiSiswa extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.siswa.presensi-siswa', [
            'title' =>'Presensi Siswa - Guru',
            'gurus' => Auth::guard('guru')->user()
        ]);
    }
}
