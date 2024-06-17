<?php

namespace App\Livewire\Dashboard\Siswa;

use App\Models\Siswa;
use Livewire\Component;

class DaftarSiswa extends Component
{

    public $siswas = null;
    //Daftar Semua Siswa

    public function render()
    {
        return view('livewire.dashboard.siswa.daftar-siswa');
    }

    public function detailSiswa($id)
    {
        return redirect()->route('detailSiswa', ['id'=>$id]);
    }

    public function delete($id)
    {
        Siswa::find($id)->delete();
        session()->flash('massage', 'Data berhasl dihapus');
        return $this->redirect(url('/admin/daftar_siswa'));
    }

    public function mount()
    {
        $this->siswas = Siswa::all();

    }
}
