@section('page', 'Dashboard')
@section('style')
<link rel="stylesheet" href="{{ asset('css/evoting-admin.css') }}">
@stop
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-md-12 mb-3">
            <div class="card c1 shadow py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                total anggota</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sum[0]->total }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Evoting</h6>
                </div>
                <div class="card-body table-responsive">
                    <table class="text-center table table-borderless ">
                        <tr style="color:#a1a4ab;border-bottom: 1px solid #e1e1e1; font-weight: 600; font-size:1rem;">
                            <td scope="col" style="width: 5%;">No</td>
                            <td scope="col" style="width: 30%;">Events</td>
                            <td scope="col" style="width: 10%;">status</td>
                            <td scope="col" style="width: 20%;">Date</td>
                        </tr>
                        @foreach($votes as $index=>$vote)
                        <tr style="color:#a1a4ab; font-weight: 100; font-size:0.8rem;">
                            <td>{{ $index+1 }}</td>
                            <td>{{ $vote->event }}</td>
                            <td>{{ $vote->status }}</td>
                            <td>{{ $vote->date }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style=" text-align:center; border-bottom: 1px solid #e1e1e1; color:#a1a4ab; font-size: 0.8rem; font-weight: 600;">
                                <td>No</td>
                                <td>Kegiatan</td>
                                <td>Waktu</td>
                                <td>Status</td>
                                <td>Keterangan</td>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>