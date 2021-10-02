<?php

namespace App\Http\Controllers;

use App\Models\Voters;
use App\Models\Kandidat;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $kandidat = Kandidat::all();
        $voters = Voters::all();
        $osis = [
            'Immanuel Billy Andino 28RPL',
            'Albert Krisna Herizta 28TKJ',
            'Aci 28RPL',
            'Belva Talitha Dwiyanti 28RPL',
            'Lailatul Hadhari 28TKJ',
            'Yahya Setiawan 28TKJ',
            'Muhammad Ricko Arif Andrian 28TKJ',
            "Richmond Janus Rafi'i Aryanto",
            "Faiqu Dzaky Eliananta Subkhan 28RPL",
            "ATMASARI KUSUMA SETA 28RPL",
            "MARTHA NADIVA FAJRIANI 28RPL",
            "Dzaky Azfa Faiz Nuruddin 28RPL",
            "FITROTIN NADZILAH 28RPL",
            "ERVINDA PUTRI OKTABRIYANTI 28RPL",
            "Nur Ghazi Maulana Al Gifary 28TKJ",
            "Agvin Amalia Nurfitri 29RPL",
            "Naila Rohima Rosyadi 29RPL",
            "Cheisya Valda Wibawaningrum 29RPL",
            "Nawla Uwais Parsa Balqis 29RPL",
            "Cheva Satrio Utomo 29RPL",
            "Moh Wildan Faedhu Rhobani 29TKJ",
            "Chessta Deva Adabi 29RPL",
            "Rafa Maulana Ibrahim 29RPL",
            "Rezita Cahya Adhina 29RPL",
            "Jofan Rizki Septanu 29RPL",
            "Divva Meiya Paula Yansari 29RPL",
            "Reyhan Ade Ardiansyah 29TKJ",
            "Auliya Putri 29RPL",
            "Naswanida Nafiula 29RPL",
            "Annisa Desca Rachmadilla 29TKJ",
            "Dinda Margareta Putri Rahmana 29TKJ",
            "Fernanda Rizky Hardiansyah 29RPL",
            "Muhammad Raffa Andarra Putra 29RPL",
            "Syafia Azzifa 29TKJ",
        ];
        $subor = [
            'Dhimas Afghany Satrio Wibowo 29RPL',
            'Lintang Arum Sari 29RPL',
            'Ilham Sambudi Latupono 29RPL',
            'Nabil Dzikri 29RPL',
            'Ilham Raihan Nur Mustofa 28RPL',
            'Adhitya Tresna Widiyanto 29TKJ',
            'Reza Putra Oktaviano 28RPL',
            'Dafanza Razkahadi Kusuma 29TKJ',
            'Aufa Gagat Yogantara 28TKJ',
            'Tiara Pramita Sari 29TKJ',
            'Prayoga Adiatma Razi Putra 28TKJ',
            'Amar Habib Ramadhani 29RPL',
            'ANISAH NURFADHILAH AHMAD 28RPL',
            'Muhammad Asthi Seta Ari 29RPL',
            'Zidane Kallari Nurakhmanda 28RPL',
            'Bagas Satria Yudho Nugraha 29TKJ',
            'Antonia Faruq 28TKJ',
            'Syahrian Rassad Ramadhan 29RPL',
            'Daffa Azhar Putra 28TKJ',
            'Zafri Mahendra Putra 29RPL',
            'ISFAHAN YAYANK ADDINUL NASHIHA 28TKJ',
            'Ananda Afta Firstiarko 29RPL',
            'Mohammad Riyan Fauzi 28TKJ',
            'Cintya Raharjo 29TKJ',
            'Fadlillah Bashir Al Hakim 28RPL',
            'Shindy Amelia Triasningrum 29RPL',
            'Rizky Ageng Syaputra 28TKJ',
            'Moch. Daffa Ringga Ramadhan 28TKJ',
            'Dewa Raga Hawa Zabbera 28TKJ',
            'Guntur Naufal Imaduddin 28TKJ',
            'AMANDA APRIL FLORENCIA 28RPL',
            'MILA VARISTIN 28RPL',
            'MUTIARA SAMUDRA BIRU 28TKJ',
            'NAISYA NAJMI 28RPL',
            'HANA KAMILA NAURA YASMIN 28RPL',
            'NINDYA APRILIA FIRNANDA 28RPL',
            'FREZA AZZAHRA QALBINA 28TKJ',
            'TRIA SILVIANA 28RPL',
        ];
    $osisbelum = Pemilih::whereIn('name', $osis)
    ->where('status', 2)
    ->count();
    $osisudah = Pemilih::whereIn('name', $osis)
    ->where('status', 1)
    ->count();
    $suborudah = Pemilih::whereIn('name', $subor)
    ->where('status', 1)
    ->count();
    $suborbelum = Pemilih::whereIn('name', $subor)
    ->where('status', 2)
    ->count();
    $gurudah = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
    ->where('name', 'NOT LIKE', '%'.'29'.'%')
    ->where('name', 'NOT LIKE', '%'.'30'.'%')
    ->where('status', 1)
    ->count();
    $gurubelum = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
    ->where('name', 'NOT LIKE', '%'.'29'.'%')
    ->where('name', 'NOT LIKE', '%'.'30'.'%')
    ->where('status', 2)
    ->count();
	$angkatan28 = DB::table('pemilih')->where('name', 'LIKE', '%'.'28'.'%')->get();
	$angkatan29 = DB::table('pemilih')->where('name', 'LIKE', '%'.'29'.'%')->get();
	$angkatan30 = DB::table('pemilih')->where('name', 'LIKE', '%'.'30'.'%')->get();
    $ang28 = DB::table('pemilih')->where('name', 'LIKE', '%'.'28'.'%')->count();
	$ang29 = DB::table('pemilih')->where('name', 'LIKE', '%'.'29'.'%')->count();
	$ang30 = DB::table('pemilih')->where('name', 'LIKE', '%'.'30'.'%')->count();
	$angkatan28b = DB::table('pemilih')->where('name', 'LIKE', '%'.'28'.'%')
					   ->where('status' , 2)->count();
        $angkatan29b = Pemilih::where('name', 'LIKE', '%'.'29'.'%')
					   ->where('status' , 2)->count();
        $angkatan30b = DB::table('pemilih')->where('name', 'LIKE', '%'.'30'.'%')
					   ->where('status' , 2)->count();
        $angkatan28s = DB::table('pemilih')->where('name', 'LIKE', '%'.'28'.'%')
					   ->where('status' , 1)->count();
        $angkatan29s = DB::table('pemilih')->where('name', 'LIKE', '%'.'29'.'%')
					   ->where('status' , 1)->count();
        $angkatan30s = DB::table('pemilih')->where('name', 'LIKE', '%'.'30'.'%')
					   ->where('status' , 1)->count();
        $guru = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->count();
    // $angkatan28vk = Pemilih::where('name', 'LIKE', '%'.'28'.'%')
    //                         ->join('kandidat', 'pemilih.id_kandidat', '=', 'kandidat.id')
	//                         ->where('status' , 2)
    //                         ->where('id_kandidat', 'kandidat.id')->count();
    // $angkatan29vk = Pemilih::where('name', 'LIKE', '%'.'29'.'%')
    //                    ->join('kandidat', 'pemilih.id_kandidat', '=', 'kandidat.id')
	// 				   ->where('status' , 2)
    //                    ->where('id_kandidat', 'kandidat.id')->count();
    // $angkatan30vk = Pemilih::where('name', 'LIKE', '%'.'30'.'%')
    //                    ->join('kandidat', 'pemilih.id_kandidat', '=', 'kandidat.id')
	// 				   ->where('status' , 2)
    //                    ->where('id_kandidat', '=', 'kandidat.id')->count();
	// dd($angkatan29);
        $vote = DB::table('pemilih')->where('status', 1);
        $voteb = DB::table('pemilih')->where('status', 2);
        $hitungs = $ang28 + $ang29 + $ang30;
        // $hitung28 = ($angkatan28s / $hitungs) * 100;
        // $hitung29 = ($angkatan29s / $hitungs) * 100;
        // $hitung30 = ($angkatan30s / $hitungs) * 100;
        if ($ang28 != 0) {
            $hitung28 = ($angkatan28s / $hitungs) * 100;
        } else {
            $hitung28 = 0;
        }
        if ($ang29 != 0) {
            $hitung29 = ($angkatan29s / $hitungs) * 100;
        } else {
            $hitung29 = 0;
        }
        if ($ang30 != 0) {
            $hitung30 = ($angkatan30s / $hitungs) * 100;
        } else {
            $hitung30 = 0;
        }
        
        $kandidat = Kandidat::all();
        if ($kandidat->count() == 0) {
            $nama = 'Belum ada';
            $jumlahsuara = 0;
        } else {
            foreach ($kandidat as $row) {
                $nama = $row->nama;
                $jumlahsuara = $row->jumlahsuara;
            }
        }
        
        // $user = Auth::user()->name;
        $belumvoting = DB::select('SELECT COUNT(status) as jumlahbelumvoting from pemilih where status = 2 GROUP by status');
        return view('page.admin.admin', compact('kandidat', 'voters', 'vote', 'voteb', 'belumvoting', 
'angkatan30', 'angkatan29', 'angkatan28', 'angkatan28s', 'angkatan29s', 'angkatan30s', 'angkatan28b', 
'angkatan29b', 'angkatan30b', 'hitung28', 'hitung29', 'hitung30', 'nama', 'jumlahsuara','guru', 'gurubelum',
'gurudah', 'suborbelum', 'suborudah', 'osisudah', 'osisbelum'));
    }
    public function chart()
    {
        $kandidat = Kandidat::select('*')->get();

        return json_encode($kandidat);
    }
}
