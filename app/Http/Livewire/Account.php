<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Students;
use Illuminate\Support\Facades\Auth;

class Account extends Component
{
    public $nis, $kelas, $eskul, $alamat;
    public function render()
    {
        return view('livewire.account')->extends('layouts.auth');;
    }

    public function save()
    {
        $user = Auth::user()->id;
        $this->validate([
            'nis' => 'required',
            'kelas' => 'required',
            'eskul' => 'required',
            'alamat' => 'required',
        ]);

        Students::create([
            'nis' => $this->nis,
            'kelas' => $this->kelas,
            'eskul' => $this->eskul,
            'alamat' => $this->alamat,
            'userId' => $user
        ]);
        return redirect()->to('/dashboard');

    }
}
