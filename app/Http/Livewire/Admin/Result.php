<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Candidates;
use App\Models\StudentsVotes;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class Result extends Component
{
    public $result;
    public $idVote;
    public function mount($idVote)
    {
        $this->idVote = $idVote;
        $this->result = StudentsVotes::join('candidates', 'candidates.id', '=', 'vote_students.id_candidate')
            ->where('vote_students.id_vote', $idVote)
            ->selectRaw('candidates.id, candidates.nama, COUNT(candidates.id) as vote')
            ->groupBy('candidates.id')
            ->get();
    }

    public function render()
    {
        $sum = User::select(User::raw('count(id) as total'))->get();
        $sudahPilih = StudentsVotes::where('id_vote', $this->idVote)->count();
        return view('livewire.admin.result', [
            'results' => $this->result,
            'sum' => $sum,
            'sudahPilih' => $sudahPilih,
        ]);
    }
}
