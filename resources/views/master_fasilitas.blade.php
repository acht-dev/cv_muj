@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Master Barang</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Master Barang</li>
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
            <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="/tambahfasilitas" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" class="form-control" id="exampleInputEmail1" placeholder="Nama Fasilitas..." required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan..."></textarea>
                        {{-- <input type="text" name="alamat1" class="form-control" id="exampleInputEmail1" placeholder="Alamat Perusahaan..."> --}}
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Fasilitas</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                @foreach($getData as $d)
                <?php $no++;?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->facilmast_name}}</td>
                    <td>{{$d->facilmast_desc}}</td>
                    <td>
                      <div class="row">
                        <a href="/masterFasilitas/edit/{{$d->facilmast_id }}" class="btn btn-warning" style="margin-left: 10px;">Ubah</a>
                        <a href="/masterFasilitas/hapus/{{$d->facilmast_id }}" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
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