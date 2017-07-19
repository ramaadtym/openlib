<?php


namespace App\Http\Controllers;
use App\Ulasan;
use App\Login;
use App\Logpts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Validation\Validator;
class UlasanController extends Controller
{
    use AuthenticatesUsers;

    public function ulas(Request $request){
        $this->validate($request,[
            //rule untuk validasi field form
            'subjek' => 'required | min:7',
            'ulasan' => 'required | min:25',
        ]);
        //select id book & id user
        $id_user = Auth::user()->id;
        $book = DB::table('book')->select('id_book')->where('judul',$request->jdlbook)->first();



        //insert data
        /*if (Ulasan::where('id_book', '=', $book->id_book)->exists() && Ulasan::where('id', '=', $id_user)->exists()) {
            echo "<script type = 'text/javascript'>alert('Anda sudah mengulas buku ini. Untuk mengulasnya kembali, silakan tunggu dalam waktu 24 jam');window.location = '/pinjam';</script>";
        }*/
        /*else{*/
            DB::table('ulasan')->insert(
                ['id_book' =>$book->id_book, 'id' => $id_user,'rating' => $request->rate, 'subjek'=>$request->subjek,'ulasan'=>$request->ulasan,'timerecord'=>Carbon::now()]);
            /*);*/


        //update poin

            /*$pilihtgl = DB::table('ulasan')->select('timerecord')->where('id_book',$book->id_book)->first();
            $tgl1 = $pilihtgl->timerecord;
            $tgl2 = Carbon::now();

            $d1 = date_create($tgl1);
            $d2 = date_create($tgl2);
            $beda = $d1->diff($d2);

            $conv_hari = $beda->format("%d Hari"); //konversi perbandingan hari

            /*Kodingan buat nentuin waktu < 24 jam dalam menit (24 jam = 1440 menit)
            $jam = $beda->format("%h Jam");
            $menit = $beda->format("%i Menit");
            $menit_conv = ($jam * 60 + $menit) + ($conv_hari * 24 * 60);*/

            /*if($conv_hari < 1 && $menit_conv < 1440){*/
                $pilihpoin = DB::table('point')->select('pts')->where('id',$id_user)->first(); //get poin terakhir
                $newpoin = $pilihpoin->pts + 3;
                DB::table('point')
                    ->where('id',$id_user)
                    ->update(['pts' => $newpoin]);
            /*}*/
            echo "<script type = 'text/javascript'>alert('Ulasan berhasil di submit');window.location = '/pinjam';</script>";
        }


    /*}*/


}
