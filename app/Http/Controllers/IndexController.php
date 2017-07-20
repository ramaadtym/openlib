<?php


namespace App\Http\Controllers;
use App\Register;
use App\Login;
use App\Logpts;

use App\SetBuku;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class IndexController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function index(Request $request)
    {

        $data =  DB::table('users')
            ->join('point', 'users.id', '=', 'point.id')
            ->where('role','member')
            ->orderBy('pts', 'desc')
            ->limit(5)
            ->get();

        if($request->session()->has('user')){
            return view('index')->with('poin',$data);
        }
        else if($request->session()->has('admin')){
            return redirect()->intended('admin');
        }
        else{
            return view('index')->with('poin',$data);
        }
    }

    public function simpan(Request $request){
        $this->validate($request,[
            'nama => required',
            'username => required',
            'password => required',
            ]);
        $save = new Register;
        $save->nama = $request->nama;
        $save->username = $request->username;
        $encript = bcrypt($request->password);
        $save->password = $encript;
        if (Register::where('username', '=', $request->username)->exists()) {
            $request->session()->flash('waduh', 'Username sudah terdaftar!.');
        }
        else{
            $save->save();
            $create_log = new Logpts;
            $pilih = DB::table('users')->select('id')->where('id',$save->id)->first();
            $get_id = $pilih->id;
            $create_log->id = $get_id;
            $create_log->save();


            $book = DB::table('book')->select('id_book')->get();
            $tgl1 = date("Y-m-d");
            $pinjam = date('Y-m-d', strtotime('+7 days', strtotime($tgl1)));

            foreach ($book as $buku){
                $setBook = new SetBuku;
                $setBook->id = $get_id;
                $setBook->id_book = $buku->id_book;
                $setBook->tgl_pinjam = $tgl1;
                $setBook->tgl_balik = $pinjam;
                $setBook->save();
            }
            $request->session()->flash('sip', 'Username berhasil di daftarkan!');
            return redirect()->intended('/');
        }



    }
    public function login(Request $req){
        $username = $req->input('username');
        $pass = $req->input('password');
        if(Auth::attempt(['username' => $username, 'password' => $pass],false)){
            $login = Login::where('username',$username)->first(); //get data user yang login
            $id = $login->id; // get id user yang login

            $get_last_reward = DB::table('point')->select('last_point','pts')->where('id',$id)->first(); //get hari terakhir dapet poin berdasarkan id user (terakhir dpt reward)

            $terakhir_reward = $get_last_reward->last_point; //get hari terakhir dapet poin

            $d1 = date_create("$terakhir_reward"); //create tgl terakhir reward, gunanya buat dimasukin ke date_diff



            $hari_ini = $login->last_login;

            $d2 = date_create("$hari_ini"); //create tgl sekarang, gunanya buat dimasukin ke date_diff
            $f1 = $d2->format("Y-m-d");
            $beda = $d1->diff($d2); //kalkulasi perbandingan hari
            $conv_hari = $beda->format("%d"); //konversi perbandingan hari
            /*Kodingan buat nentuin waktu > 24 jam dalam menit (24 jam = 1440 menit)*/
            /*$jam = $beda->format("%h");
            $menit = $beda->format("%i");
            $menit_conv = ($jam * 60 + $menit) + ($conv_hari * 24 * 60);*/

            if($conv_hari >=1 || $hari_ini == null ){
                $n = $get_last_reward->pts;
                $poin = $n+2;
                //$get_last_reward->pts = $poin;
                //update tanggal dan poin terakhir poin di update
                DB::table('point')
                    ->where('id', $id)
                    ->update(['last_point' => Carbon::now(),'pts'=>$poin]);
            }

            $login->last_login = Carbon::now(); //update last_login by tanggal hari ini
            $login->save();

            $getrole= DB::table('users')->select('role')->where('id',$id)->first();
            $getall= DB::table('users')->select('*')->where('id',$id)->first();

            if($getrole->role == "member"){
                $req->session()->put('user', $getall->username);//set user
                $req->session()->put('nama',$getall->nama);//set nama
                return redirect()->intended('dashboard');
            }
            else{
                return redirect()->intended('admin');
            }
            //$cekLogin = DB::table('users')->where(['username'=>$username])->get();

        }else{
            echo "<script type = 'text/javascript'>alert('Username tidak terdaftar!');</script>";
            return redirect('/');
        }

        }
     public function board(){
         $data =  DB::table('users')
             ->join('point', 'users.id', '=', 'point.id')
             ->where('role','member')
             ->orderBy('pts', 'desc')
             ->get();
         return view('boards',['poin' =>$data]);
     }



}
