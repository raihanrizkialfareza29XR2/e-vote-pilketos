<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Socialite\Facades\Socialite;

class VotingController extends Controller
{
    public function index(Request $data)
    {
        $session = $data->session()->get('svoting');
        if(!$session){
            //Jika Ada Session
                Alert::info('PENTING', 'Login terlebih dahulu sebelum melakukan voting');
                return redirect()->route('userlogin');
        }else{
            if ($session->status == 2) {
                $kandidat = Kandidat::orderBy('id')->get();
                $ananda = 12;
                $ijlal = 11;
                $rizwanda = 13;
                $daiva = 15;
                $dea = 14;
                Alert::info('PENTING', 'Mohon screenshot terlebih dahulu setelah vote');
                return view('page.voting.index',compact('kandidat', 'ananda', 'ijlal', 'rizwanda', 'daiva', 'dea'));
            } else {
                Alert::error('Maaf', 'Anda sudah melakukan voting');
                return redirect()->route('error');
            }
            
        }
        
    }

    public function simpan($idkandidat, Request $data)
    {
        $user = $data->session()->get('svoting');
        if (!$user) {
                Alert::info('PENTING', 'Login terlebih dahulu sebelum melakukan voting');
                return redirect()->route('userlogin');
        } else {
            if ($user->status == 2) {
                $jumlah = DB::table('kandidat')->where('id',$idkandidat)->get();
                foreach ($jumlah as $key) {
                    $jumlahsuara = $key->jumlahsuara;
                }
                DB::table('kandidat')->where('id',$idkandidat)->update([
                    'jumlahsuara' => $jumlahsuara+1
                ]);
                DB::table('pemilih')->where('email',$user->email)->update([
                    'status' => 1,
                    'id_kandidat' => $idkandidat,
                ]);
                Alert::success('Selamat', 'anda sudah berhasil voting');
                return redirect()->route('logoutvoting');
            } else {
                return redirect()->route('error');
            }
        }
        
        
        // $jumlah = DB::table('kandidat')->where('id',$idkandidat)->get();
        // foreach ($jumlah as $key) {
        //      $jumlahsuara = $key->jumlahsuara;
        // }
        // DB::table('kandidat')->where('id',$idkandidat)->update([
        //     'jumlahsuara' => $jumlahsuara+1
        // ]);
        // DB::table('pemilih')->where('email',$data->session()->get('username'))->update([
        //     'status' => 1,
        //     'id_kandidat' => $idkandidat
        // ]);

        // Alert::success('Selamat!', 'Anda berhasil memilih');
        // return redirect()->route('logoutuser');
        
    }

    public function logout(Request $data)
    {
        $data->session()->forget('username');
        $data->session()->forget('svoting');
        return redirect()->route('home');
    }
    public function logoutvoting(Request $data)
    {
        $session = $data->session()->get('svoting');
        $nama = $session->name;
        $email = $session->email;
        // dd($nama);
        // dd($nama);
        $data->session()->put('nama', [$nama,$email]);
        $data->session()->forget('username');
        $data->session()->forget('svoting');
        return redirect()->route('success');
    }
}
