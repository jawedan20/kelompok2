<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        $student = Students::where('userId', Auth::user()->id)->first();
        $newVotes = DB::select('SELECT votes.id, votes.`event`, votes.`status`, votes.date, votes.created_at, votes.updated_at FROM votes WHERE id NOT IN (SELECT DISTINCT id_vote FROM vote_students WHERE id_students =' . $student->id . ')');
        return view('livewire.dashboard', [
            'newVotes' => $newVotes,
        ]);
    }
}
