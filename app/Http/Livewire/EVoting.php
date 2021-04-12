<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Votes;

class EVoting extends Component
{
    public function render()
    {
        return view('livewire.e-voting',[
            'votes' => Votes::get(),
        ]);
    }
}
