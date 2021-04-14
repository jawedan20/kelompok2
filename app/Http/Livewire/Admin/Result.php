<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Candidates;
use App\Models\StudentsVotes;
use App\Models\User;


class Result extends Component
{
    public $studentsVotes, $candidates;
    public function mount($idVote)
    {
        $this->candidates = Candidates::where('id_vote', $idVote)->get();
        $this->studentsVotes = StudentsVotes::where('id_vote', $idVote)->select(StudentsVotes::raw('count(id_candidate) as vote'))->groupBy('id_candidate')->get();
    }

    public function render()
    {
        $sum= User::select(User::raw('count(id) as total'))->get();
        print_r(json_decode($this->studentsVotes));
        die;
        return view('livewire.admin.result', [
            'candidates' => $this->candidates,
            'votes' => $this->studentsVotes,
            'sum' => $sum,
        ]);
    }
}
