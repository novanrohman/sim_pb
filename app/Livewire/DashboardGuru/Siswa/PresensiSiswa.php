<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class PresensiSiswa extends Component
{
    use WithPagination;
    
    public function render()
    {
        $siswas = Siswa::paginate(20);
        return view('livewire.dashboard-guru.siswa.presensi-siswa', [
            'title' =>'Presensi Siswa - Guru',
            'gurus' => Auth::guard('guru')->user()
        ], compact('siswas'));
    }
}
