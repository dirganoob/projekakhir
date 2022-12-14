<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(Request $request){
        
        $base = Mahasiswa::create($request->all());

        
        return view('layout.mahasiswa');
    }

    public function showdataM(Request $request){
        $keyword = $request->keyword;
        $base = Mahasiswa::where('nama','LIKE','%'.$keyword.'%')
        ->orWhere('nim','LIKE','%'.$keyword.'%') ->orWhere('Angkatan','LIKE','%'.$keyword.'%')
        ->paginate(10);
        return view('layout.dbmahasiswa',compact('base'));
      }

      public function tampildataM($id){
        $base = Mahasiswa::find($id);
      
        return view('layout.tampildata',compact('base'));
       }
      
       public function editM(Request $request, $id){
      
        // dd($request);
      
        $base = Mahasiswa::find($id)->update($request->all()); 
        if($request->hasFile('image')){
            $request->file('image')->store('storage/app/public/image/database');
            $base->image = $request->file('image')->getClientOriginalName();
            $base->update();
        }
        // $data->update($request->all());
        return redirect()->route('showdataM')->with('success','Data berhasil diupdate');
}

public function deleteM($id){
    $base = Mahasiswa::where('id',$id)->delete();
        
    return redirect()->route('showdataM')->with('success','Data berhasil dihapus');
   }
}