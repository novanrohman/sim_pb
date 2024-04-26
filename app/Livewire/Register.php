<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Livewire\Component;

class Register extends Component
{
    public $nama;
    public $email;
    public $password;

   

    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser(){
        $validated=$this->validate([
            'nama'=>'required|max:255',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|max:255'
        ]);

        $user=User::create([
            'name'=>$this->nama,
            'email'=>$this->email,
            'password'=>bcrypt($this->password)
        ]);

        // dd($user);
        Auth::login($user);
        session()->flash('success', 'Registration Success');
        return $this->redirect('/admin', navigate:true);
    }

    
}
