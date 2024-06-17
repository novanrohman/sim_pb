<?php

namespace App\Livewire\Dashboard\Siswa;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class EditSiswa extends Component
{
    public $siswa;
    public $kelas;
    public $id_kelas;
    public $selectedKelas;
    
    public function mount($id)
    {
        $this->siswa = Siswa::find($id);
        $this->kelas = Kelas::get();
        
        if (!empty($id_kelas)) {
            $this->siswa = Siswa::where('id_kelas', $id_kelas)->get();
            
        }
        $this->id_kelas = $this->kelas ? $this->siswa->id_kelas : null;
    }

    public function update()
    {
        $siswa = Siswa::find($this->siswa->id);

        $validate = $this->validate(
            [
                'id_kelas' => 'required',
            ]
            );

            $siswa->update($validate);
            return redirect(url('admin/daftar_siswa'))->with('success','Edit data berhasil');
    }
    public function render()
    {
        return view('livewire.dashboard.siswa.edit-siswa');
    }
}
