<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Events;
use App\Models\Votes;
use App\Models\User;

class Dashboard extends Component
{
    
    public function render()
    {
        $sum = User::select(User::raw('count(id) as total'))->get();
        $sumVotes = Votes::select(User::raw('count(id) as total'))->get();
        $sumEvents = Events::select(Events::raw('count(id) as total'))->get();
        $terlaksana = Events::where('status', 'selesai')->count();
        $belum = Events::where('status', 'belum')->count();
        $pending = Votes::where('status', 'pending')->count();
        $ongoing = Votes::where('status', 'ongoing')->count();
        $closed = Votes::where('status', 'closed')->count();

        return view('livewire.admin.dashboard',[
            'sumVotes' => $sumVotes,
            'sum' => $sum,
            'sumEvents' => $sumEvents,
            'terlaksana' => $terlaksana, 
            'belum' => $belum, 
            'pending' => $pending, 
            'ongoing' => $ongoing, 
            'closed' => $closed, 
        ]);
    }
}
