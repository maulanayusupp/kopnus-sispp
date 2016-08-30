<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use App\Http\Requests;

class KelolaPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        
        $q = $request->get('q');
        $pinjaman = Pinjaman::where('id', 'LIKE', '%'.$q.'%')->orderBy('status','desc')->paginate(10);
        return view('pages.kelola-pinjaman.kelola-pinjaman', compact('pinjaman','q'));
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
        $pinjaman = Pinjaman::findOrFail($id);
        return view('pages.kelola-pinjaman.show-pinjaman', compact('pinjaman'));
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
        $pinjaman = Pinjaman::findOrFail($id);
        return view('pages.kelola-pinjaman.verifikasi-pinjaman', compact('pinjaman'));
    }

    public function verifikasi(Request $request, $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $pinjaman->update($request->only('status'));        
        \Flash::success('Pinjaman dengan ID Transaksi: '. $pinjaman->id .' diverifikasi dengan status: '. $request->input('status') );
        return redirect()->route('kelola.pinjaman.index');
    }
}
