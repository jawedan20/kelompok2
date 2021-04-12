@section('page', 'E-voting')
@section('style')
<link rel="stylesheet" href="{{ asset('css/evoting-admin.css') }}">
@stop
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-md-12 mb-3">
            <div class="card c1 shadow py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah pemilih</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">872178912798</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card c2 shadow py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                sudah vote</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1287=867</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-vote-yea fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card c3 shadow py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                belum vote</div>
                            <div class="h5 mb-0 font-weight-bold">9908890</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <input type="text" class="form-control form-control-sm">
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
                                <a class="btn btn-sm btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
                                @elseif($vote->status == 'ongoing')
                                <a wire:click="setStatus({{$vote->id}}, 'closed')" class="btn  btn-sm btn-outline-danger">Close</a>
                                @else
                                <a wire:click="delete({{$vote->id}})" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($vote->status == 'pending')
                                <a class="btn btn-sm btn-outline-primary" href="/admin/evoting/{{$vote->id}}">Options</a>
                                @else
                                <a href="" class="btn btn-sm btn-primary">result</a>
                                @endif
                            </td>
                        </tr>
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