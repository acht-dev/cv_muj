@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tambah Data Customer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Customer</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Customer</h3>
            </div>
            <form role="form" method="POST" action="/tambahDataCustomer">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nama_cust" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Perusahaan Customer</label>
                    <select name="cust_comp" class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      @foreach ($data as $i)
                      <option value="{{$i->comp_id}}">{{$i->comp_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat Customer</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="ex: perusahaan bergerak dibidang..."></textarea>
                    {{-- <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="ex: perusahaan bergerak dibidang..."> --}}
                </div>
                <div class="form-group">
                    <label>No. Telepon Customer</label>
                    <input type="text" name="no_tel_cust" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                  </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection