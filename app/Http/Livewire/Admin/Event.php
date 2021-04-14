<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Events;

class Event extends Component
{
    public $eventId, $kegiatan, $waktu, $status, $keterangan;
    public $search;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->status = 'belum';
    }

    public function render()
    {

        $events = Events::orderBy('created_at', 'Desc')->paginate(5);
        if ($this->search !== null) {
            $events = Events::where('kegiatan', 'like', '%' . $this->search . '%')->paginate(5);
        }
        return view('livewire.admin.event', [
            'events' => $events,
        ]);
    }

    public function addEvent()
    {
        $this->validate([
            'kegiatan' => 'required',
            'waktu' => 'required',
            'keterangan' => 'required',
        ]);

        Events::updateOrCreate(['id' => $this->eventId], [
            'kegiatan' => $this->kegiatan,
            'waktu' => $this->waktu,
            'status' => $this->status,
            'keterangan' => $this->keterangan,
        ]);
        
        session()->flash('message', 'Post successfully updated.');
        return redirect()->to('/admin/event');

        $this->kegiatan = "";
        $this->waktu = "";
        $this->status = "belum";
        $this->keterangan = "";
    }

    public function edit($id)
    {
        $event = Events::findOrfail($id);
        $this->eventId = $id;
        $this->kegiatan = $event->kegiatan;
        $this->waktu = $event->waktu;
        $this->status = $event->status;
        $this->keterangan = $event->keterangan;
    }

    public function delete($id)
    {
        Events::find($id)->delete();
    }
}
