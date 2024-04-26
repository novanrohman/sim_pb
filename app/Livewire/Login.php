<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function logout($guard)
    {
        Auth::guard($guard)->logout();
        session()->flash('success', 'You have been logged out.');
        return redirect()->route('login');
    }
    public function login()
    {

        $this->validate();
        if (Auth::attempt($this->validate())) {
            return redirect()->route('dashboard');
        }
        elseif (Auth::guard('kepsek')->attempt($this->validate())) {
            return redirect()->route('dashboard');
        }

        throw ValidationException::withMessages([
            'email' => 'The provide credentials do not match our records',
        ]);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
