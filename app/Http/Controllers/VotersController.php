<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Status;
use App\Models\Voters;
use App\Models\Pemilih;
use App\Models\Kandidat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VotersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voters = Voters::paginate(8);
        return view('page.admin.voters.index', compact('voters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('page.admin.voters.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Voters::create($data);
        return redirect()->route('voters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voters = Voters::find($id);
        $pemilih = Pemilih::find($id);
        $status = Status::all();
        // dd($pemilih->kandidat);
        return view('page.admin.voters.edit', compact('status','voters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Voters::find($id);
        $update->update([
            'status' => $request->status
        ]);
        $idkan = $update->id_kandidat;
        // dd($idkan);
        $jumlah = DB::table('kandidat')->where('id',$idkan)->get();
        foreach ($jumlah as $key) {
            $jumlahsuara = $key->jumlahsuara;
        }
        $kandidat = Kandidat::find($idkan);
        if ($request->status == "2") {
            $kandidat->update([
                'jumlahsuara' => $jumlahsuara-1
            ]);
        }
        Alert::success('Berhasil', 'Status telah berhasil diupdate');
        return redirect()->route('voters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voters = Voters::find($id);
        $idkan = $voters->id_kandidat;
        $jumlah = DB::table('kandidat')->where('id',$idkan)->get();
        foreach ($jumlah as $key) {
            $jumlahsuara = $key->jumlahsuara;
        }
        $kandidat = Kandidat::find($idkan);
        if ($voters->status == 1) {
            $kandidat->update([
                'jumlahsuara' => $jumlahsuara-1
            ]);
        }
        $voters->delete();


        return redirect()->route('voters.index');
    }
}
