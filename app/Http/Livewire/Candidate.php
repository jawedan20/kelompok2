<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Candidates;

class Candidate extends Component
{
    private $candidates;

    public function mount($idVote)
    {
        $this->candidates = Candidates::where('id_vote', '=', $idVote)->get();
    }
    public function render()
    {
        return view('livewire.candidate', [
            'candidates' => $this->candidates,
        ]);
    }
}
