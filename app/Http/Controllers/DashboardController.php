<?php


namespace App\Http\Controllers;
use App\Ulasan;


use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            return redirect()->intended('/');
        }
        else{
            $request->session()->flash('waduh', 'Kamu harus login terlebih dahulu untuk mengakses halaman ini.');
            return redirect()->intended('/');
        }
    }

    public function full_site(Request $request){
        if ($request->session()->has('user')) {
            return view('dashboard');
        }
        else{
            $request->session()->flash('waduh', 'Kamu harus login terlebih dahulu untuk mengakses halaman ini.');
            return redirect()->intended('/');
        }
    }
    public function pinjam(){
        $id = Auth::user()->id;
        $data =  DB::table('users')
            ->join('pinjam', 'users.id', '=', 'pinjam.id')
            ->join('book', 'book.id_book', '=', 'pinjam.id_book')
            ->where('users.id',$id)
            ->get();
        return view('pinjam',['data' => $data]);
    }

    public function pjg(Request $request){
        $id_user = Auth::user()->id;
        $tgl_perpanjang = $request->perpanjang;
        $tgl_skrg = Carbon::today();
        $d1 = date_create("$tgl_skrg");
        $d2 = date_create("$tgl_perpanjang");

        $beda = $d1->diff($d2); //kalkulasi perbandingan hari
        $conv_hari = $beda->format("%d"); //konversi perbandingan hari

        if($conv_hari == 7){
        DB::table('pinjam')
            ->where('id_pinjam', $request->idpinjam)
            ->update(['perpanjangan' => 1,'tgl_balik' => $request->perpanjang,'status'=>"diperpanjang s.d. ".$request->perpanjang]);

        $pilihpoin = DB::table('point')->select('pts')->where('id',$id_user)->first(); //get poin terakhir
        $newpoin = $pilihpoin->pts + 3;
        DB::table('point')
            ->where('id',$id_user)
            ->update(['pts' => $newpoin]);

            return redirect()->intended('dashboard');
        }

        else if($conv_hari > 7){
            echo "<script type = 'text/javascript'>alert('Perpanjangan hanya dapat dilakukan selama seminggu');window.location = '/pinjam';</script>";
        }
        else{
            echo "<script type = 'text/javascript'>alert('Perpanjangan hanya dapat dilakukan selama seminggu');window.location = '/pinjam';</script>";
        }
        //return redirect()->intended('dashboard');
    }
    public function book($judul){

        $data =  DB::table('book')
            ->join('pinjam', 'book.id_book', '=', 'pinjam.id_book')
            ->join('ulasan', 'book.id_book', '=', 'ulasan.id_book')
            ->where('judul',$judul)
            ->first();

        $get_ulas = DB::table('ulasan')
            ->join('book','book.id_book','=','ulasan.id_book')
            ->join('users','users.id','=','ulasan.id')
            ->where('judul',$judul)
            ->select('ulasan','nama','rating','subjek')
            ->get();
        //dd($pilih_idbook);

        return view('book',['title' => $judul,'item' =>$data,'review' => $get_ulas]);
    }
    public function logout(){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}