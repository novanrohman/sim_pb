<?php

namespace App\Livewire\Dashboard\Guru;

use App\Models\Guru;
use App\Models\MataPelajaran;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarGuru extends Component
{
    use WithPagination;

    public $gurus = null;


    public function mount(){
        $this->gurus=Guru::all();
    }
    public function render()
    {
//        $gurus = Guru::with('matapelajaran')->paginate(5);
//        dd($gurus);
//        return view('livewire.dashboard.guru.daftar-guru',compact('gurus'));
        return view('livewire.dashboard.guru.daftar-guru');
    }

    public function delete( Guru $guru )
    {
        dd('delete');
    }
}
