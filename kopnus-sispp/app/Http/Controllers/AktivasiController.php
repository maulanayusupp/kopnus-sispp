<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatatanAnggota;
use App\DataAnggota;
use App\DataPekerjaan;
use App\Produk;
use App\Tabungan;
use App\User;
use App\Http\Requests;
use Carbon\Carbon;

class AktivasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail(decrypt($id));
        return view('pages.aktivasi.aktivasi', compact('user'));
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
            /* VALIDASI DATA ANGGOTA */
            'keperluan' => 'required',
            'user_id' => 'required',
            'nama' => 'required',
            'jenis_layanan_jasa' => 'required',
            'nama_suami_istri' => 'required',
            'nik' => 'required',
            'nama_ibu_kandung' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jumlah_tanggungan' => 'required',
            'identitas_dimiliki' => 'required',
            'nomor_identitas' => 'required',
            'alamat_identitas' => 'required',
            'rt_rw_identitas' => 'required',
            'kelurahan_identitas' => 'required',
            'kecamatan_identitas' => 'required',
            'kota_identitas' => 'required',
            'pos_identitas' => 'required',
            'pendidikan_terakhir' => 'required',
            'kewarganegaraan' => 'required',
            'npwp' => 'required',
            'alamat_domisili' => 'required',
            'rt_rw_domisili' => 'required',
            'kelurahan_domisili' => 'required',
            'kecamatan_domisili' => 'required',
            'kota_domisili' => 'required',
            'pos_domisili' => 'required',
            'status_rumah' => 'required',
            'nomor_telepon' => 'required',
            'nomor_hp' => 'required',
            'alamat_surat_korespondensi' => 'required',
            'email' => 'required',
            'nama_lain' => 'required',
            'hubungan' => 'required',
            'nomor_telepon_lain' => 'required',
            'alamat_lain' => 'required',
            'rt_rw_lain' => 'required',
            'kelurahan_lain' => 'required',
            'kecamatan_lain' => 'required',
            'kota_lain' => 'required',
            'pos_lain' => 'required',

            /* DATA PEKERJAAN */
            'pekerjaan' => 'required',
            'pekerjaan_lain' => 'required',
            'penghasilan' => 'required',
            'pengeluaran' => 'required',
            'tempat_kerja' => 'required',
            'jenis_pekerjaan' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'pos' => 'required',
            'nomor_telepon_kantor' => 'required',
            'ext' => 'required',
            'fax' => 'required',
            'jabatan' => 'required',
            'lama_bekerja' => 'required',
            'sumber_dana' => 'required',
            'sumber_dana_lain' => 'required',
            'tujuan_pembukaan_rekening' => 'required',
            'tujuan_pembukaan_rekening_lain' => 'required',
            'transaksi_pengambilan' => 'required',
            'transaksi_penyetoran' => 'required',
            'gaji_kotor' => 'required',
            'gaji_bersih' => 'required',
            'potongan_gaji_terakhir' => 'required',

            /* CATATAN ANGGOTA */
            'user_id' => 'required',
            /*
            'kepemilikan_rekening' => 'required',
            'nomor_wesel_pos' => 'required',
            'pemilik_nomor_wesel_pos' => 'required',
            'nomor_rek_gol' => 'required',
            'pemilik_nomor_rek_gol' => 'required',
            'nomor_rek_tabungan' => 'required',
            'pemilik_nomor_rek_tabungan' => 'required',
            */
            'nama_bank_penerima' => 'required',

            /* DATA TABUNGAN */
            'pin' => 'required|min:6|confirmed',
        ]);
        /* AKSI KE MODEL USER */
        $user = User::findOrFail($id);
        $user->status = 'aktif';
        $user->save();
        
        /* AKSI KE MODEL DATA ANGGOTA */
        $dataAnggota = new DataAnggota;
        $dataAnggota->update($request->all());
        /* AKSI KE MODEL DATA PEKERJAAN */
        $dataPekerjaan = new DataPekerjaan;

        /* AKSI KE MODEL CATATAN ANGGOTA*/
        $catatanPekerjaan = new CatatanAnggota;

        /* AKSI KE MODEL TABUNGAN */
        $tabungan = Tabungan::find();
        $tabungan->pin = bcrypt($request['pin']);
        
        //$bunga->update($request->all());
        \Flash::success('Aktivasi telah dilakukan.');
        return redirect('home');
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
