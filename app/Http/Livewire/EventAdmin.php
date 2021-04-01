<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.event-admin')->layout('layouts.admin');
    }
}
