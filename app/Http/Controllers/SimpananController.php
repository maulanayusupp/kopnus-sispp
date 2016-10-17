<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;
use App\Http\Requests;
use Auth;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function menyimpan(){
        return view('pages.simpanan.menyimpan');
    }

    public function riwayat(){
        $id = Auth::user()->id ;
        $simpanan = Simpanan::where('user_id', '=', $id)->orderBy('status','desc')->paginate(5);
        return view('pages.simpanan.riwayat-simpanan', compact('simpanan'));
    }

    public function index()
    {
        //
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
        $this->validate($request, [
            'user_id' => 'required',
            'kartu_atm' => 'required',
            'no_kartu_atm' => 'required',
            'nilai_penempatan' => 'required',
            'nilai_penempatan_terbilang' => 'required',
        ]);
        $request['status'] = 'menunggu';
        Simpanan::create($request->all());
        \Flash::success('Simpanan oleh ID User: ' . $request->get('user_id') .  ' ditambahkan.');
        return redirect('simpanan/riwayat');
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
        return view('pages.simpanan.show-simpanan', compact('simpanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $simpanan = Simpanan::findOrFail($id);
        return view('pages.simpanan.ubah-simpanan', compact('simpanan'));
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
        $simpanan = Simpanan::findOrFail($id);
        $this->validate($request, [
            'user_id' => 'required',
        ]);

        $simpanan->update($request->all());
        \Flash::success('ID Simpanan: '. $simpanan->id . ' berhasil diubah.');
        return redirect('simpanan/riwayat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $simpanan = Simpanan::find($id);
        Simpanan::find($id)->delete();
        \Flash::success('ID Simpanan: '. $simpanan->id .' dibatalkan.');
        return redirect('simpanan/riwayat');
    }
}