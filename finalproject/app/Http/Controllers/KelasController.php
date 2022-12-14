<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
  public function showdata(Request $request){
    $keyword = $request->keyword;
    $data = Kelas::with('MataKuliah')->where('NamaKelas','LIKE','%'.$keyword.'%')
    ->orWhere('TahunAjaran','LIKE','%'.$keyword.'%')
    ->paginate(3);
    return view('layout.kelas',compact('data'));
  }

  public function delete($id){
    $data = Kelas::where('id',$id)->delete();
        
    return redirect()->route('showdata')->with('success','Data berhasil dihapus');
   }
}

