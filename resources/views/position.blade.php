@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Position</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Position</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <!-- /.card -->

      <div class="card">
        <div class="card-header">
            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Posisi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="/tambahDataPosisi" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nama Posisi/ Jabatan</label>
                            <input type="text" class="form-control" placeholder="Nama Posisi/ Jabatan..." name="posisi" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Role Name</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 0; ?>
              @foreach($posisi as $d)
              <?php $no++;?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d -> posit_name}}</td>
                    <td>
                      <div class="row">
                        <a href="/posisi/edit/{{$d -> posit_id}}" class="btn btn-warning" style="margin-left: 10px;">Edit</a>
                        <a href="/posisi/hapus/{{$d -> posit_id}}" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
                      </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection