<?php

namespace App\Livewire;

use App\Models\Pegawai;
// use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Livewire\Component;

class Register extends Component
{
    // public $nama;
    // public $nis;
    // public $email;
    // public $password;

    public $nama_pegawai;
    public $nip;
    public $email_pegawai;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser(){
        // $validated=$this->validate([
        //     'nama'=>'required|max:255',
        //     'nis'=>'required|max:20',
        //     'email'=>'required|email|unique:users|max:255',
        //     'password'=>'required|max:255'
        // ]);

        // $user=User::create([
        //     'name'=>$this->nama,
        //     'nis'=>$this->nis,
        //     'email'=>$this->email,
        //     'password'=>bcrypt($this->password)
        // ]);

        $validated=$this->validate([
            'nama_pegawai'=>'required|max:255',
            'nip'=>'required|max:20',
            'email_pegawai'=>'required|email|unique:pegawais|max:255',
            'password'=>'required|max:255'
        ]);

        $user=Pegawai::create([
            'nama_pegawai'=>$this->nama_pegawai,
            'nip'=>$this->nip,
            'email_pegawai'=>$this->email_pegawai,
            'password'=>bcrypt($this->password)
        ]);

        dd($user);
        // Auth::login($user);
        // session()->flash('success', 'Registration Success');
        // return $this->redirect('/admin', navigate:true);
    }
}
