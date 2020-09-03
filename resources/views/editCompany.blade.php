@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tambah Data Perusahaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update Data Perusahaan</li>
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
                <h3 class="card-title">Update Data Perusahaan</h3>
            </div>
            <form role="form" method="POST" action="/dataCompany/Update/{{$dataComp->comp_id}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" value="{{$dataComp->comp_name}}" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Perusahaan</label>
                                <textarea name="keterangan" class="form-control" rows="3" placeholder="ex: perusahaan bergerak dibidang...">{{$dataComp->comp_datail}}"</textarea>
                                {{-- <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="ex: perusahaan bergerak dibidang..."> --}}
                            </div>
                            <div class="form-group">
                                <label>Alamat Perusahaan</label>
                                <textarea name="alamat1" class="form-control" rows="3" placeholder="Alamat Perusahaan..." required>{{$dataComp->comp_address}}</textarea>
                                {{-- <input type="text" name="alamat1" class="form-control" id="exampleInputEmail1" placeholder="Alamat Perusahaan..."> --}}
                            </div>
                            <div class="form-group">
                                <label>Alamat ke-2 Perusahaan(opsional)</label>
                                <textarea name="alamat2" class="form-control" rows="3" placeholder="Alamat Perusahaan...">{{$dataComp->comp_address2}}</textarea>
                                {{-- <input type="text" name="alamat2" class="form-control" id="exampleInputEmail1" placeholder="Alamat Perusahaan..."> --}}
                            </div>
                            <div class="form-group">
                                <label>Email Perusahaan</label>
                                <input type="email" value="{{$dataComp->comp_email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="ex:company@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label>No. Telepon Perusahaan</label>
                                <input type="text" name="telepon" value="{{$dataComp->comp_phone}}" class="form-control" id="exampleInputEmail1" placeholder="ex:08172612613" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NPWP Perusahaan</label>
                                <input type="text" name="npwp" value="{{$dataComp->comp_npwp}}" class="form-control" id="exampleInputEmail1" placeholder="ex: 123129812321" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Bank</label>
                                <input type="text" name="nama_bank" value="{{$dataRek->bank_name}}" class="form-control" id="exampleInputEmail1" placeholder="ex: Mandiri" required>
                            </div>
                            <div class="form-group">
                                <label>No. Rekening Bank</label>
                                <input type="text" name="norek_bank" value="{{$dataRek->bank_no_rek}}" class="form-control" id="exampleInputEmail1" placeholder="ex: 1231231xxx" required>
                            </div>
                            <div class="form-group">
                                <label>Atas Nama Pemilik Rekening Bank</label>
                                <input type="text" name="an_bank" value="{{$dataRek->bank_an}}" class="form-control" id="exampleInputEmail1" placeholder="ex: maman suherman" required>
                            </div>
                            <div class="form-group">
                                <label>Cabang Bank</label>
                                <input type="text" name="cabang_bank" value="{{$dataRek->bank_branch}}" class="form-control" id="exampleInputEmail1" placeholder="ex: cabang bekasi barat" required>
                            </div>
                        </div>
                    </div>
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