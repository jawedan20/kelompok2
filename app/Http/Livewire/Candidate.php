<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\StudentsVotes;
use App\Models\Candidates;

class Candidate extends Component
{
    public $idVote;
    private $candidates;

    public function mount($idVote)
    {
        $this->idVote = $idVote;
        $this->candidates = Candidates::where('id_vote', '=', $idVote)->get();
    }
    public function render()
    {
        return view('livewire.candidate', [
            'candidates' => $this->candidates,
        ]);
    }
    public function vote($idCandidate, $idUsers)
    {
        
        StudentsVotes::create([
            'id_vote' => $this->idVote,
            'id_students' => $idUsers,
            'id_candidate' => $idCandidate,
        ]);
        return redirect()->to('/evoting');
    }
}
