@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Data Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Master</li>
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
                <h3 class="card-title">Edit Data Master</h3>
            </div>
            <form role="form" method="POST" action="/masterFasilitas/update/{{$getData->facilmast_id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" value="{{$getData->facilmast_name}}" name="nama_fasil" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Alamat Customer</label>
                    <textarea name="ket" class="form-control" rows="3" placeholder="ex: perusahaan bergerak dibidang...">{{$getData->facilmast_desc}}</textarea>
                    {{-- <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="ex: perusahaan bergerak dibidang..."> --}}
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