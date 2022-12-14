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
            <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- include summernote css/js-->
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>
        <form action="/insertT" method="GET" enctype="">
            <div class="mb-3">
                <input type="text" placeholder="nama" name='namatugas' class="form-control" required>
              </div>
             <textarea class="bg-dark" name="deskripsi" id="summernote" cols="30" rows="10"></textarea>
              <div class="mb-3">
                <input type="date" placeholder="Tanggal Pembuatan" name='tanggalpembuatan' class="form-control" required>
              </div>
              <div class="mb-3">
                <input type="text" placeholder="status" name='status' class="form-control" required>
              </div>
              <button type="submit" onclick="return confirm('Yakin ingin menambah data?')" class="btn btn-primary mb-2">Submit</button>
        </div>
        
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script>
    </div>
@endsection