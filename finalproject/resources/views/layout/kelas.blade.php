@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row justify-content-center">
   <div class="col-10">
    <div  class="me-2"style="width:800px;">
              <form method = "GET" action="{{url('showdata')}}">
              <input type="text" name="keyword">
              <div class="btn btn-primary" type="submit">Search</div>
              </form>
              <div class="row">
                <div class="col-mt-2">
                    <label>NamaKelas</label>
                    <select class="form-control" id="">
                    <option value="">Pilih Kelas</option>
                    @foreach($data as $p)
                    <option value="{{$p->id}}">{{$p->NamaKelas}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-mt-2">
                    <label>NamaKelas</label>
                    <select class="form-control" id="">
                    <option value="">Pilih Tahun</option>
                    @foreach($data as $p)
                    <option value="{{$p->id}}">{{$p->TahunAjaran}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-mt-2">
                    <label>NamaKelas</label>
                    <select class="form-control" id="">
                    <option value="">Mata Kuliah</option>
                    @foreach($data as $p)
                    <option value="{{$p->id}}">{{$p->MataKuliah}}</option>
                    @endforeach
                    </select>
                </div>
              </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Tahun Ajaran</th>
                        <th scope="col">Jumlah Dosen</th>
                        <th scope="col">Jumlah Mahasiswa</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->NamaKelas}}</td>
                            <td>{{$row->MataKuliah->MataKuliah}}</td>
                            <td>{{$row->TahunAjaran}}</td>
                            <td>{{$row->JumlahDosen}}</td>
                            <td>{{$row->JumlahMahasiswa}}</td>
                            <td>
                                
            
                                <a type="button" href="/delete/{{$row->id}}"class="btn btn-warning mt-2" onclick="return confirm('Yakin hapus data?')">Deleted</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{$data->links()}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection
