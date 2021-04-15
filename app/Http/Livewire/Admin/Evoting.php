<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Votes;
use App\Models\User;
use App\Models\Events;

use Livewire\WithPagination;

class Evoting extends Component
{
    public $event, $status, $date, $search;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public function render()
    {
        $votes = Votes::orderBy('created_at', 'Desc')->paginate(5);
        if ($this->search !== null) {
            $votes = Votes::where('event', 'like', '%' . $this->search . '%')->paginate(5);
        }
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

        Events::create([
            'kegiatan' => $this->event,
            'waktu' => $this->date,
            'status' => 'belum',
            'keterangan' => 'Silahkan Check Evoting Page'
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
