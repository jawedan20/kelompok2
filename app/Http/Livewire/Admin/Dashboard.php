<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;

use App\Models\Votes;
use App\Models\Events;
use App\Models\User;

class Dashboard extends Component
{
    
    public function render()
    {
        $sum = User::select(User::raw('count(id) as total'))->get();
        return view('livewire.admin.dashboard',[
            'votes' => Votes::get(),
            'events' => Events::get(),
            'sum' => $sum,
        ]);
    }
}
