<div>
    <div class="mb-4">
        <div class="card shadow">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Kandidat naon</h6>
            </div>
            <div class="card-body table-responsive">
                <div class="d-flex justify-content-between py-2">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="input-group text-center" style="width: 200px;">
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <table class="text-center table table-borderless ">
                    <tr style="color:#a1a4ab;border-bottom: 1px solid #e1e1e1; font-weight: 600; font-size:1rem;">
                        <td scope="col" style="width: 5%;">No</td>
                        <td scope="col" style="width: 20%;">Nama</td>
                        <td scope="col" style="width:10%;">Kelas</td>
                        <td scope="col" style="width:25%;">Visi</td>
                        <td scope="col" width="30%">Misi</td>
                        <td scope="col" style="width: 10%;">foto</td>
                    </tr>
                    <tr style="color:#a1a4ab; font-weight: 100; font-size:0.8rem;">
                        <td>10</td>
                        <td>Muhammad Jawahiruzzaman</td>
                        <td>XI Rpl 2</td>
                        <td>

                            kjasdhioashlodashalsdhlasdhasdhalsdsajksadjks
                            lisadjhlodasskldahsdaklshdaksda
                            2klasdjnasddsa
                            4klasdjp
                        </td>
                        <td>1.aslkjnasp
                            2lksajpoasdj
                            3l;dmkas
                        </td>
                        <td>foto</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Perolehan Suara</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">kandidat 1<span class="float-right">20%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">kandidat 2 <span class="float-right">40%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="addCandidate">
        <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="font-size: 1rem;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="staticBackdropLabel">Tambah Kandidat</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input wire:model="nama" type="text" class="form-control form-control-sm">
                                @error('nama') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label class="col-md-4 col-form-label text-md-right">Kelas</label>

                            <div class="col-md-6">
                                <input type="text" wire:model="kelas" class="form-control form-control-sm">
                                @error('kelas') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label class="col-md-4 col-form-label text-md-right">Visi</label>

                            <div class="col-md-6">
                                <textarea wire:model="visi" rows="3" style="resize: none;" class="form-control form-control-sm"></textarea>
                                @error('visi') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label class="col-md-4 col-form-label text-md-right">Misi</label>

                            <div class="col-md-6">
                                <textarea wire:model="misi" rows="4" style="resize: initial; " class="form-control form-control-sm" rows="3"></textarea>
                                @error('misi') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label class="col-md-4 col-form-label text-md-right">Misi</label>

                            <div class="col-md-6">
                                <input wire:model="foto" style="border:none;" class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>