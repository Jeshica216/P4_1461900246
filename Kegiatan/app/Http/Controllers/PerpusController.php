<?php

namespace App\Http\Controllers;

use App\Models\Perpus;
use App\Exports\PerpusExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpus = Perpus::join('buku', 'rak_buku.id_buku', 'buku.id' )
        ->join('jenis_buku', 'rak_buku.id_jenis_buku', 'jenis_buku.id')
        ->select('rak_buku.id', 'buku.judul','buku.tahun_terbit',  'jenis_buku.jenis')
        ->get();
        
        return view('tampil0246', ['perpus' => $perpus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah0246');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perpus::create([
            'id' => $request->id,
            'id_buku' => $request->id_buku,
            'id_jenis_buku' => $request->id_jenis_buku,
        ]);

        return redirect('perpus');
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
        $perpus = Perpus::find($id);
        return view('edit0246', ['perpus' => $perpus]);
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
        $perpus = Perpus::find($id);
        $perpus->id = $request->id;
        $perpus->id_buku = $request->id_buku;
        $perpus->id_jenis_buku = $request->id_jenis_buku;
        $perpus->save();

        return redirect('perpus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perpus = Perpus::find($id);
        $perpus->delete();

        return redirect('perpus');
    }

    public function perpusexport()
    {
        return Excel::download(new PerpusExport, 'Data_1461900246.xlsx');
    }
}
