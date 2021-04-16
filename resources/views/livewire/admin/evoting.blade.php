@section('page', 'E-voting')
@section('style')
<link rel="stylesheet" href="{{ asset('css/evoting-admin.css') }}">
@stop
<div class="container mt-3">
    <div class="row justify-content-center">

    </div>
    <div>
        <div class="mb-4">
            <div class="card shadow">
                <div class="card-body table-responsive">
                    <div class="d-flex justify-content-between py-2">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="input-group text-center" style="width: 200px;">
                            <input wire:model="search" type="text" placeholder="Search..." class="form-control form-control-sm">
                        </div>
                    </div>
                    <table class="text-center table table-borderless ">
                        <tr style="color:#a1a4ab;border-bottom: 1px solid #e1e1e1; font-weight: 600; font-size:1rem;">
                            <td scope="col" style="width: 5%;">No</td>
                            <td scope="col" style="width: 30%;">Events</td>
                            <td scope="col" style="width: 10%;">status</td>
                            <td scope="col" style="width: 20%;">Date</td>
                            <td scope="col" style="width: 20%;">aksi</td>
                            <td scope="col" style="width: 20%;"></td>
                        </tr>
                        @foreach($votes as $index=>$vote)
                        <tr style="color:#a1a4ab; font-weight: 100; font-size:0.8rem;">
                            <td>{{ $index+1 }}</td>
                            <td style="max-width: 10px;">{{ $vote->event }}</td>
                            <td>{{ $vote->status }}</td>
                            <td>{{ $vote->date }}</td>
                            <td>
                                @if($vote->status == 'pending')
                                <a wire:click="setStatus({{$vote->id}}, 'ongoing')" class="btn btn-sm btn-success">Start</a>
                                <a wire:click="setStatus({{$vote->id}}, 'cancel')" class="btn btn-sm btn-outline-success">Cancel</a>
                                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
                                @elseif($vote->status == 'ongoing')
                                <a wire:click="setStatus({{$vote->id}}, 'closed')" class="btn  btn-sm btn-outline-danger">Close</a>
                                @else
                                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($vote->status == 'pending')
                                <a class="btn btn-sm btn-outline-primary" href="/admin/evoting/{{$vote->id}}">Options</a>
                                @else
                                <a href="/admin/result/{{$vote->id}}" class="btn btn-sm btn-primary">result</a>
                                @endif
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
                                            <button type="button" wire:click.prevent="delete({{ $vote->id }})" class="btn btn-danger close-modal" data-dismiss="modal">Iyah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <form wire:submit.prevent="addVotes">
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
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label class="col-md-4 col-form-label text-md-right">Events</label>

                                <div class="col-md-6">
                                    <input wire:model="event" type="text" class="form-control form-control-sm">
                                    @error('event') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label class="col-md-4 col-form-label text-md-right">Date</label>

                                <div class="col-md-6">
                                    <input wire:model="date" type="date" class="form-control">
                                    @error('date') <small class="text-danger">{{$message}}</small>@enderror
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