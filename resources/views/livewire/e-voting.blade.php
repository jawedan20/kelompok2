@section('page', 'E-Voting')
@section('style')
<link href="{{ asset('css/evoting.css') }}" rel="stylesheet" />
@stop
<div>
    <div class="card shadow mb-4 vote">
        <div class="card-body d-flex flex-column align-items-center mt-3">
            <img src="{{ asset('img/empty.svg') }}" alt="svg" class="svg">
            <p class="py-3 mt-4 text-secondary" style="font-size:1.5rem; font-family:sans-serif;">Tidak ada Event Pemilihan</p>
        </div>
    </div>
</div>