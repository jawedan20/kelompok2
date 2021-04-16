<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Votes;
use App\Models\StudentsVotes;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;

class EVoting extends Component
{
    public function render()
    {
        $votes = Votes::get();
        $json = json_decode($votes);
        $student = Students::where('userId', Auth::user()->id)->first();
        $voted = StudentsVotes::where('id_students', $student->id)->get();
        foreach ($json as $vote) {
            $vote->voted = false;
            foreach (json_decode($voted) as $key => $voteValue) {
                if ($vote->id == $voteValue->id_vote) {
                    $vote->voted = true;
                    unset($voted[$key]);
                    break;
                }
            }
        }
        return view('livewire.e-voting', [
            'votes' => $json,
        ]);
    }
}
