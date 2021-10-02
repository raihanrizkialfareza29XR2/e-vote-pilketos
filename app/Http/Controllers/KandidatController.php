<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kandidat = Kandidat::orderBy('id')->get();
        return view('page.admin.kandidat.index', compact('kandidat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.admin.kandidat.create');
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
        $data['foto'] = $request->file('foto')->store('kandidat');
        Kandidat::create($data);
        return redirect()->route('kandidat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kandidat = Kandidat::find($id);
        return view('page.admin.kandidat.detail', compact('kandidat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kandidat = Kandidat::find($id);
        return view('page.admin.kandidat.edit', compact('kandidat'));
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
        if (empty($request->file('foto'))) {
            $kandidat = Kandidat::find($id);
            $kandidat->update([
                'nama' => $request->nama,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'pengalaman' => $request->pengalaman,
                'periode' => $request->periode,
                'jumlahsuara' => $request->jumlahsuara,
            ]);
            return redirect()->route('kandidat.index');
        } else {
            $kandidat = Kandidat::find($id);
            Storage::delete($kandidat->foto);
            $kandidat->update([
                'nama' => $request->nama,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'pengalaman' => $request->pengalaman,
                'periode' => $request->periode,
                'foto' => $request->file('foto')->store('kandidat'),
                'jumlahsuara' => $request->jumlahsuara,
            ]);
            return redirect()->route('kandidat.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kandidat = Kandidat::find($id);
        Storage::delete($kandidat->foto);
        $kandidat->delete();

        return redirect()->route('kandidat.index');
    }
}
