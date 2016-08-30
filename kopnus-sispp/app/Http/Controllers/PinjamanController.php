<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
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
        $pinjaman = Pinjaman::where('user_id', '=', $id)->orderBy('id','desc')->paginate(5);
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
            'kantor_juru_bayar' => 'required'
        ]);
        $request['status'] = 'menunggu';
        Pinjaman::create($request->all());
        \Flash::success('Pinjaman oleh: ' . $request->get('kantor_juru_bayar') .  ' ditambahkan.');
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
