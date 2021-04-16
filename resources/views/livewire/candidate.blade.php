@section('page', 'Candidates')
@section('style')
<link href="{{ asset('css/evoting.css') }}" rel="stylesheet" />
@stop
<div>
    @if (session()->has('message'))
    <small class="d-block h6 alert alert-success">
        {{ session('message') }}
    </small>
    @endif
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
                                <a wire:click="vote( {{$candidate -> id}} )" style="position:absolute; left:35%; top:25%;" class="vote-btn btn btn-primary">Vote</a>
                            </div>
                            <div class="card-body text-center">
                                <h5 style="margin-bottom: 5px;" class="card-title">{{$candidate -> nama}}</h5>
                                <h5 class="card-title">{{$candidate -> kelas}}</h5>
                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$candidate->id}}">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div wire:ignore.self class="modal fade" id="exampleModal{{$candidate->id}}" style="font-size: 1rem;">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content d-flex flex-row ">
                                <div>
                                    <img src="{{asset('storage/foto/'.$candidate -> foto)}}" width="250px" height="300px" alt="...">
                                </div>
                                <div class="detail" style="max-height: 300px; width:500px; padding:20px 10px;">
                                    <h5>
                                        Nama :
                                    </h5>
                                    <h6 class="text-right">{{$candidate->nama}}</h6>
                                    <h5>
                                        Kelas :
                                    </h5>
                                    <h6 class="text-right">{{$candidate->kelas}}</h6>
                                    <h5>Visi : </h5>
                                    <h6 class="text-right">{{$candidate->visi}}</h6>
                                    <h5>Misi:</h5>
                                    <h6 class="text-right">{{$candidate->misi}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>


</div>