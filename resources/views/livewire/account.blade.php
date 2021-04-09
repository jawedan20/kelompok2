<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <form wire:submit.prevent="save">
                            <div class="form-group row">
                                <label for="nis" class="col-md-4 col-form-label text-md-right">Nis</label>

                                <div class="col-md-6">
                                    <input wire:model="nis" id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>

                                <div class="col-md-6">
                                    <input wire:model="kelas" id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Eskul</label>

                                <div class="col-md-6">
                                    <select wire:model="eskul" class="form-control">
                                        <option selected></option>
                                        <option value="Pramuka">Pramuka</option>
                                        <option value="Pmr">Pmr</option>
                                        <option value="Paskibra">Paskibra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">alamat</label>

                                <div class="col-md-6">
                                    <input wire:model="alamat" type="text" class="form-control @error('eskul') is-invalid @enderror" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>