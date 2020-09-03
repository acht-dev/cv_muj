@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tambah Data Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Product</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Product</h3>
            </div>
            <form role="form" method="POST" action="/addproduct/store">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Product</label>
                                <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="number" name="harga_jual" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="number" name="harga_beli" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <center>
                        <h4>Pilih Spesifikasi Untuk Product</h4>
                    </center>
                    @foreach ($dataSpek as $data)
                        <div class="form-group">
                            <input type="checkbox" name="dataspesifikasi[]" value="{{ $data->facilmast_id  }}"/>
                            <label for="checkbox">{{ $data->facilmast_name }}</label>
                            <label for="checkbox">{{ $data->facilmast_desc }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                </div>
            <form>
        </div>
    </div>
</div>
@endsection