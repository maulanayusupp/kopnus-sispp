<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;
use App\Http\Requests;

class KelolaSimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $simpanan = Simpanan::where('id', 'LIKE', '%'.$q.'%')->orderBy('status','desc')->paginate(10);
        return view('pages.kelola-simpanan.kelola-simpanan', compact('simpanan','q'));
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
