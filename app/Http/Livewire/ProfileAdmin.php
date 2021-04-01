<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.profile-admin')->layout('layouts.admin');
    }
}
