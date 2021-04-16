@section('page', 'Event')
<div class="mt-3">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage events</h6>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between py-2">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                </button>
                <div class="input-group text-center" style="width: 200px;">
                    <input type="text" wire:model="search" placeholder="Search.." class="form-control form-control-sm">
                </div>
            </div>
            @if (session()->has('message'))
            <small class="d-block h6 alert alert-success">
                {{ session('message') }}
            </small>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style=" text-align:center; border-bottom: 1px solid #e1e1e1; color:#a1a4ab; font-size: 0.8rem; font-weight: 600;">
                            <td>No</td>
                            <td>Kegiatan</td>
                            <td>Waktu</td>
                            <td>Status</td>
                            <td>Keterangan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $index=>$event)
                        <tr style="text-align:center; color:#a1a4ab; font-size:0.9rem; font-weight: 100;">
                            <td>{{ $index+1 }}</td>
                            <td>{{ $event->kegiatan }}</td>
                            <td>{{ $event->waktu }}</td>
                            <td>{{ $event->status }}</td>
                            <td>{{ $event->keterangan }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash fa-sm"></i></button>
                                <button wire:click="edit( {{ $event->id}} )" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="far fa-edit fa-sm"></i>
                                </button>
                            </td>
                        </tr>

                        <div wire:ignore.self class="modal fade" id="exampleModal" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true close-btn">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p style="font-size:1rem; color:dimgray;">Apakah anda yakin untuk menghapusnya?</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Tidak</button>
                                            <button type="button" wire:click.prevent="delete({{ $event->id }})" class="btn btn-danger close-modal" data-dismiss="modal">Iyah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
                <div style="font-size: 0.7rem; font-weight: 1000;">
                    {{ $events->links() }}
                </div>
            </div>
        </div>

        <form wire:submit.prevent="addEvent">
            <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="font-size: 1rem;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="staticBackdropLabel">Tambah Events</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group d-flex align-items-center">
                                <label class="col-md-4 col-form-label text-md-right">Kegiatan</label>

                                <div class="col-md-6">
                                    <input wire:model="kegiatan" type="text" class="form-control form-control-sm">
                                    @error('kegiatan') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <label class="col-md-4 col-form-label text-md-right">Waktu</label>

                                <div class="col-md-6">
                                    <input wire:model="waktu" type="date" class="form-control form-control-sm">
                                    @error('waktu') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <label class="col-md-4 col-form-label text-md-right">Keterangan</label>

                                <div class="col-md-6">
                                    <textarea style="resize: none;" wire:model="keterangan" class="form-control form-control-sm"></textarea>
                                    @error('keterangan') <small class="text-danger">{{$message}}</small>@enderror
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
</div>