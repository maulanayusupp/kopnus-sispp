<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pembayaran;
use App\Pinjaman;
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

    public function index(Request $request)
    {
        $pinjaman_id = $request->get('pinjaman_id');
        if (isset($pinjaman_id)) {
            $pinjaman = Pinjaman::where('id', $pinjaman_id)->first();
            return view('pages.pembayaran.pembayaran', compact('pinjaman'));
        }else{
            return view('pages.pembayaran.pembayaran', compact('pinjaman'));
        }        
        
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
            'pinjaman_id' => 'required',
            'nama' => 'required',
            'tanggal_pembayaran',            
            'angsuran_nomor' => 'required',
            'jumlah_tagihan' => 'required',
            'jumlah_pembayaran' => 'required',
            'jumlah_pembayaran_terbilang' => 'required',
        ]);
        $pinjaman_id = $request->input('pinjaman_id');
        $jumlah_pembayaran = $request->input('jumlah_pembayaran');

        $pinjaman = Pinjaman::findOrFail($pinjaman_id);
        $sisa_pinjaman = $pinjaman->sisa_pinjaman;

        $hasil_pembayaran = ($sisa_pinjaman - $jumlah_pembayaran);
        $pinjaman->sisa_pinjaman = $hasil_pembayaran;    
        $request['sisa_pinjaman'] = $hasil_pembayaran;
        if ($hasil_pembayaran == 0) {
            $request['status'] = 'lunas';
            $pinjaman->status = 'lunas';
            $pinjaman->save();
        }else{
            $request['status'] = 'dibayar';
            $pinjaman->save();
        }
        
        Pembayaran::create($request->all());
        \Flash::success('Pembayaran oleh: ' . $request->input('nama') .  ' ditambahkan.');
        return redirect('kelola/pembayaran');
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
        /*$pembayaran = Pembayaran::findOrFail($id);
        $this->validate($request, [
            'user_id' => 'required',
            'nama' => 'required',
            'tanggal_pembayaran',
            'pinjaman_id' => 'required',
            'angsuran_nomor' => 'required',
            'jumlah_tagihan' => 'required',
            'jumlah_pembayaran' => 'required',
            'jumlah_pembayaran_terbilang' => 'required',
        ]);

        $pembayaran->update($request->all());
        \Flash::success('ID Pembayaran: '. $pembayaran->id . ' berhasil diubah.');
        return redirect('pembayaran/riwayat');*/
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
