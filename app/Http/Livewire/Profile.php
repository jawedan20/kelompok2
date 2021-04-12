<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public function render()
    {
        $student = Students::where('userId', Auth::user()->id)->first();

        return view('livewire.profile',[
            "student" => $student,
        ]);
    }

}
