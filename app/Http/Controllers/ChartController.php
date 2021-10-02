<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilih;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $pemilih = Pemilih::all();
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
        // $os1s = Pemilih::whereIn('name', $osis)
        // ->count();
        $os1s = count($osis);
        $siswa = Pemilih::whereNotIn('name', $osis)
        ->whereNotIn('name', $subor)
        ->count();
        // dd($os1s);
        $osis1 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 1)
        ->count();
        // dd($osis1);
        $osis2 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 12)
        ->count();
        $osis3 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 13)
        ->count();
        $osis4 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 14)
        ->count();
        $osis5 = Pemilih::whereIn('name', $osis)
        ->where('id_kandidat', 2)
        ->count();
        $os1 = $osis1 / $os1s * 100;
        $os2 = $osis2 / $os1s * 100;
        $os3 = $osis3 / $os1s * 100;
        $os4 = $osis4 / $os1s * 100;
        $os5 = $osis5 / $os1s * 100;
        $o1 = round($os1);
        $o2 = round($os2);
        $o3 = round($os3);
        $o4 = round($os4);
        $o5 = round($os5);
        // $subgan = 15;
        $subgan = count($subor);
        $subgan1 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 1)
        ->count();
        $subgan2 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 12)
        ->count();
        $subgan3 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 13)
        ->count();
        $subgan4 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 14)
        ->count();
        $subgan5 = Pemilih::whereIn('name', $subor)
        ->where('id_kandidat', 2)
        ->count();
        $sg1 = $subgan1 / $subgan * 100;
        $sg2 = $subgan2 / $subgan * 100;
        $sg3 = $subgan3 / $subgan * 100;
        $sg4 = $subgan4 / $subgan * 100;
        $sg5 = $subgan5 / $subgan * 100;
        $s1 = round($sg1);
        $s2 = round($sg2);
        $s3 = round($sg3);
        $s4 = round($sg4);
        $s5 = round($sg5);
        $guru = 83;
        $guru1 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 1)
        ->count();
        $guru2 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 12)
        ->count();
        $guru3 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 13)
        ->count();
        $guru4 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 14)
        ->count();
        $guru5 = DB::table('pemilih')->where('name', 'NOT LIKE', '%'.'28'.'%')
        ->where('name', 'NOT LIKE', '%'.'29'.'%')
        ->where('name', 'NOT LIKE', '%'.'30'.'%')
        ->where('id_kandidat', 2)
        ->count();
        if ($guru != 0) {
            $gu1 = $guru1 / $guru * 100;
            $gu2 = $guru2 / $guru * 100;
            $gu3 = $guru3 / $guru * 100;
            $gu4 = $guru4 / $guru * 100;
            $gu5 = $guru5 / $guru * 100;
        } else {
            $gu1 = 0;
            $gu2 = 0;
            $gu3 = 0;
            $gu4 = 0;
            $gu5 = 0;
        }
        $g1 = round($gu1);
        $g2 = round($gu2);
        $g3 = round($gu3);
        $g4 = round($gu4);
        $g5 = round($gu5);
        $siswa1 = Pemilih::whereNotIn('name', $osis)
        ->whereNotIn('name', $subor)
        ->where('id_kandidat', 1)
        ->count();
        $siswa2 = Pemilih::whereNotIn('name', $osis)
        ->whereNotIn('name', $subor)
        ->where('id_kandidat', 2)
        ->count();
        if ($siswa1 != 0) {
            $siswa1h = $siswa1 / $siswa * 100;
        } else {
            $siswa1h = 0;
        }
        if ($siswa2 != 0) {
            $siswa2h = $siswa2 / $siswa * 100;
        } else {
            $siswa2h = 0;
        }
        $ss1 = round($siswa1h);
        $ss2 = round($siswa2h);
        $k1 = ($o1 + $s1 + $g1) / 3;
        $k2 = ($o2 + $s2 + $g2) / 3;
        $k3 = ($o3 + $s3 + $g3) / 3;
        $k4 = ($o4 + $s4 + $g4) / 3;
        $k5 = ($o5 + $s5 + $g5) / 3;
        $kk1 = round($k1);
        $kk2 = round($k2);
        $kk3 = round($k3);
        $kk4 = round($k4);
        $kk5 = round($k5);
        return view('page.admin.chart.index', compact('pemilih', 'o1','o2','o3','o4','o5','s1','s2','s3','s4','s5','g1','g2','g3','g4','g5', 'k1', 'k2', 'k3', 'k4', 'k5', 'kk1', 'kk2', 'kk3', 'kk4', 'kk5','ss1','ss2'));
    }
}
