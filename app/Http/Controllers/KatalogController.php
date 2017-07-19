<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class KatalogController extends Controller
{
    public function usulkatalog(){
        $id = Auth::user()->id;
        $jurusan = DB::table('jurusan')->select('id_jurusan','unit')->orderBy('unit','asc')->get();
        $usul = DB::table('usul')
                ->select('judul','pengarang', 'penerbit', 'unit', 'kompetensi', 'status')
                ->join('users','usul.id','=','users.id')
                ->join('jurusan','usul.id_jurusan','=','jurusan.id_jurusan')
                ->where('usul.id',$id)
                ->get();

        $data = DB::table('users')
            ->where('id',$id)
            ->first();
        //dd($data);
        return view('katalog',['item' => $data,'prodi'=>$jurusan,'usulan'=>$usul]);
    }
    public function simpankatalog(Request $request){
        $id = Auth::user()->id;

        DB::table('usul')->insert([
            'id' => $id,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'id_jurusan' =>$request->unit,
            'deskripsi'=>$request->deskripsi,
            'kompetensi'=>$request->kompetensi
        ]);
        return redirect()->intended('usulkatalog');
    }
    public function admin(){
        $usul = DB::table('usul')
            ->select('id_usul','judul','pengarang', 'penerbit', 'unit', 'kompetensi', 'status','nama')
            ->join('users','usul.id','=','users.id')
            ->join('jurusan','usul.id_jurusan','=','jurusan.id_jurusan')
            ->get();
        //dd($usul);
        return view('admin',['item' => $usul]);
    }
    public function disetuju(Request $request){
        DB::table('usul')
            ->where('id_usul',$request->idusul)
            ->update(['status' => 'disetujui']);

        $id_user = DB::table('usul')
                    ->select('usul.id')
                    ->join('users','usul.id','=','users.id')
                    ->where('id_usul',$request->idusul)
                    ->first();
        $id = json_decode( json_encode($id_user), true);

        $pilihpoin = DB::table('point')->select('pts')->where('id',$id)->first(); //get poin;
        $newpoin = $pilihpoin->pts + 4;
        DB::table('point')
            ->where('id',$id)
            ->update(['pts' => $newpoin]);

    }
}
