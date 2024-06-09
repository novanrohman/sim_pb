<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowSiswa extends Component
{
    public $siswas = null;
    
    

    //Mengambil data
    #[On('filtered')]
    public function update($id_kelas)
    {
        if (!empty($id_kelas)) {
            $siswas = Siswa::where('id_kelas', $id_kelas)->get();
        } 
        // dd($siswas);
        $this->siswas = $siswas;
        
    }

    public function store(){
        foreach (range(1,10) as $index) {
        $this->validate([]);
        }
    }

    

    public function render()
    {
        return view('livewire.dashboard-guru.siswa.show-siswa');
    }
}
