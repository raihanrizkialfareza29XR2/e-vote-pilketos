<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\Pemilih;
use Illuminate\Support\Facades\DB;

class Realtime extends Controller
{
    public function index()
    {
        $kandidat = Kandidat::all();
        $voters = Pemilih::all();
        $vo = Pemilih::count();
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
            'Raihan Rizki Alfareza 29RPL',
            'Naufal Akbar Nugroho 29RPL',
            'Adzwa Izzaz Syah Putri 29TKJ',
        ];
        // $submpk = [
        //     'Rizky Ageng Syaputra 28TKJ',
        //     'Moch. Daffa Ringga Ramadhan 28TKJ',
        //     'Dewa Raga Hawa Zabbera 28TKJ',
        //     'Guntur Naufal Imaduddin 28TKJ',
        //     'AMANDA APRIL FLORENCIA 28RPL',
        //     'MILA VARISTIN 28RPL',
        //     'MUTIARA SAMUDRA BIRU 28TKJ',
        //     'NAISYA NAJMI 28RPL',
        //     'HANA KAMILA NAURA YASMIN 28RPL',
        //     'NINDYA APRILIA FIRNANDA 28RPL',
        //     'FREZA AZZAHRA QALBINA 28TKJ',
        //     'TRIA SILVIANA 28RPL',

        // ];

        $os1s = count($osis);
        // $suborg = count($subor);
        $suborg = count($subor);
        // dd($suborg);
        // $guru = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        // ->where('name', 'NOT LIKE', '%'.'29'.'%')
        // ->where('name', 'NOT LIKE', '%'.'30'.'%')
        // ->count();
        $guru = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->count();;
        $siswa = Pemilih::whereNotIn('name', $osis)
        ->whereNotIn('name', $subor)
        ->count();
        

        // Ijlal
        $guru1 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 1)
        ->count();
        $os1 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 1)
        ->count();
        $so1 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 1)
        ->count();
        $siswa1 = Pemilih::whereNotIn('name', $osis)
        ->whereNotIn('name', $subor)
        ->where('id_kandidat', 1)
        ->count();
        // dd($siswa1);
        // dd($so1);
        if ($guru1 != 0) {
            $guru1h = $guru1 / $guru * 100;
        } else {
            $guru1h = 0;
        }
        $os1h = $os1 / $os1s * 100;
        $so1h = $so1 / $suborg * 100;
        if ($siswa1 != 0) {
            $siswa1h = $siswa1 / $siswa * 100;
        } else {
            $siswa1h = 0;
        }
        $g1 = round($guru1h);
        $o1 = round($os1h);
        $s1 = round($so1h);
        $ss1 = round($siswa1h);
        // dd($h1);
        // Daiva
        $guru5 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 2)
        ->count();
        $os5 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 2)
        ->count();
        $so5 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 2)
        ->count();
        $siswa2 = Pemilih::whereNotIn('name', $osis)
        ->whereNotIn('name', $subor)
        ->where('id_kandidat', 2)
        ->count();
        if ($guru5 != 0) {
            $guru5h = $guru5 / $guru * 100;
        } else {
            $guru5h = 0;
        }
        if ($siswa2 != 0) {
            $siswa2h = $siswa1 / $siswa * 100;
        } else {
            $siswa2h = 0;
        }
        $os5h = $os5 / $os1s * 100;
        $so5h = $so5 / $suborg * 100;
        $g5 = round($guru5h);
        $o5 = round($os5h);
        // dd($o5);
        $s5 = round($so5h);
        $ss2 = round($siswa2h);
        // dd($s5);
        return view('page.admin.realtime.realtime',compact('kandidat', 'voters', 'g1', 'o1', 's1', 'g5', 'o5', 's5', 'os1', 'os5', 'so1', 'so5', 'guru1', 'guru5', 'siswa1', 'siswa2', 'ss1', 'ss2'));
    }
}
