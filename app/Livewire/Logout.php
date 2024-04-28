<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
            session()->flash('success', 'You have been logged out.');
            return redirect()->route('login');
        }
        elseif (Auth::guard('kepsek')->check()) {
            Auth::guard('kepsek')->logout();
            session()->flash('success', 'You have been logged out.');
            return redirect()->route('login');
        }
        elseif (Auth::guard('guru')->check()) {
            Auth::guard('guru')->logout();
            session()->flash('success', 'You have been logged out.');
            return redirect()->route('login');
        }

    }

    public function render()
    {
        return view('livewire.logout');
    }
}
