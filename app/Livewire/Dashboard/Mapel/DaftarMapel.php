<?php

namespace App\Livewire\Dashboard\Mapel;

use App\Models\MataPelajaran;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarMapel extends Component
{
    use WithPagination;

    // public $mapels;

    public $mata_pelajaran;
    public $semester;

    // public function mount(){
    //     $this->mapels = MataPelajaran::all('id','mata_pelajaran','semester')->paginate(5);
        
    // }

    public function delete($id){
        MataPelajaran::find($id)->delete();

        session()->flash('delete','Data berhasil dihapus!');
        return redirect()->route('mapel');
        
    }

    public function storeMapel(){
        $validation = $this->validate([
            'mata_pelajaran'=>'required|max:255',
            'semester'=>'required|max:255',
        ]);

        $mapel = MataPelajaran::create([
            'mata_pelajaran' => $this->mata_pelajaran,
            'semester' => $this->semester,
        ]);

        session()->flash('add','Data berhasil ditambahkan!');
        return redirect()->route('mapel');
    }

    public function render()
    {
        $mapels = MataPelajaran::paginate(5);
        return view('livewire.dashboard.mapel.daftar-mapel',[
            'mapels' => $mapels,
        ]);
    }
}
