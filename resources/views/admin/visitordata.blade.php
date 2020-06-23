@extends('admin.templates.content')

@section('content')

    <h1 class="h3 mb-2 text-gray-800">Visitor Data</h1>
    <p class="mb-4">Halaman ini berisi data pengunjung.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    @foreach(App\userdata::all() as $data)
                        @if($data->role == 'visitor')
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->role }}</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                                </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

