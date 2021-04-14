@section('page', 'E-Voting')
<div>
    <div class="shadow mt-3" style="background: #FFFFFF; padding:20px; font-size:0.8rem;">
        <table class="text-center table table-borderless ">
            <tr class="bg-primary" style="border-bottom: 1px solid #e1e1e1; color:white; font-weight: 600;">
                <td scope="col" style="width: 10%;">No</td>
                <td scope="col" style="width:25%;">Events Vote</td>
                <td scope="col" style="width: 25%;">Date</td>
                <td scope="col" style="width: 20%;">Status</td>
                <td scope="col" style="width: 20%;"></td>
            </tr>
            @if($votes)
            @foreach($votes as $index=>$vote)
            <tr style="text-align:center; color:#a1a4ab; font-size:0.9rem; font-weight: 100;">
                <td>{{$index + 1}}</td>
                <td>{{$vote -> event}}</td>
                <td>{{$vote -> date}}</td>
                <td>{{$vote -> status}}</td>
                <td>
                    @if($vote -> status == "closed")
                    <a class="btn btn-sm btn-danger">Result</a>
                    @elseif($vote -> status == "ongoing")
                    @if($vote->voted)
                    Voted
                    @else
                    <a href="/evoting/{{$vote -> id}}" class="btn btn-sm btn-primary">Options</a>
                    @endif
                    @else
                    Waiting
                    @endif
                </td>
            </tr>
            @endforeach
            @else
            <tr class="mt-5">
                <td class="text-center" colspan="5">
                    <img src="{{asset('img/empty.svg')}}" alt="svg" width="350px">
                    <p class="py-4 text-secondary font-weight-light" style="font-size: 1.2rem;">Tidak ada Event Pemilihan</p>
                </td>
            </tr>
            @endif
        </table>
    </div>

</div>