<?php

namespace App\Livewire\DashboardGuru\Siswa;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RekapSiswa extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.siswa.rekap-siswa', [
            'title' => 'Rekap Siswa - Guru',
            'gurus' => Auth::guard('guru')->user()
        ]);
    }
}
