<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Candidates;
use Illuminate\Support\Facades\Storage;

class Candidate extends Component
{
    use WithFileUploads;
    public $idVote, $nama, $kelas, $visi, $misi, $foto, $candidateId;
    private $candidates;

    public function mount($idVote)
    {
        $this->idVote = $idVote;
        $this->candidates = Candidates::where('id_vote', '=', $idVote)->get();
    }
    public function render()
    {
        return view('livewire.admin.candidate', [
            'candidates' => $this->candidates,
            'idVote' => $this->idVote,
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
        $imageName = md5($this->foto . microtime() . '.' . $this->foto->extension());

        Storage::putFileAs(
            'public/foto',
            $this->foto,
            $imageName
        );

        Candidates::updateOrCreate(['id' => $this->candidateId], [
            'nama' => $this->nama,
            'kelas' => $this->kelas,
            'visi' => $this->visi,
            'misi' => $this->misi,
            'foto' => $imageName,
            'id_vote' => $this->idVote
        ]);
        session()->flash('message', 'Post successfully updated.');
        
        return redirect()->to("/admin/evoting/$this->idVote");
    }
    public function delete($id)
    {
        Candidates::find($id)->delete();
        return redirect()->to("/admin/evoting/$this->idVote");
    }
}
