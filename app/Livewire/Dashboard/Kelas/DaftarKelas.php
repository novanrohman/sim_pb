<?php

namespace App\Livewire\Dashboard\Kelas;

use App\Models\Kelas;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarKelas extends Component
{

    use WithPagination;

    public $addkelas;


    public function storeKelas(){
        $validate=$this->validate([
            'addkelas'=>'required|max:255',
        ]);

        $addkelas=Kelas::create([
            'kelas'=>$this->addkelas,
        ]);

        session()->flash('add','Data kelas berhasil ditambah!');
        return redirect()->route('kelasDashboard');

    }

    public function delete($id){
        Kelas::find($id)->delete();
        
        session()->flash('delete','Data berhasil dihapus!');
        return redirect()->route('kelasDashboard');
        
    }

    public function render()
    {
        $kelas = Kelas::paginate(5);
        // return view('livewire.dashboard.kelas.daftar-kelas');
        return view('livewire.dashboard.kelas.daftar-kelas', compact('kelas'));
    }
}
