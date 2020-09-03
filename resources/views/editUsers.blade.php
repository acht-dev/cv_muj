@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Data User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data User</li>
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
                <h3 class="card-title">Edit Data User</h3>
            </div>
            <form role="form" method="POST" action="/user/update/{{$detailUser->user_id}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Depam</label>
                  <input type="text" name="nama_depan" value="{{$detailUser->user_firstname}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input type="text" name="nama_belakang" value="{{$detailUser->user_lastname}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                        <input type="text" name="join_date" value="{{$detailUser->user_jointdate}}" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>NIK Pegawai</label>
                    <input type="text" name="nik" value="{{$detailUser->user_nik}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>No. Telepon Useres</label>
                    <input type="text" name="no_telp" value="{{$detailUser->user_phone}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Email Users</label>
                    <input type="email" name="email" value="{{$detailUser->user_email}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Username Users</label>
                    <input type="text" name="username" value="{{$detailUser->user_name}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Password Users</label>
                    <input type="password" name="password" value="{{$detailUser->user_password}}" class="form-control" id="exampleInputEmail1" placeholder="position name...">
                </div>
                <div class="form-group">
                    <label>Perusahaan Users</label>
                    <select name="comp_user" class="form-control select2" style="width: 100%;">
                      <option selected="selected" value="{{$getCompUser->comp_id}}">{{$getCompUser->comp_name}}</option>
                      @foreach ($getComp as $i)
                      <option value="{{$i->comp_id}}">{{$i->comp_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Role Users</label>
                    <select name="role_user" class="form-control select2" style="width: 100%;">
                      <option selected="selected" value="{{$getRoleUser->role_id}}">{{$getRoleUser->role_name}}</option>
                      @foreach ($getRole as $i)
                      <option value="{{$i->role_id}}">{{$i->role_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Posisi/Jabatan Users</label>
                    <select name="posit_user" class="form-control select2" style="width: 100%;">
                      <option selected="selected" value="{{$getPositUser->posit_id}}">{{$getPositUser->posit_name}}</option>
                      @foreach ($getPost as $i)
                      <option value="{{$i->posit_id}}">{{$i->posit_name}}</option>
                      @endforeach
                    </select>
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