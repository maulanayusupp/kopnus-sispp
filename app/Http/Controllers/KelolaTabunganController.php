<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
use Carbon\Carbon;
use App\Http\Requests;

class KelolaTabunganController extends Controller
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
            $tabungans = Tabungan::where('id', $q)->orderBy('id','desc')->paginate(10);
        }else{
            $tabungans = Tabungan::where('id', 'LIKE', '%'.$q.'%')->orderBy('id','desc')->paginate(10);    
        }
        
        return view('pages.kelola-tabungan.kelola-tabungan', compact('tabungans','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-tabungan.tambah-tabungan');
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
        ]);
        /*$tabungan = new Tabungan; 
        $tabungan->save($request->all());*/
        Tabungan::create($request->all());        
        \Flash::success('Rekening Tabungan: ' . $request->input('nama') . ' Ditambahkan.');
        return redirect()->route('kelola.tabungan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('pages.kelola-tabungan.show-tabungan', compact('tabungan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('pages.kelola-tabungan.ubah-tabungan', compact('tabungan'));
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
        $tabungan = Tabungan::findOrFail($id);
        $this->validate($request, [
            'user_id' => 'required',
        ]);

        $tabungan->update($request->all());
        \Flash::success('Nomor Rekening: ' . $tabungan->id . ' berhasil diubah.');
        return redirect()->route('kelola.tabungan.index');
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
