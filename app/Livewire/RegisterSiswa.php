<?php

namespace App\Livewire;

use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class RegisterSiswa extends Component
{
    public $nama_siswa;
    public $nis;
    public $email_siswa;
    public $password;

    public function render()
    {
        return view('livewire.register-siswa');
    }

    public function storeSiswa(){
        $validate=$this->validate([
            'nama_siswa' => 'required|max:255',
            'nis' => 'required|max:20|unique:siswas',
            'email_siswa' => 'required|email|unique:siswas',
            'password' => 'required|max:255'
        ]);

        $user=Siswa::create([
            'nama_siswa' => $this->nama_siswa,
            'nis'=>$this->nis,
            'email_siswa'=>$this->email_siswa,
            'password'=>bcrypt($this->password)
        ]);

        Auth::login($user);
        session()->flash('success', 'Register Success');
        return $this->redirect('/admin', navigate:true);
    }
}
