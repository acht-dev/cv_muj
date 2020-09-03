@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">product</li>
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
            <a href="/addproduct" class="btn btn-success">Tambah Produk</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Product</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 0; ?>
              @foreach($data as $d)
              <?php $no++;?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->product_name}}</td>
                    <td>{{$d->product_buy_price}}</td>
                    <td>{{$d->product_sale_price}}</td>
                    <td>
                      <div class="row">
                        {{-- <a href="" class="btn btn-primary" style="margin-left: 10px;">Lihat</a> --}}
                        <a href="/product/hapus/{{$d->product_id }}" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
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