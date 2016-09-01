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
            //'keperluan' => 'required',
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
            /*'nama_lain' => 'required',
            'hubungan' => 'required',
            'nomor_telepon_lain' => 'required',
            'alamat_lain' => 'required',
            'rt_rw_lain' => 'required',
            'kelurahan_lain' => 'required',
            'kecamatan_lain' => 'required',
            'kota_lain' => 'required',
            'pos_lain' => 'required',*/

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
            'kepemilikan_rekening' => 'required',
            /*'nomor_wesel_pos' => 'required',
            'pemilik_nomor_wesel_pos' => 'required',
            'nomor_rek_gol' => 'required',
            'pemilik_nomor_rek_gol' => 'required',
            'nomor_rek_tabungan' => 'required',
            'pemilik_nomor_rek_tabungan' => 'required',*/            
            'nama_bank_penerima' => 'required',

            /* DATA TABUNGAN */
            'pin' => 'required|min:6',
        ]);
        /* MODEL USER */
        $tempUser = User::find($id);

        /* AKSI KE MODEL DATA ANGGOTA */
        $dataAnggota = new DataAnggota;
        //$dataAnggota->keperluan = $request->input('keperluan');
        $dataAnggota->user_id = $request->input('user_id');
        $dataAnggota->nama = $request->input('nama');
        $dataAnggota->jenis_layanan_jasa = $request->input('jenis_layanan_jasa');
        $dataAnggota->nama_suami_istri = $request->input('nama_suami_istri');
        $dataAnggota->nik = $request->input('nik');
        $dataAnggota->nama_ibu_kandung = $request->input('nama_ibu_kandung');
        $dataAnggota->agama = $request->input('agama');
        $dataAnggota->jenis_kelamin = $request->input('jenis_kelamin');
        $dataAnggota->tanggal_lahir = $request->input('tanggal_lahir');
        $dataAnggota->jumlah_tanggungan = $request->input('jumlah_tanggungan');
        $dataAnggota->identitas_dimiliki = $request->input('identitas_dimiliki');
        $dataAnggota->nomor_identitas = $request->input('nomor_identitas');
        $dataAnggota->alamat_identitas = $request->input('alamat_identitas');
        $dataAnggota->rt_rw_identitas = $request->input('rt_rw_identitas');
        $dataAnggota->kelurahan_identitas = $request->input('kelurahan_identitas');
        $dataAnggota->kecamatan_identitas = $request->input('kecamatan_identitas');
        $dataAnggota->kota_identitas = $request->input('kota_identitas');
        $dataAnggota->pos_identitas = $request->input('pos_identitas');
        $dataAnggota->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $dataAnggota->kewarganegaraan = $request->input('kewarganegaraan');
        $dataAnggota->npwp = $request->input('npwp');
        $dataAnggota->alamat_domisili = $request->input('alamat_domisili');
        $dataAnggota->rt_rw_domisili = $request->input('rt_rw_domisili');
        $dataAnggota->kelurahan_domisili = $request->input('kelurahan_domisili');
        $dataAnggota->kecamatan_domisili = $request->input('kecamatan_domisili');
        $dataAnggota->kota_domisili = $request->input('kota_domisili');
        $dataAnggota->pos_domisili = $request->input('pos_domisili');
        $dataAnggota->status_rumah = $request->input('status_rumah');
        $dataAnggota->nomor_telepon = $request->input('nomor_telepon');
        $dataAnggota->nomor_hp = $request->input('nomor_hp');
        $dataAnggota->alamat_surat_korespondensi = $request->input('alamat_surat_korespondensi');
        $dataAnggota->email = $request->input('email');
        $dataAnggota->nama_lain = $request->input('nama_lain');
        $dataAnggota->hubungan = $request->input('hubungan');
        $dataAnggota->nomor_telepon_lain = $request->input('nomor_telepon_lain');
        $dataAnggota->alamat_lain = $request->input('alamat_lain');
        $dataAnggota->rt_rw_lain = $request->input('rt_rw_lain');
        $dataAnggota->kelurahan_lain = $request->input('kelurahan_lain');
        $dataAnggota->kecamatan_lain = $request->input('kecamatan_lain');
        $dataAnggota->kota_lain = $request->input('kota_lain');
        $dataAnggota->pos_lain = $request->input('pos_lain');
        $dataAnggota->save();

        /* AKSI KE MODEL DATA PEKERJAAN */
        $dataPekerjaan = new DataPekerjaan;
        $dataPekerjaan->user_id = $request->input('user_id');
        $dataPekerjaan->pekerjaan = $request->input('pekerjaan');
        $dataPekerjaan->pekerjaan_lain = $request->input('pekerjaan_lain');
        $dataPekerjaan->penghasilan = $request->input('penghasilan');
        $dataPekerjaan->pengeluaran = $request->input('pengeluaran');
        $dataPekerjaan->tempat_kerja = $request->input('tempat_kerja');
        $dataPekerjaan->jenis_pekerjaan = $request->input('jenis_pekerjaan');
        $dataPekerjaan->alamat = $request->input('alamat');
        $dataPekerjaan->rt_rw = $request->input('rt_rw');
        $dataPekerjaan->kelurahan = $request->input('kelurahan');
        $dataPekerjaan->kecamatan = $request->input('kecamatan');
        $dataPekerjaan->kota = $request->input('kota');
        $dataPekerjaan->pos = $request->input('pos');
        $dataPekerjaan->nomor_telepon_kantor = $request->input('nomor_telepon_kantor');
        $dataPekerjaan->ext = $request->input('ext');
        $dataPekerjaan->fax = $request->input('fax');
        $dataPekerjaan->jabatan = $request->input('jabatan');
        $dataPekerjaan->lama_bekerja = $request->input('lama_bekerja');
        $dataPekerjaan->sumber_dana = $request->input('sumber_dana');
        $dataPekerjaan->sumber_dana_lain = $request->input('sumber_dana_lain');
        $dataPekerjaan->tujuan_pembukaan_rekening = $request->input('tujuan_pembukaan_rekening');
        $dataPekerjaan->tujuan_pembukaan_rekening_lain = $request->input('tujuan_pembukaan_rekening_lain');
        $dataPekerjaan->transaksi_pengambilan = $request->input('transaksi_pengambilan');
        $dataPekerjaan->transaksi_penyetoran = $request->input('transaksi_penyetoran');
        $dataPekerjaan->gaji_kotor = $request->input('gaji_kotor');
        $dataPekerjaan->gaji_bersih = $request->input('gaji_bersih');
        $dataPekerjaan->potongan_gaji_terakhir = $request->input('potongan_gaji_terakhir');
        $dataPekerjaan->save();

        /* AKSI KE MODEL CATATAN ANGGOTA*/
        $catatanPekerjaan = new CatatanAnggota;
        $catatanPekerjaan->user_id = $request->input('user_id');
        $catatanPekerjaan->nama_bank_penerima = $request->input('nama_bank_penerima');
        $catatanPekerjaan->save();

        /* AKSI KE MODEL DATA ANGGOTA UNTUK MENDAPATKAN DATA ANGGOTA YANG SUDAH DISIMPAN */
        //$tempDataAnggota = DataAnggota::where('user_id','=',$user->id)->first();

        /* AKSI KE MODEL TABUNGAN */
        $tabungan = new Tabungan;
        $tabungan->produk_id = 'a';
        $tabungan->user_id = $request->input('user_id');
        $tabungan->nama = $request->input('nama');
        $tabungan->alamat = $request->input('alamat');
        $tabungan->kelurahan = $request->input('kelurahan');
        $tabungan->kecamatan = $request->input('kecamatan');
        $tabungan->nik = $request->input('nik');
        $tabungan->tanggal_lahir = $request->input('tanggal_lahir');
        $tabungan->tanggal_pendaftaran = $tempUser->created_at;
        $tabungan->nama_ibu_kandung = $request->input('nama_ibu_kandung');
        $tabungan->jenis_kelamin = $request->input('jenis_kelamin');
        $tabungan->saldo_akhir = '0';
        $tabungan->status_rekening = 'aktif';
        $tabungan->pin = bcrypt($request['pin']);
        $tabungan->save();

        /* AKSI KE MODEL USER */
        $user = User::findOrFail($id);
        $user->status = 'aktif';
        $user->save();
        
        
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
