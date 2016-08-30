<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bunga;
use App\Http\Requests;

class BungaController extends Controller
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
        $data = Bunga::where('id', 'LIKE', '%'.$q.'%')->orderBy('id','desc')->paginate(15);

        return view('pages.kelola-bunga.kelola-bunga', compact('data','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-bunga.tambah-bunga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jumlah_bulan_bunga = 0; 
        $this->validate($request, [
            'nama' => 'required|max:255',
            'bunga' => 'required',
            'tahun_bunga' => 'required',
        ]);
        $bunga = new Bunga;
        $bunga->nama = $request->input('nama');
        $bunga->bunga = $request->input('bunga');
        $bunga->tahun_bunga = $request->input('tahun_bunga');
        if ($request->input('tahun_bunga')==1) {
            $jumlah_bulan_bunga = 12;
        }elseif ($request->input('tahun_bunga')==2) {
            $jumlah_bulan_bunga = 24;
        }elseif ($request->input('tahun_bunga')==3) {
            $jumlah_bulan_bunga = 36;
        }elseif ($request->input('tahun_bunga')==4) {
            $jumlah_bulan_bunga = 48;
        }elseif ($request->input('tahun_bunga')==5) {
            $jumlah_bulan_bunga = 60;
        }elseif ($request->input('tahun_bunga')==6) {
            $jumlah_bulan_bunga = 72;
        }elseif ($request->input('tahun_bunga')==7) {
            $jumlah_bulan_bunga = 84;
        }elseif ($request->input('tahun_bunga')==8) {
            $jumlah_bulan_bunga = 96;
        }elseif ($request->input('tahun_bunga')==9) {
            $jumlah_bulan_bunga = 108;
        }elseif ($request->input('tahun_bunga')==10) {
            $jumlah_bulan_bunga = 120;
        }elseif ($request->input('tahun_bunga')==11) {
            $jumlah_bulan_bunga = 132;
        }elseif ($request->input('tahun_bunga')==12) {
            $jumlah_bulan_bunga = 144;
        }elseif ($request->input('tahun_bunga')==13) {
            $jumlah_bulan_bunga = 156;
        }elseif ($request->input('tahun_bunga')==14) {
            $jumlah_bulan_bunga = 168;
        }elseif ($request->input('tahun_bunga')==15) {
            $jumlah_bulan_bunga = 180;
        }        
        $bunga->bulan_bunga = $jumlah_bulan_bunga;
        $bunga->save();
        \Flash::success($request->get('nama') . ' sebesar ' . $request->get('bunga') .  ' ditambahkan.');
        return redirect()->route('kelola.bunga.index');
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
        $bunga = Bunga::findOrFail($id);
        return view('pages.kelola-bunga.ubah-bunga', compact('bunga'));
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
        $jumlah_bulan_bunga = 0; 
        $this->validate($request, [
            'nama' => 'required|max:255',
            'bunga' => 'required',
            'tahun_bunga' => 'required',
        ]);
        $bunga = new Bunga;
        $bunga->nama = $request->input('nama');
        $bunga->bunga = $request->input('bunga');
        $bunga->tahun_bunga = $request->input('tahun_bunga');
        if ($request->input('tahun_bunga')==1) {
            $jumlah_bulan_bunga = 12;
        }elseif ($request->input('tahun_bunga')==2) {
            $jumlah_bulan_bunga = 24;
        }elseif ($request->input('tahun_bunga')==3) {
            $jumlah_bulan_bunga = 36;
        }elseif ($request->input('tahun_bunga')==4) {
            $jumlah_bulan_bunga = 48;
        }elseif ($request->input('tahun_bunga')==5) {
            $jumlah_bulan_bunga = 60;
        }elseif ($request->input('tahun_bunga')==6) {
            $jumlah_bulan_bunga = 72;
        }elseif ($request->input('tahun_bunga')==7) {
            $jumlah_bulan_bunga = 84;
        }elseif ($request->input('tahun_bunga')==8) {
            $jumlah_bulan_bunga = 96;
        }elseif ($request->input('tahun_bunga')==9) {
            $jumlah_bulan_bunga = 108;
        }elseif ($request->input('tahun_bunga')==10) {
            $jumlah_bulan_bunga = 120;
        }elseif ($request->input('tahun_bunga')==11) {
            $jumlah_bulan_bunga = 132;
        }elseif ($request->input('tahun_bunga')==12) {
            $jumlah_bulan_bunga = 144;
        }elseif ($request->input('tahun_bunga')==13) {
            $jumlah_bulan_bunga = 156;
        }elseif ($request->input('tahun_bunga')==14) {
            $jumlah_bulan_bunga = 168;
        }elseif ($request->input('tahun_bunga')==15) {
            $jumlah_bulan_bunga = 180;
        }        
        $bunga->bulan_bunga = $jumlah_bulan_bunga;
        $bunga->save();
        \Flash::success('Bunga: '. $request->get('nama') . ' berhasil diubah.');
        return redirect()->route('kelola.bunga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bunga::find($id)->delete();
        \Flash::success('Bunga berhasil dihapus.');
        return redirect()->route('kelola.bunga.index');
    }
}

