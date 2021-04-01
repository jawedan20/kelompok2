@section('page', 'Event')

<div class="mt-3">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage events</h6>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between py-2">
                <button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
                <div class="input-group text-center" style="width: 200px;">
                    <input type="text" class="form-control">
                    <button class="btn btn-outline-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="border-bottom: 1px solid #e1e1e1; color:#a1a4ab; font-size: 1rem; font-weight: 600;">
                            <td scope="col">No</td>
                            <td scope="col">Kegiatan</td>
                            <td scope="col">Waktu</td>
                            <td scope="col">Status</td>
                            <td scope="col">Keterangan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="color:#a1a4ab; font-size:1rem; font-weight: 100;">
                            <td scope="col">1</td>
                            <td scope="col">upacara</td>
                            <td scope="col">20 agustus 2003</td>
                            <td scope="col">belum terlaksana</td>
                            <td scope="col">-</td>
                            <td scope="col" class="text-center"><i class="far fa-trash-alt fa-lg text-danger" style="cursor:pointer;"></i><i style="cursor:pointer;" class="ml-2 far fa-edit fa-lg text-warning"></i></td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>