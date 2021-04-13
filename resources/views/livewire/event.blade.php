@section('page', 'Events')

<div class="shadow mt-3" style="background: #FFFFFF; padding:20px; font-size:0.8rem;">
    <table class="text-center table table-borderless ">
        <tr class="bg-primary" style="border-bottom: 1px solid #e1e1e1; color:white; font-weight: 600;">
            <td scope="col" style="width: 20px;">No</td>
            <td scope="col">Kegiatan</td>
            <td scope="col">Waktu</td>
            <td scope="col">Status</td>
            <td scope="col" style="max-width: 10px;">Keterangan</td>
        </tr>
        @if(!$events)
        @foreach($events as $index=>$event)
        <tr style="text-align:center; color:#a1a4ab; font-size:0.9rem; font-weight: 100;">
            <td>{{$index + 1}}</td>
            <td>{{$event->kegiatan}}</td>
            <td>{{$event->waktu}}</td>
            <td>{{$event->status}}</td>
            <td>{{$event->keterangan}}</td>
        </tr>
        @endforeach
        @else
        <tr class="mt-5">
            <td class="text-center" colspan="5">
                <img src="{{asset('img/nunggu.svg')}}" alt="svg" width="350px">
                <p class="py-4 text-secondary font-weight-light" style="font-size: 1.2rem;">Belum ada kegiatan Jadwal kegiatan</p>
            </td>
        </tr>
        @endif
    </table>
</div>