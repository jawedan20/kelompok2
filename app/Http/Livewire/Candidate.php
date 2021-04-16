<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\StudentsVotes;
use App\Models\Students;
use App\Models\Candidates;
use Illuminate\Support\Facades\Auth;


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

    public function vote($idCandidate)
    {
        $student = Students::where('userId', Auth::user()->id)->first();
        $result = StudentsVotes::create([
            'id_vote' => $this->idVote,
            'id_students' => $student->id,
            'id_candidate' => $idCandidate,
        ]);
        return redirect()->to('/evoting');
    }
}
