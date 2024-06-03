<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowSiswa extends Component
{
    public $siswas = [];
    // public $id_kelas
    // protected $listeners = ['filtered' => 'mount'];


    #[On('filtered')]
    public function update($id_kelas)
    {
        // $id_kelas = $id_kelas['id_kelas'];

        // $id_kelas=;
        // $this->siswas = Siswa::query();
        if (!empty($id_kelas)) {
            $siswas = Siswa::where('id_kelas', $id_kelas)->get();
        } else {
            $siswas = Siswa::get();
        }
        $this->siswas = $siswas;
    }

    public function render()
    {
        return view('livewire.dashboard-guru.siswa.show-siswa');
    }
}
