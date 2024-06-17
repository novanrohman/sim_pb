<?php

namespace App\Livewire\Dashboard\Guru;

use App\Models\Guru;
use App\Models\MataPelajaran;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarGuru extends Component
{
    use WithPagination;

    public $gurus = null;


    public function mount()
    {
        $this->gurus = Guru::all();

    }


    //Remove guru
    public function delete($id)
    {
        Guru::find($id)->delete();

        session()->flash('message', 'Data berhasil dihapus.');

        return redirect(url('/admin/data_guru'));

    }

    //Tables
    public function initializeDataTables()
    {
        $this->dispatchBrowserEvent('initSimpleDataTables');
    }

//    Detail Guru
    public function detailGuru($id)
    {
        return redirect()->route('detailGuru', ['id' => $id]);
    }

    public function render()
    {
        return view('livewire.dashboard.guru.daftar-guru');
    }
}
