<?php

namespace App\Livewire\Dashboard\Guru;

use App\Models\Guru;
use Livewire\Component;
use App\Models\MataPelajaran;

class EditGuru extends Component
{
public $guru;
public $mapel;

public $id_mapel;
public $selectedmapel;
    public function mount($id){
        $this->guru = Guru::find($id);
        $this->mapel = MataPelajaran::get();

        if(!empty($id_mapel))
        {
            $this->guru = MataPelajaran::where('id_mapel', $id);
        }
    $this->id_mapel = $this->mapel ? $this->guru->id_mapel : null;
    }

    public function update(){
        // Store data to database
        $guru = Guru::find($this->guru->id);

        $validate = $this->validate([
            'id_mapel' => 'required',
        ]);

        $guru->update($validate);
        return redirect(url('admin/data_guru'))->with('success','Edit data berhasil');
    }

    public function render()
    {
        return view('livewire.dashboard.guru.edit-guru');
    }
}
