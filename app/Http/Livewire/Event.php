<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Events;

class Event extends Component
{
    public $kegiatan, $waktu, $status, $keterangan;
    public function render()
    {
        $events = Events::orderBy('created_at', 'Desc')->get();
        return view('livewire.event' , [
            'events' => $events
        ]);
    }
}
