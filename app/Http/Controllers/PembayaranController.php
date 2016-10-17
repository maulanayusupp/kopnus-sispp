<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pembayaran;
use App\Http\Requests;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function riwayat(){
        $id = Auth::user()->id ;
        $pembayarans = Pembayaran::where('user_id', '=', $id)->orderBy('status','desc')->paginate(20);
        return view('pages.pembayaran.riwayat-pembayaran', compact('pembayarans'));
    }

    public function index()
    {
        return view('pages.pembayaran.pembayaran');
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
            'nama' => 'required',
            'tanggal_pembayaran',
            'pinjaman_id' => 'required',
            'angsuran_nomor' => 'required',
            'jumlah_tagihan' => 'required',
            'jumlah_pembayaran' => 'required',
            'jumlah_pembayaran_terbilang' => 'required',
            'cara_pembayaran' => 'required',
        ]);
        $request['status'] = 'menunggu';
        Pembayaran::create($request->all());
        \Flash::success('Pembayaran oleh: ' . $request->input('nama') .  ' ditambahkan.');
        return redirect('pembayaran/riwayat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pages.pembayaran.show-pembayaran', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pages.pembayaran.ubah-pembayaran', compact('pembayaran'));
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
        $pembayaran = Pembayaran::findOrFail($id);
        $this->validate($request, [
            'user_id' => 'required',
            'nama' => 'required',
            'tanggal_pembayaran',
            'pinjaman_id' => 'required',
            'angsuran_nomor' => 'required',
            'jumlah_tagihan' => 'required',
            'jumlah_pembayaran' => 'required',
            'jumlah_pembayaran_terbilang' => 'required',
            'cara_pembayaran' => 'required',
        ]);

        $pembayaran->update($request->all());
        \Flash::success('ID Pembayaran: '. $pembayaran->id . ' berhasil diubah.');
        return redirect('pembayaran/riwayat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        Pembayaran::find($id)->delete();
        \Flash::success('ID Pembayaran: '. $pembayaran->id .' dibatalkan.');
        return redirect('pembayaran/riwayat');
    }
}
