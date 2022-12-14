<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class TugasController extends Controller
{
    public function insertT(Request $request){
        $base = Tugas::create($request->all());

        
        return view('layout.tugas');
    }

    public function showdataT(Request $request){
        $base = Tugas::paginate(5);
        return view('layout.dbtugas',compact('base'));
      }

      public function tampildataM($id){
        $base = Mahasiswa::find($id);
      
        return view('layout.tampildata',compact('base'));
       }
      
       public function editT(Request $request, $id){
      
        // dd($request);
      
        $base = Tugas::find($id)->update($request->all()); 
        // $data->update($request->all());
        return redirect()->route('showdataT')->with('success','Data berhasil diupdate');
}

public function deleteT($id){
    $base = Tugas::where('id',$id)->delete();
        
    return redirect()->route('showdataT')->with('success','Data berhasil dihapus');
   }
}