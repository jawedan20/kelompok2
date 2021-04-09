<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Candidates;

class TableVote extends Component
{   
    use WithFileUploads;
    public $nama, $kelas, $visi, $misi, $foto, $candidateId;

    public function render()
    {
        $candidate = Candidates::get();
        return view('livewire.admin.table-vote',[
            'candidates' => $candidate,
        ]);
    }

    public function addCandidate()
    {
        $this->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'image|max:2024',
        ]);
        $this->foto->store('foto');
        Candidates::updateOrCreate(['id' => $this->candidateId], [
            'nama' => $this->nama,
            'kelas' => $this->kelas,
            'visi' => $this->visi,
            'misi' => $this->misi,
            'foto' => $this->foto,
        ]);
    }
}
