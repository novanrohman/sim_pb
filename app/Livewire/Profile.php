<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $i=("4");
        // dd($i);
        return view('livewire.profile', compact('i'));
    }
}
