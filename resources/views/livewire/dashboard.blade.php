@section('page', 'Dashboard')
<div class="container">
    <h2 class="text-primary" style="font-size: 1.2rem;">Selamat datang di Krida </h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;" src="{{ asset('img/voting.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 14.3rem;" src="{{ asset('img/event.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header pt-2 pb-1">
                    <p class="h6 text-primary">
                        Event Voting yang belum diikuti
                    </p>
                </div>
                <div class="card-body" style="background: #FFFFFF; padding:20px; font-size:0.8rem;">
                    <table class="table table-borderless">
                        <tr class="text-center bg-primary" style="border-bottom: 1px solid #e1e1e1; color:white; font-weight: 600;">
                            <td scope="col" style="width: 10%;">No</td>
                            <td scope="col" style="width:25%;">Events Vote</td>
                            <td scope="col" style="width: 25%;">Date</td>
                            <td scope="col" style="width: 20%;">Status</td>
                        </tr>
                        @foreach($newVotes as $index=>$newVote)
                        <tr style="text-align:center; color:#a1a4ab; font-size:0.9rem; font-weight: 100;">
                            <td>{{$index + 1}}</td>
                            <td>{{$newVote -> event}}</td>
                            <td>{{$newVote -> date}}</td>
                            <td>{{$newVote -> status}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{ url('/evoting')}}">Lihat Lebih lanjut →</a>
                </div>
            </div>
        </div>
    </div>
</div>