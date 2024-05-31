<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Kelas;
use Livewire\Component;

class Filter extends Component
{
    public $selectedCategory;

    public $query;
    public $categoryId;

    public function selectedCategory(){
        $this->emitTo("show-siswas", 'reloadSiswas', $this->categoryId, $this->query);
    }
    public function render()
    {
        $kelas = Kelas::get();
        return view('livewire.dashboard-guru.siswa.filter', 
        [
            'kelas'=> $kelas,
        ]);
    }
}
