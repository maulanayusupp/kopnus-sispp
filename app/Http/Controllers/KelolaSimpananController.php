<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;
use App\Http\Requests;

class KelolaSimpananController extends Controller
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
        if (isset($q)) {
            $simpanan = Simpanan::where('tabungan_id', $q)->orderBy('created_at','desc')->paginate(10);
        }else{
            $simpanan = Simpanan::where('tabungan_id', 'LIKE', '%'.$q.'%')->orderBy('created_at','desc')->paginate(10);
        }
        
        return view('pages.kelola-simpanan.kelola-simpanan', compact('simpanan','q'));
    }

    public function daftarVerifikasi()
    {
        $simpanan = Simpanan::where('status', 'menunggu')->orderBy('status','asc')->paginate(15);
        return view('pages.kelola-simpanan.daftar-verifikasi', compact('simpanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $simpanan = Simpanan::findOrFail($id);
        return view('pages.kelola-simpanan.show-simpanan', compact('simpanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showVerifikasi(Request $request, $id)
    {
        $simpanan = Simpanan::findOrFail($id);
        return view('pages.kelola-simpanan.verifikasi-simpanan', compact('simpanan'));
    }

    public function verifikasi(Request $request, $id)
    {
        $simpanan = Simpanan::findOrFail($id);
        $simpanan->update($request->only('status'));        
        \Flash::success('Simpanan dengan ID Transaksi: '. $simpanan->id .' diverifikasi dengan status: '. $request->input('status') );
        return redirect()->route('kelola.simpanan.index');
    }
}
