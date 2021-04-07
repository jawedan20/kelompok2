<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EvotingAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.evoting.evoting-admin')->layout('layouts.admin');
    }
}
