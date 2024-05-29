<?php

namespace App\Livewire\DashboardGuru;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // return view('livewire.dashboard-guru.index')->with([
        //     'gurus' => Auth::guard('guru')->user(),
        // ]);
        return view('livewire.dashboard-guru.index');
    }
}
