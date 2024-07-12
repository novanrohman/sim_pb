<?php

namespace App\Livewire\Dashboard\Guru;

use App\Models\Guru;
use App\Models\MataPelajaran;
use Livewire\Component;

class DetailGuru extends Component
{

    protected $guru;
    public $mapel;


    public function mount($id)
    {
        $this->guru = Guru::find($id);
    }

    public function edit($id){
        return redirect()->route('editGuru', ['id'=>$id]);
    }

    public function render()
    {
        return view('livewire.dashboard.guru.detail-guru', [
            'guru' => $this->guru,
            'mapel' => $this->mapel,
        ]);
    }
}
