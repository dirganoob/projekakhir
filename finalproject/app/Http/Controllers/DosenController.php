<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function insertD(Request $request){
        $base = Dosen::create($request->all());

        
        return view('layout.dosen');
    }

    public function showdataD(Request $request){
        $keyword = $request->keyword;
        $base = Dosen::where('nama','LIKE','%'.$keyword.'%')
        ->orWhere('nip','LIKE','%'.$keyword.'%') ->orWhere('alamat','LIKE','%'.$keyword.'%')
        ->orWhere('NoTelepon','LIKE','%'.$keyword.'%')
        ->paginate(3);
        return view('layout.dbdosen',compact('base'));
      }
    

      public function tampildataD($id){
        $base = Dosen::find($id);
      
        return view('layout.tampildata',compact('base'));
       }
      
       public function editD(Request $request, $id){
      
        // dd($request);
      
        $base = Mahasiswa::find($id)->update($request->all()); 
        if($request->hasFile('foto')){
            $request->file('foto')->store('storage/app/public/image/database');
            $base->image = $request->file('foto')->getClientOriginalName();
            $base->update();
        }
        // $data->update($request->all());
        return redirect()->route('showdataM')->with('success','Data berhasil diupdate');
}

public function deleteD($id){
    $base = Dosen::where('id',$id)->delete();
        
    return redirect()->route('showdataM')->with('success','Data berhasil dihapus');
   }
}