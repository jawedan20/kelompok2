<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Votes;
use App\Models\StudentsVotes;
use Illuminate\Support\Facades\Auth;

class EVoting extends Component
{
    public function render()
    {
        $votes = Votes::get();
        $json = json_decode($votes);
        $voted = StudentsVotes::where('id_students', Auth::user()->id)->get();
        foreach ($json as $vote) {
            foreach (json_decode($voted) as $key => $voteValue) {
                if ($vote->id == $voteValue->id_vote) {
                    $vote->voted = true;
                    unset($voted[$key]);
                    break;
                } else {
                    $vote->voted = false;
                }
            }
        }
        return view('livewire.e-voting', [
            'votes' => $json,
        ]);
    }
}
