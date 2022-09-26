<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required',
            'nama_barang' => 'required',
            'spesifikasi_barang' => 'required',
            'jumlah' => 'required',
        ]);

        $barang = new Barang();
        $barang->tanggal = $request->tanggal;
        $barang->nama_barang = $request->nama_barang;
        $barang->spesifikasi_barang = $request->spesifikasi_barang;
        $barang->jumlah = $request->jumlah;
        $barang->serial_number = $request->serial_number;
        $barang->harga = $request->harga;
        $barang->keadaan_barang = $request->keadaan_barang;
        $barang->lokasi = $request->lokasi;
        $barang->save();
        return redirect()->route('barang.index')
        ->with('Success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
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
        $validated = $request->validate([
            'tanggal' => 'required',
            'nama_barang' => 'required',
            'spesifikasi_barang' => 'required',
            'jumlah' => 'required', 
        ]);

        $barang = Barang::findOrFail($id);
        $barang->tanggal = $request->tanggal;
        $barang->nama_barang = $request->nama_barang;
        $barang->spesifikasi_barang = $request->spesifikasi_barang;
        $barang->jumlah = $request->jumlah;
        $barang->serial_number = $request->serial_number;
        $barang->harga = $request->harga;
        $barang->keadaan_barang = $request->keadaan_barang;
        $barang->lokasi = $request->lokasi;
        $barang->save();
        return redirect()->route('barang.index')
        ->with('Success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')
        ->with('Success', 'Data berhasil dihapus!');
    }
}
