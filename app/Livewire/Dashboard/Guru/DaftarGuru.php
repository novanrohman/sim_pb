<?php

namespace App\Livewire\Dashboard\Guru;

use App\Models\Guru;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarGuru extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.dashboard.guru.daftar-guru',[
            'gurus' => Guru::latest()->paginate(5),
        ]);
    }
}
