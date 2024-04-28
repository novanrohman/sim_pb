<?php

namespace App\Livewire\DashboardGuru;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.profile',[
            'gurus' => Auth::guard('guru')->user()
        ]);
    }
}
