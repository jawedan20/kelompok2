<?php

namespace App\Http\Livewire;
use Livewire\Component;

class DashboardAdmin extends Component
{
    
    public function render()
    {
        return view('livewire.admin.dashboard-admin')->layout('layouts.admin');
    }
}
