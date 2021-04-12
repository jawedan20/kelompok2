<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Votes;

class Evoting extends Component
{
    public $event, $status, $date;

    public function render()
    {
        $votes = Votes::get();
        return view('livewire.admin.evoting', [
            'votes' => $votes,
        ]);
    }

    public function addVotes()
    {
        $this->validate([
            'event' => 'required',
            'date' => 'required',
        ]);

        Votes::create([
            'event' => $this->event,
            'status' => 'pending',
            'date' => $this->date,
        ]);

        return redirect()->to('/admin/evoting');
    }
    public function setStatus($id, $status)
    {
        Votes::where('id', $id)->update([
            'status' => $status
        ]);
    }
    public function delete($id)
    {
        Votes::find($id)->delete();
    }
}
