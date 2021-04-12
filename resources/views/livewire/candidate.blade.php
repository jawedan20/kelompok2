@section('page', 'Candidates')
@section('style')
<link href="{{ asset('css/evoting.css') }}" rel="stylesheet" />
@stop
<div>
    <div class="card shadow mt-3 mb-5 vote">
        <div class="card-header">
            <p class="title">Title</p>
        </div>
        <div class="card-body">
            <div class="d-flex">
                Status :
                <p class="status">pending</p>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($candidates as $candidate)
                    <div class="col-xl-3 mb-2">
                        <div class="card" style="width: 12rem;">
                            <div class="vote">
                                <img height="150px" src="{{asset('storage/foto/'.$candidate -> foto)}}" class="card-img-top" alt="foto kandidat">
                                <a style="position:absolute; left:35%; top:25%;" class="vote-btn btn btn-primary">Vote</a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{$candidate -> nama}}</h5>
                                <h5 class="card-title">{{$candidate -> kelas}}</h5>
                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="exampleModal" style="font-size: 1rem;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content d-flex flex-row ">
                <div class="modal-header">
                    <img src="{{asset('img/pmr.png')}}" class="card-img-top" alt="...">
                </div>
                <div class="modal-body">
                    <div class="form-group d-flex justify-content-center align-items-center">
                        <label class="col-md-4 col-form-label text-md-right">Kegiatan</label>

                        <div class="col-md-6">
                            <input type="text" wire:model="kegiatan" class="form-control">
                            @error('kegiatan') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center align-items-center">
                        <label class="col-md-4 col-form-label text-md-right">Waktu</label>

                        <div class="col-md-6">
                            <input type="date" wire:model="waktu" class="form-control">
                            @error('waktu') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center align-items-center">
                        <label class="col-md-4 col-form-label text-md-right">Status</label>

                        <div class="col-md-6">
                            <select wire:model="status" class="form-control">
                                <option selected></option>
                                <option value="selesai">Terlaksana</option>
                                <option value="belum">Belum Terlaksana</option>
                                <option value="batal">Batal</option>
                            </select>
                            @error('status') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>