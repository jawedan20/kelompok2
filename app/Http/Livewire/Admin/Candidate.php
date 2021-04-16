<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\Candidates;
use Illuminate\Support\Facades\Storage;

class Candidate extends Component
{
    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';
    private $candidates;

    public $search, $idVote, $nama, $kelas, $visi, $misi, $foto, $candidateId;
    protected $queryString = ['search'];


    public function mount($idVote)
    {
        $this->idVote = $idVote;
    }
    public function render()
    {
        $this->candidates = Candidates::where('id_vote', $this->idVote)->get();
        if ($this->search !== null) {
            $this->candidates = Candidates::where('nama', 'like', '%' . $this->search . '%')->paginate(5);
        }
        return view('livewire.admin.candidate', [
            'candidates' => $this->candidates,
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

    public function edit($id)
    {
        $candidate = Candidates::findOrfail($id);
        $this->idVote = $id;
        $this->nama = $candidate->nama;
        $this->kelas = $candidate->kelas;
        $this->visi = $candidate->visi;
        $this->misi = $candidate->misi;
        $this->foto = $candidate->foto;
        $this->idVote = $candidate->id_vote;
    }

    public function delete($id)
    {
        Candidates::find($id)->delete();
        return redirect()->to("/admin/evoting/$this->idVote");
    }
}
