<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\Http\Requests;

class KelolaPembayaranController extends Controller
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
            $pembayarans = Pembayaran::where('user_id', $q)->orderBy('created_at','desc')->paginate(10);
        }else{
            $pembayarans = Pembayaran::where('id', 'LIKE', '%'.$q.'%')->orderBy('created_at','desc')->paginate(10);    
        }
        
        return view('pages.kelola-pembayaran.kelola-pembayaran', compact('pembayarans','q'));
    }

    public function daftarVerifikasi(){
        $pembayarans = Pembayaran::where('status', 'menunggu')->orderBy('status','desc')->paginate(15);
        return view('pages.kelola-pembayaran.daftar-verifikasi', compact('pembayarans'));
    }

    public function showVerifikasi(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pages.kelola-pembayaran.verifikasi-pembayaran', compact('pembayaran'));
    }

    public function verifikasi(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->only('status'));        
        \Flash::success('Pembayaran dengan ID Transaksi: '. $pembayaran->id .' diverifikasi dengan status: '. $request->input('status') );
        return redirect()->route('kelola.pembayaran.index');
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
        return view('pages.kelola-pembayaran.show-pembayaran', compact('pembayaran'));
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
}
