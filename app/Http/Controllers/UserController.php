<?php

namespace App\Http\Controllers;

use Alert;
use Session;
use App\Models\Voters;
use App\Models\Pemilih;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use App\Exports\PemilihExport;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function index()
    {
        $data->session()->forget('nama');
        return view('page.proto');
    }

    public function login()
    {
        return view('page.user.userlogin');
    }
    
    public function export()
    {
        return Excel::download(new PemilihExport, 'pemilih.xlsx');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_callback(Request $data)
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);

            $isUser = Pemilih::where('google_id', $user->id)->first();
            // dd($isUser);
            

            if ($isUser) {
                // $username = Pemilih::where('email', $user->getEmail());
                // dd($username);
                // dd($username);
        
                $cek = DB::table('pemilih')->where('email', $user->getEmail())->first();
        
                $status = DB::table('pemilih')->where(['email' => $user->getEmail(), 'status' => 2])->first();
                $real = DB::table('pemilih')->where(['email' => $user->getEmail()])->first();
                // dd($real);
                // $real = $user->getEmail()->where(['status' => 1]);
                // dd($real);
                // dd($cek);
		//dd($status);
                if (!$cek) {
                    Session::flash('Gagal','User Tidak Ditemukan atau password salah');
                    return redirect()->route('userlogin');
                } else {
                    // $data->session()->put('svoting',$real);
                    if (!$status) {
                        Session::flash('galat','Sudah ada');
                        $data->session()->put('svoting',$real);
                        return redirect()->route('home');
                    } else {
                        $data->session()->put('username',$user->getEmail());
                        $data->session()->put('svoting',$real);
                        return redirect()->route('home');
                    }
                }
            } else {
                
                $createUser = new Pemilih;
                $createUser->name = $user->getName();

                if ($user->getEmail() != null) {
                    $createUser->email = $user->getEmail();
                    // $createUser->email_verified_at = Carbon::now();
                }

                $createUser->google_id = $user->getId();

                $rand = rand(111111,999999);
                $createUser->password = bcrypt($user->getName().$rand);
                $createUser->periode = 2021;
                $createUser->status = 2;

                $createUser->save();

                $username = $user->getEmail();
                $password = $createUser->password;
        
                $cek = DB::table('pemilih')->where('email', $username)
                                   ->orWhere('password', $password)
                                   ->first();
        
                $status = DB::table('pemilih')->where(['email' => $username, 'status' => 2])->first();
                // $real = DB::table('pemilih')->where(['email' => $username, 'status' => 1])->first();
                $real = DB::table('pemilih')->where(['email' => $user->getEmail()])->first();
                // dd($cek);

                if (!$cek) {
                    Alert::error('Gagal','User Tidak Ditemukan atau password salah');
                    return redirect()->route('userlogin');
                } else {
                    if (!$status) {
                        // Session::flash('galat','Sudah ada');
                        Alert::info('Baca', 'Halaman ini hanya dapat diakses oleh user yang sudah voting');
                        return redirect()->route('home');
                    } else {
                        $data->session()->put('svoting',$real);
                        $data->session()->put('username',$user->getEmail());
                        return redirect('/voting');
                    }
                    
                }

                
            }
            
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function ceklogin(Request $data)
    {
        // $username = $data->input('username');
        // $password = $data->input('password');
        
        // $cek = DB::table('pemilih')->where('voters_id', $username)
        //                            ->orWhere('password', $password)
        //                            ->first();
        
        // $status = DB::table('pemilih')->where(['voters_id' => $username, 'status' => 2])->first();
        // // dd($cek);

        // if (!$cek) {
        //     Session::flash('Gagal','User Tidak Ditemukan atau password salah');
        //     return redirect()->route('userlogin');
        // } else {
        //     if (!$status) {
        //         Session::flash('galat','Sudah ada');
        //         return redirect()->route('error');
        //     } else {
        //         $data->session()->put('username',$username);
        //         return redirect('/voting');
        //     }
            
        // }
        
    }

    public function error()
    {
        return view('includes.user.gagal');
    }
    public function errors()
    {
        return view('page.user.gagalv');
    }
    public function errorr()
    {
        return view('page.user.gagall');
    }
    public function errorp()
    {
        return view('page.user.gagalb');
    }

    public function success(Request $data)
    {
        $session = $data->session()->get('nama');
        // dd($session);
        $nama = $session[0];
        $namas = Pemilih::where('name', $nama)->first();
        // dd($nama);
        Alert::info('PENTING', 'Harap mengisi feedback terlebih dahulu sebelum meninggalkan laman web ini');
    	return view('page.voting.success', compact('namas'));
    }
    public function realtime(Request $data)
    {
        // $status = $session->status == 1;
        // dd($status);
        // dd($session);
        $session = $data->session()->get('svoting');
        if(!$session){
            //Jika Ada Session
                // $kandidat = Kandidat::all();
                Alert::error('Maaf', 'anda belum login');
                return redirect('errorr');
        }else{
            if ($session->status == 1) {
                $kandidat = $kandidat = Kandidat::all();
                Alert::info('Baca', 'Berikut merupakan data sementara hasil voting');
                return view('page.user.realvote',compact('kandidat'));
            } else {
                Alert::error('Maaf', 'Page ini hanya dapat oleh user yang sudah voting');
                return redirect()->route('errors');
            }
            
        }
    }
    // public function realtime()
    // {
    //     Alert::error('Maaf', 'Page ini hanya dapat diakses saat pemilihan 2 kandidat berlangsung');
    //     return redirect()->route('errorp');
    // }
}
