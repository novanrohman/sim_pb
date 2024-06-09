<?php

namespace App\Livewire\Dashboard\Siswa;

use App\Models\Siswa;
use Livewire\Component;

class DetailSiswa extends Component
{
    protected $siswa;

    public function mount($id)
    {
        $this->siswa = Siswa::find($id);
    }

    public function edit($id){
        // $this->dispatch('editSiswa', $id);
        return redirect()->route('editSiswa', ['id'=>$id]);
    }

    public function render()
    {
        return view('livewire.dashboard.siswa.detail-siswa',
            [
                'siswa' => $this->siswa,
            ]
        );
    }


}
