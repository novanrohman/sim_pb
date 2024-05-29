<?php

namespace App\Livewire\Dashboard\Pegawai;

use App\Models\Pegawai;
use App\Models\Siswa;
use Livewire\Component;

class DaftarPegawai extends Component
{
    public $pegawais;

    public function mount()
    {
        $this->pegawais = Pegawai::all();

//        foreach ($this->gurus as $guru) {
//            $guru->mapel_name = MataPelajaran::find($guru->id_mapel)->mata_pelajaran;
//        }

//        dd($pegawais);
    }

    public function delete()
    {

    }

    public function detail()
    {

    }
    public function render()
    {
        return view('livewire.dashboard.pegawai.daftar-pegawai');
    }
}
