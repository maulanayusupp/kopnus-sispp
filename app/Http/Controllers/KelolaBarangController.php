<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang;

class KelolaBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('pages.kelola-barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* panggil model barang */
        $barang = new Barang;
        $barang->nama = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->save();

        /* pesan berhasil */
        \Flash::success(' Barang ditambahkan.');
        return redirect()->route('kelola.barang.index');
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
        /* panggil model berdasarkan id */
        $barang = Barang::findOrFail($id);
        return view('pages.kelola-barang.edit', compact('barang'));
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
        /* panggil model berdasarkan id */
        $barang = Barang::findOrFail($id);

        /* update data barang */
        $barang->update($request->all());

        /* pesan berhasil merubah data */
        \Flash::success('Data berhasil diubah.');

        /*setelah selesai, diarahkan ke halaman index*/
        return redirect()->route('kelola.barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* panggil model barang */
        Barang::find($id)->delete();

        /* pesan hapus barang */
        \Flash::success('Barang berhasil dihapus.');

        /* diarahkan ke index */
        return redirect()->route('kelola.barang.index');
    }
}
