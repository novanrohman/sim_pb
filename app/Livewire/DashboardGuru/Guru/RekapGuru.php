<?php

namespace App\Livewire\DashboardGuru\Guru;

use Livewire\Component;

class RekapGuru extends Component
{
    public function render()
    {
        return view('livewire.dashboard-guru.guru.rekap-guru',[
            'title' => 'Rekap Guru - Guru'
        ]);
    }
}
