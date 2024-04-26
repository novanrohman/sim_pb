<?php

namespace App\Livewire;

use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterGuru extends Component
{
    public $nama_guru;
    public $nip;
    public $email_guru;
    public $password;

    public function render()
    {
        return view('livewire.register-guru');
    }

    public function storeGuru()
    {
        $validate=$this->validate([
            'nama_guru'=>'required|max:255',
            'nip'=>'required|max:20|unique:gurus',
            'email_guru'=>'required|email|unique:gurus',
            'password'=>'required|max:255'
        ]);

        $user=Guru::create([
            'nama_guru' => $this->nama_guru,
            'nip'=>$this->nip,
            'email_guru'=>$this->email_guru,
            'password'=>$this->password,
        ]);

        dd($user);
//        Auth::login($user);
//        session()->flash('success', 'Registration Success');
//        return $this->redirect('/admin', navigate: true);
    }
}
