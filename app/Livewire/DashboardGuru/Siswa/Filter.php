<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Kelas;
use Livewire\Component;

class Filter extends Component
{
    public $kelas;
    public $selected = null;

    //show all daftar kelas
    public function mount(Kelas $kelas)
    {
        $this->kelas = $kelas->get();
    }

    public function filter()
    {
        // $this->dispatch('filtered', id_kelas:$this->selected);
        $this->dispatch('filtered', id_kelas:$this->selected);
        // dd($this->selected);
    }
    
    public function render()
    {
        
        return view('livewire.dashboard-guru.siswa.filter');
    }
}