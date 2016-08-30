<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Http\Requests;

class KelolaProdukController extends Controller
{
    public function __construct(){        
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $data = Produk::where('id', 'LIKE', '%'.$q.'%')->orderBy('id','desc')->paginate(15);

        return view('pages.kelola-produk.kelola-produk', compact('data','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-produk.tambah-produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
        ]);
        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->save();
        \Flash::success('Nama Produk: ' . $request->get('nama') .  ' berhasil ditambahkan.');
        return redirect()->route('kelola.produk.index');
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
        $produk = Produk::findOrFail($id);
        return view('pages.kelola-produk.ubah-produk', compact('produk'));
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
        $produk = Produk::findOrFail($id);
        $this->validate($request, [
            'nama' => 'required',
        ]);

        $produk->update($request->all());
        \Flash::success('Nama Produk: '. $request->get('nama') . ' berhasil diubah.');
        return redirect()->route('kelola.produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::find($id)->delete();
        \Flash::success('Produk berhasil dihapus.');
        return redirect()->route('kelola.produk.index');
    }
}
