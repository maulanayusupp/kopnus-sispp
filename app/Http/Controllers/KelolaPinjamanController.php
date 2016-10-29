<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use App\Http\Requests;
use Mail;



class KelolaPinjamanController extends Controller
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
    public function index(Request $request){
        
        $q = $request->get('q');
        if (isset($q)) {
            $pinjaman = Pinjaman::where('id', $q)->orderBy('status','desc')->paginate(20);
        }else{
            $pinjaman = Pinjaman::where('user_id', 'LIKE', '%'.$q.'%')->orderBy('status','desc')->paginate(10);
        }        
        return view('pages.kelola-pinjaman.kelola-pinjaman', compact('pinjaman','q'));
    }

    public function daftarVerifikasi(){
        $pinjaman = Pinjaman::where('status', 'menunggu')->orderBy('status','asc')->paginate(15);
        return view('pages.kelola-pinjaman.daftar-verifikasi', compact('pinjaman'));
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
        /* KIRIM EMAIL */
        /*$mail = Pinjaman::find(1)->toArray();
        Mail::send('auth.emails.mail', $mail, function($message) use ($mail) {
            $message->to('mitamufida@gmail.com');
            $message->subject('Verifikasi Pinjaman - Koperasi Nusantara');
        });
        /* MESSAGE SUCCESS */
        //dd('Mail Send Successfully');   

        \Flash::success('Pinjaman dengan ID Transaksi: '. $pinjaman->id .' diverifikasi dengan status: '. $request->input('status') );
        return redirect()->route('kelola.pinjaman.index');
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

    
}
