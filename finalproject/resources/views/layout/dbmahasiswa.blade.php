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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <div class="row justify-content-center">
   <div class="col-6 me-2">
    <div style="width:600px;">
    @if (session()->get('success'))
                <div class=" mt-3 alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
              <form method = "GET" action="{{url('showdataM')}}">
              <input type="text" name="keyword">
              <div class="btn btn-primary" type="submit">Search</div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Foto</th>
                        <th scope="col">No telepon</th>
                        <th scope="col">Angkatan</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($base as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->nim}}</td>
                            <td>{{$row->alamat}}</td>
                            <td>
                            <img src="{{asset('images/'.$row->filename)}}" alt="" style="width:40px;">
                            </td>
                            <td>{{$row->NoTelepon}}</td>
                            <td>{{$row->Angkatan}}</td>
                            <td colspan="2">
                            <a  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$row->id}}">
                                    Update
                                </a>
            
                                <a type="button" href="/deleteD/{{$row->id}}"class="btn btn-warning mt-2" onclick="return confirm('Yakin hapus data?')">Deleted</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{$base->links()}}
            </div>
        </div>
    </div>
    
    @foreach ($base as $row)
    <div class="modal fade" id="exampleModal-{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Update form</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/editM/{{ $row->id }}" method="post">
                    @csrf
                    <div class="mb-3"><input type="text" name="nama" placeholder="nama"value="{{$row->nama}}">
                </div>
                  <div class="mb-3">
                  <input type="text" name="nim" placeholder="nim"value="{{$row->nim}}"></div>
                  <div class="mb-3">
                  <input type="text" name="alamat" placeholder="alamat"value="{{$row->alamat}}"></div>
                  <div class="mb-3">
                  <input type="text" name="Angkatan" placeholder="angkatan"value="{{$row->Angkatan}}"></div>
                  <div class="mb-3">
                  <input type="text" name="NoTelepon" placeholder="alamat"value="{{$row->NoTelepon}}"></div>
                  <div class="mb-3">
                  <input type="file" name="filename"value="{{$row->filename}}"></div>
                  </div>
                  <div>
                    <img src="{{asset('images/'.$row->image)}}" alt="" style="width:40px;">
</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class ="btn btn-primary">Update</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
@endsection




