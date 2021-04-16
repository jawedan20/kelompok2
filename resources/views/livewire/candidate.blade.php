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
                    @if($candidates)
                    @foreach($candidates as $candidate)
                    <div class="col-xl-3 mb-3">
                        <div class="card" style="width: 12rem;">
                            <div class="vote">
                                <img height="150px" src="{{asset('storage/foto/'.$candidate -> foto)}}" class="card-img-top" alt="foto kandidat">
                                <a wire:click="vote({{$candidate->id}})" style="position:absolute; left:35%; top:25%;" class="vote-btn btn btn-primary">Vote</a>
                            </div>
                            <div class="card-body text-center">
                                <h5 style="margin-bottom: 5px;" class="card-title">{{$candidate -> nama}}</h5>
                                <h5 class="card-title">{{$candidate -> kelas}}</h5>
                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="exampleModal" style="font-size: 1rem;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content d-flex flex-row ">
                <div class="modal-header">
                    <img src="{{asset('storage/foto/'.$candidates[0] -> foto)}}" class="card-img-top" alt="...">
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div>

</div>