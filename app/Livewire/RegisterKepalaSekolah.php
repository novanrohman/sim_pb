<?php

namespace App\Livewire;

use App\Models\KepalaSekolah;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterKepalaSekolah extends Component
{
    public $nama;
    public $nip;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register-kepala-sekolah');
    }

    public function storeKepalaSekolah()
    {
        $validate=$this->validate([
            'nama'=>'required|max:255',
            'nip'=>'required|unique:kepala_sekolahs',
            'email'=>'required|email|unique:kepala_sekolahs',
            'password'=>'required|max:255',
        ]);

        $user=kepalaSekolah::create([
            'nama'=>$this->nama,
            'nip'=>$this->nip,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
        ]);


//        dd($user);
//        if(Auth::attempt($user)){
//            session()->flash('success', 'Registration Success');
//        return $this->redirect('/admin', navigate: true);
//        }else{
//            session()->flash('success', 'Registration Success');
//        return $this->redirect('/', navigate: true);
//        }

        Auth::guard('kepsek')->login($user);
        session()->flash('success', 'Registration Success');
        return $this->redirect('/admin', navigate: true);
    }
}
