@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row  justify-content-center">
         <div class="col-6">
      <div class="container card ">
        <h4 class="text-center">Registration form</h4>
        @if (session()->get('success'))
                <div class=" mt-3 alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
        <form action="/insert" method="GET" enctype="">
            <div class="mb-3">
                <input type="text" placeholder="nama" name='nama' class="form-control" required>
              </div>
              <div class="mb-3">
                <input type="text" placeholder="nim" name='nim' class="form-control" required >
              </div>
              <div class="mb-3">
                <input type="text" placeholder="Tahun Masuk" name='Angkatan' class="form-control" required>
              </div>
              <div class="mb-3">
                <input type="text" placeholder="alamat" name='alamat' class="form-control" >
              </div>
              <div class="mb-3">
                <input type="text" placeholder="No telepon" name='NoTelepon' class="form-control" >
              </div>
              <div class="mb-3">
                <input type="file"  name='filename' class="form-control" >
              </div>
              <button type="submit" onclick="return confirm('Yakin ingin menambah data?')" class="btn btn-primary mb-2">Submit</button>
        </div>
    </div>
@endsection




