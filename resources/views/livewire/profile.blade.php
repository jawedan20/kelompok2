@section('page', 'Profile')
@section('style')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet" />
@stop

<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center header-profile">
        <i class="fas fa-user-circle fa-4x"></i>
        <div class="d-flex flex-column align-items-center">
            <p>{{ Auth::user()->name }}</p>
            <span>{{ $student->nis }}</span>
        </div>
    </div>
    <div class="body-profile d-flex flex-column">
        <div class="link-profile"></div>
        <b>Informasi Pribadi</b>
        <div class="ys">
            <label>Kelas</label>
            <p>{{ $student->kelas}}</p>
        </div>
        <div class="ys">
            <label>Eskul Krida</label>
            <p>{{ $student->eskul}}</p>
        </div>
        <div class="ys">
            <label>Alamat</label>
            <p>{{ $student->alamat }}</p>
        </div>
        <b>Pengaturan akun</b>
        <div class=" d-flex justify-content-between ys">
            <div>
                <label>Email</label>
                <p>
                    {{ Auth::user()->email}}
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-between ys">
            <div>
                <label>Password</label>
                <p>
                    &#9679 &#9679 &#9679 &#9679 &#9679 &#9679 &#9679
                </p>
            </div>
            <button wire:click="edit({{Auth::user()->id}})">Edit</button>
        </div>
    </div>
</div>