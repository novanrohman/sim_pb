<?php

namespace App\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class RegisterPegawai extends Component
{

    public $nama_pegawai;
    public $nip;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register-pegawai');
    }

    public function storePegawai(){
        $validated=$this->validate([
            'nama_pegawai'=>'required|max:255',
            'nip'=>'required|max:20|unique:pegawais',
            'email'=>'required|email|unique:pegawais|max:255',
            'password'=>'required|max:255'
        ]);

        $user=Pegawai::create([
            'nama_pegawai'=>$this->nama_pegawai,
            'nip'=>$this->nip,
            'email'=>$this->email,
            'password'=>bcrypt($this->password)
        ]);

        // dd($user);
        Auth::login($user);
        session()->flash('success', 'Registration Success');
        return $this->redirect('/admin', navigate:true);
    }
}
