<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Votes;
class EvotingAdmin extends Component
{
    public $event, $status, $date;

    public function render()
    {
        $votes = Votes::get();
        return view('livewire.admin.evoting-admin', [
            'votes' => $votes,
        ]);
    }

    public function addCandidate()
    {
        $this->validate([
            'event' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);

        Votes::create([
            'event' => $this->event,
            'status' => $this->status,
            'date' => $this->date,
        ]);
    }
}
