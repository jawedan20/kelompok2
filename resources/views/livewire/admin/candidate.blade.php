<div>
    <div class="mb-4">
        <div class="card shadow">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Kandidat naon</h6>
            </div>
            <div class="card-body table-responsive">
                <div class="d-flex justify-content-between py-2">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="input-group text-center" style="width: 200px;">
                        <input wire:model="search" placeholder="search.." type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <table class="text-center table table-borderless ">
                    <tr style="color:#a1a4ab;border-bottom: 1px solid #e1e1e1; font-weight: 600; font-size:1rem;">
                        <td scope="col" style="width: 5%;">No</td>
                        <td scope="col" style="width: 15%;">Nama</td>
                        <td scope="col" style="width:10%;">Kelas</td>
                        <td scope="col" style="width:23%;">Visi</td>
                        <td scope="col" width="23%">Misi</td>
                        <td scope="col" style="width: 10%;">foto</td>
                        <td scope="col" style="width: 14%;">aksi</td>
                    </tr>
                    @if($candidates)
                    @foreach($candidates as $index=>$candidate)
                    <tr style="color:#a1a4ab; font-weight: 100; font-size:0.8rem; max-width: 100%;">
                        <td>{{$index + 1}}</td>
                        <td>{{$candidate->nama}}</td>
                        <td>{{$candidate->kelas}}</td>
                        <td style="max-width: 100px; text-align: left;">{{$candidate->visi}}</td>
                        <td style="max-width: 100px; text-align: left;">{{$candidate->misi}}</td>
                        <td><img height="60px" width="80px" src="{{asset('storage/foto/'.$candidate->foto)}}" alt="iojasd"></td>
                        <td>
                            <a class="btn btn-sm btn-outline-danger"><i class="fas fa-edit fa-sm"></i></a>
                            <a wire:click="delete({{$candidate->id}})" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="addCandidate">
        <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="font-size: 1rem;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="staticBackdropLabel">Add event voting</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input wire:model="idVote" type="hidden">
                        <div class="form-group d-flex">
                            <div class="col-md-1"></div>
                            <label class="col-md-2 col-form-label">Nama</label>

                            <div class="col-md-8">
                                <input wire:model="nama" type="text" class="form-control form-control-sm">
                                @error('nama') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <div class="col-md-1"></div>
                            <label class="col-md-2 col-form-label">Kelas</label>

                            <div class="col-md-8">
                                <input wire:model="kelas" class="form-control form-control-sm">
                                @error('kelas') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <div class="col-md-1"></div>
                            <label class="col-md-2 col-form-label">Visi</label>

                            <div class="col-md-8">
                                <textarea wire:model="visi" class="form-control form-control-sm"></textarea>
                                @error('visi') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <div class="col-md-1"></div>
                            <label class="col-md-2 col-form-label">Misi</label>

                            <div class="col-md-8">
                                <textarea wire:model="misi" class="form-control form-control-sm"></textarea>
                                @error('misi') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <div class="col-md-1"></div>
                            <label class="col-md-2 col-form-label">Foto</label>

                            <div class="col-md-8">
                                <input type="file" wire:model="foto" class="form-control form-control-sm">
                                @error('foto') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>