<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use App\User;
use App\Bunga;
use App\Http\Requests;
use Auth;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* Meminjam/Form untuk meminjam */
    public function meminjam(){
        return view('pages.pinjaman.meminjam');
    }

    /* Riwayat Pinjaman */
    public function riwayat(){
        $id = Auth::user()->id ;
        $pinjaman = Pinjaman::where('user_id', '=', $id)->orderBy('status','desc')->paginate(5);
        return view('pages.pinjaman.riwayat-pinjaman', compact('pinjaman'));
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
            'bunga_id' => 'required',
        ]);
        $user_id = $request->input('user_id');
        $bunga_id = $request->input('bunga_id');
        $simpanan_wajib = $request->input('simpanan_wajib');
        $simpanan_pokok = $request->input('simpanan_pokok');
        $jumlah_pinjaman = $request->input('jumlah_pinjaman');
        /* BUNGA */
        $bunga = Bunga::findOrFail($bunga_id);

        /* formula */
        /*$nilai1 = $jumlah_pinjaman * (($bunga->bunga / 12) / 100);
        $nilai2 = pow(( 1 + ( $bunga->bunga / 12 ) / 100), $bunga->bulan_bunga);
        $total_angsuran = $nilai1 / (1-1 / $nilai2);
        $total_pembayaran = $total_angsuran * $bunga->bulan_bunga;*/

        $nilai1 = $jumlah_pinjaman * ((($bunga->bunga * 12) / 12) / 100);
        $nilai2 = pow(( 1 + ( ($bunga->bunga * 12) / 12 ) / 100), $bunga->bulan_bunga);
        $total_angsuran = $nilai1 / (1-1 / $nilai2);
        $total_pembayaran = $total_angsuran * $bunga->bulan_bunga;
        /* formula */
        $request['status'] = 'menunggu';
        $request['jumlah_pinjaman_bunga'] = $total_pembayaran;
        $request['sisa_pinjaman'] = $total_pembayaran;
        $request['angsuran'] = $total_angsuran;
        $request['jangka_waktu_pinjam'] = $bunga->bulan_bunga;
        Pinjaman::create($request->all());

        $user = User::findOrFail($user_id);
        $user->simpanan_wajib = $request->input('simpanan_wajib');
        $user->simpanan_pokok = $request->input('simpanan_pokok');
        $user->save();

        \Flash::success('Pinjaman oleh: ' . $user->name .  ' ditambahkan.');
        return redirect('pinjaman/riwayat');
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
        return view('pages.pinjaman.show-pinjaman', compact('pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjam = Pinjaman::findOrFail($id);
        return view('pages.pinjaman.ubah-pinjaman', compact('pinjam'));
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
        $this->validate($request, [
            'user_id' => 'required',
            'bunga_id' => 'required',
        ]);

        $user_id = $request->input('user_id');
        $bunga_id = $request->input('bunga_id');
        $simpanan_wajib = $request->input('simpanan_wajib');
        $simpanan_pokok = $request->input('simpanan_pokok');
        $jumlah_pinjaman = $request->input('jumlah_pinjaman');
        /* BUNGA */
        $bunga = Bunga::findOrFail($bunga_id);

        $nilai1 = $jumlah_pinjaman * (($bunga->bunga / 12) / 100);
        $nilai2 = pow(( 1 + ( $bunga->bunga / 12 ) / 100), $bunga->bulan_bunga);
        $total_angsuran = $nilai1 / (1-1 / $nilai2);
        $total_pembayaran = $total_angsuran * $bunga->bulan_bunga;              
        
        $pinjaman = Pinjaman::findOrFail($id);
        $request['status'] = 'menunggu';
        $request['jumlah_pinjaman_bunga'] = $total_pembayaran;
        $request['sisa_pinjaman'] = $total_pembayaran;
        $request['angsuran'] = $total_angsuran;
        $request['jangka_waktu_pinjam'] = $bunga->bulan_bunga;
        $pinjaman->update($request->all());

        $user = User::findOrFail($user_id);
        $user->simpanan_wajib = $request->input('simpanan_wajib');
        $user->simpanan_pokok = $request->input('simpanan_pokok');
        $user->save();

        \Flash::success('ID Pinjaman: '. $pinjaman->id . ' berhasil diubah.');
        return redirect('pinjaman/riwayat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjaman = Pinjaman::find($id);
        Pinjaman::find($id)->delete();
        \Flash::success('ID Pinjaman: '. $pinjaman->id .' dibatalkan.');
        return redirect('pinjaman/riwayat');
    }
}