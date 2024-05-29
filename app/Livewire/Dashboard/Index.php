<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use App\Models\Pegawai;
use App\Models\Siswa;
use Livewire\Component;

class Index extends Component
{

    public $totalGuru = 0;
    public $totalPegawai = 0;
    public $totalSiswa = 0;

    public function mount(){
        $this->totalGuru = Guru::all()->count();
        $this->totalPegawai = Pegawai::all()->count();
        $this->totalSiswa = Siswa::all()->count();
    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
