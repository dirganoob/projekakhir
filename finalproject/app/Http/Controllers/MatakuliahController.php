<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function insertMa(Request $request){
        $base = Matakuliah::create($request->all());

        
        return view('layout.matakuliah');
    }

    public function showdataMa(Request $request){
        $base = Matakuliah::paginate(5);
        return view('layout.dbmatakuliah',compact('base'));
      }

      public function tampildataM($id){
        $base = Mahasiswa::find($id);
      
        return view('layout.tampildata',compact('base'));
       }
      
       public function editMa(Request $request, $id){
      
        // dd($request);
      
        $base = Matakuliah::find($id)->update($request->all()); 
        // $data->update($request->all());
        return redirect()->route('showdataMa')->with('success','Data berhasil diupdate');
}

public function deleteMa($id){
    $base = MataKuliah::where('id',$id)->delete();
        
    return redirect()->route('showdataMa')->with('success','Data berhasil dihapus');
   }
}
