@extends('admin.templates.content')

@section('content')

    <h1 class="h3 mb-2 text-gray-800">All News</h1>
    <p class="mb-4">Halaman ini berisi semua berita, baik berita yang sudah rilis maupun yang belum rilis.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">News Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <!--<th>Penulis</th>-->
                        <th>Status</th>
                        <th>Dibuat</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    @foreach(App\news::all() as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->judul }}</td>
                        <!--<td>Haikal</td>-->
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#detailModal{{$data->id_berita}}" class="detailberita btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                            <a href="/news_data/delete/{{$data->id_berita}}" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Hapus</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal-->
                    <div class="modal fade" id="detailModal{{$data->id_berita}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Berita</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <text>{{$data->isi}}</text>
                                    <!-- isi modal -->
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a href="/news_data/publish/{{$data->id_berita}}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Publish</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

