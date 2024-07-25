<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\PresensiMapel;

use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class ShowSiswa extends Component
{
    public $siswas = null;
    public $presensi = [];
    
    public function savePresensi(){
        // $mapel = \Illuminate\Support\Facades\Auth::guard('guru')->user()->matapelajaran->mata_pelajaran;
        
        $guru = Auth::guard('guru')->user();
        $mapel = $guru->matapelajaran->id;

        foreach ($this->presensi as $nis => $data) {
            PresensiMapel::Create(
                ['nis' => $nis, 'mapel' => $mapel, 'status' => $data['status']],
                
            );
        }

        // return view(dd($this->presensi, $mapel, ));

        session()->flash('success', 'Attendance saved successfully.');
        
        
    }

    //Mengambil data
    #[On('filtered')]
    public function updating($id_kelas)
    {
        //Check id_kelas
        if (!empty($id_kelas)) {
            $siswas = Siswa::where('id_kelas', $id_kelas)->get();
            // check data siswas
            if($siswas != "[]"){
                return $this->siswas = $siswas;
            }
            else{
                $this->siswas=null;
                // return session()->flash('empty', 'Data belum ada');
            }
        } 
        else{
            $this->siswas=null;
            $siswas = session()->flash
            ('error', 'Data tidak ditemukan, pilih kelas yang benar');
        }
        
    }    

    public function render()
    {
        return view('livewire.dashboard-guru.siswa.show-siswa');
    }
}
