@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add-Ons</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">add_ons</li>
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
            <a href="/tambahAddOns" class="btn btn-success">Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Add-Ons</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 0; ?>
                @foreach($dataAddOns as $d)
                <?php $no++;?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->add_ons_name}}</td>
                    <td>{{$d->add_ons_buy_price}}</td>
                    <td>{{$d->add_ons_sale_price}}</td>
                    <td>{{$d->add_ons_ket}}</td>
                    <td>
                      <div class="row">
                        <a href="/AddOns/Edit/{{$d->add_ons_id}}" class="btn btn-warning" style="margin-left: 10px;">Edit</a>
                        <a href="/AddOns/Hapus/{{$d->add_ons_id}}" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
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