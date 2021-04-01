@section('page', 'Events')
<div style="background: #FFFFFF; padding:20px; font-size:0.8rem;">
    <table class="table table-borderless">
        <tr style="border-bottom: 1px solid #e1e1e1; color:#a1a4ab; font-weight: 600;">
            <td scope="col">No</td>
            <td scope="col">Kegiatan</td>
            <td scope="col">Waktu</td>
            <td scope="col">Status</td>
            <td scope="col">Keterangan</td>
        </tr>
        <tr>
            <td class="py-4 text-center" colspan="5">
                <img src="{{asset('img/nunggu.svg')}}" alt="svg" width="350px">
                <p class="py-4 text-secondary font-weight-light" style="font-size: 1.2rem;">Belum ada kegiatan Jadwal kegiatan</p>
            </td>
        </tr>
    </table>
</div>