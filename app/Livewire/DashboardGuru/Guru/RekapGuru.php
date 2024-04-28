<?php

namespace App\Livewire\DashboardGuru\Guru;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RekapGuru extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.guru.rekap-guru',[
            'title' => 'Rekap Guru - Guru',
            'gurus' => Auth::guard('guru')->user()
        ]);
    }
}
