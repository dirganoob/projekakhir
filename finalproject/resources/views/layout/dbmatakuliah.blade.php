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
              <form method = "GET" action="{{url('showdataMa')}}">
              <div class="col-mt-2">
                    <label>Status</label>
                    <select class="form-control" id="">
                    <option value="">Pilih status</option>
                    @foreach($base as $p)
                    <option value="{{$p->id}}">{{$p->status}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-mt-2">
                    <label>Tanggal Mulai</label>
                    <select class="form-control" id="">
                    <option value="">Pilih Tanggal</option>
                    @foreach($base as $p)
                    <option value="{{$p->id}}">{{$p->tanggalMulai}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-mt-2">
                    <label>Tanggal Selesai</label>
                    <select class="form-control" id="">
                    <option value="">Pilih Tanggal</option>
                    @foreach($base as $p)
                    <option value="{{$p->id}}">{{$p->tanggalSelesai}}</option>
                    @endforeach
                    </select>
                </div>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal selesai</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($base as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td>{{$row->tanggalMulai}}</td>
                            <td>{{$row->tanggalSelesai}}</td>
                            <td>{{$row->status}}</td>
                            <td colspan="2">
                            <a  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$row->id}}">
                                    Update
                                </a>
            
                                <a type="button" href="/deleteMa/{{$row->id}}"class="btn btn-warning mt-2" onclick="return confirm('Yakin hapus data?')">Deleted</a>
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
                <form action="/editMa/{{ $row->id }}" method="post">
                    @csrf
                    <div class="mb-3"><input type="text" name="nama" placeholder="nama"value="{{$row->nama}}">
                </div>
                  <div class="mb-3">
                  <input type="text" name="deskripsi" placeholder="deskripsi"value="{{$row->deskripsi}}"></div>
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
