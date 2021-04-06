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
</div>