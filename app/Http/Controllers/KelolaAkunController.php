<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DataAnggota;
use App\DataPekerjaan;
use App\Http\Requests;

class KelolaAkunController extends Controller
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
            $users = User::where('id', $q)->orderBy('role','asc')->paginate(10);
        }else{
            $users = User::where('id', 'LIKE', '%'.$q.'%')->orderBy('role','asc')->paginate(10);    
        }
        
        return view('pages.kelola-akun.kelola-akun', compact('users','q'));
    }

    public function daftarMember()
    {
        $users = User::where('role', 'member')->orderBy('id','desc')->paginate(10);
        return view('pages.kelola-akun.daftar-member', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-akun.tambah-akun');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->status = 'aktif';    
        $user->save();        
        
        \Flash::success($request->get('email') . ' Akun ditambahkan.');
        return redirect()->route('kelola.akun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.kelola-akun.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.kelola-akun.ubah-akun', compact('user'));
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
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        $user->update($request->all());
        \Flash::success($request->get('name') . ' berhasil diubah.');
        return redirect()->route('kelola.akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        \Flash::success('Akun berhasil dihapus.');
        return redirect()->route('kelola.akun.index');
    }

    public function dataAnggota(Request $request, $id)
    {
        $dataAnggota = DataAnggota::where('user_id',$id)->first();
        return view('pages.kelola-akun.ubah-data-anggota', compact('dataAnggota'));
    }

    public function ubahDataAnggota(Request $request)
    {
        $dataAnggota = DataAnggota::where('user_id',$request->input('user_id'))->first();
        /* AKSI KE MODEL DATA ANGGOTA */
        $keperluan = implode(",", $request->get('keperluan'));
        $dataAnggota->keperluan = $keperluan;
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
        $dataAnggota->no_npwp = $request->input('no_npwp');
        $dataAnggota->alamat_domisili = $request->input('alamat_domisili');
        $dataAnggota->rt_rw_domisili = $request->input('rt_rw_domisili');
        $dataAnggota->kelurahan_domisili = $request->input('kelurahan_domisili');
        $dataAnggota->kecamatan_domisili = $request->input('kecamatan_domisili');
        $dataAnggota->kota_domisili = $request->input('kota_domisili');
        $dataAnggota->pos_domisili = $request->input('pos_domisili');
        $dataAnggota->status_rumah = $request->input('status_rumah');
        $dataAnggota->kode_wilayah = $request->input('kode_wilayah');
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

        if ($request->hasFile('skp')) {
            $skpname = null;
            $upload_file = $request->file('skp');
            $extension = $upload_file->getClientOriginalExtension();
            $skpname = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'dokumen';
            $upload_file->move($destinationPath, $skpname);
            if ($dataAnggota->skp) {
                $old_file = $dataAnggota->skp;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'dokumen'. DIRECTORY_SEPARATOR . $dataAnggota->skp;
                try {
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $dataAnggota->skp = $skpname;
        }
        if ($request->hasFile('ktp')) {
            $ktpname = null;
            $upload_file = $request->file('ktp');
            $extension = $upload_file->getClientOriginalExtension();
            $ktpname = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'dokumen';
            $upload_file->move($destinationPath, $ktpname);
            if ($dataAnggota->ktp) {
                $old_file = $dataAnggota->ktp;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'dokumen'. DIRECTORY_SEPARATOR . $dataAnggota->ktp;
                try {
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $dataAnggota->ktp = $ktpname;
        }
        if ($request->hasFile('npwp')) {
            $npwpname = null;
            $upload_file = $request->file('npwp');
            $extension = $upload_file->getClientOriginalExtension();
            $npwpname = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'dokumen';
            $upload_file->move($destinationPath, $npwpname);
            if ($dataAnggota->npwp) {
                $old_file = $dataAnggota->npwp;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'dokumen'. DIRECTORY_SEPARATOR . $dataAnggota->npwp;
                try {
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $dataAnggota->npwp = $npwpname;
        }
        if ($request->hasFile('kk')) {
            $kkname = null;
            $upload_file = $request->file('kk');
            $extension = $upload_file->getClientOriginalExtension();
            $kkname = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'dokumen';
            $upload_file->move($destinationPath, $kkname);
            if ($dataAnggota->kk) {
                $old_file = $dataAnggota->kk;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'dokumen'. DIRECTORY_SEPARATOR . $dataAnggota->kk;
                try {
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $dataAnggota->kk = $kkname;
        }
        if ($request->hasFile('struk_gaji')) {
            $struk_gaji_name = null;
            $upload_file = $request->file('struk_gaji');
            $extension = $upload_file->getClientOriginalExtension();
            $struk_gaji_name = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'dokumen';
            $upload_file->move($destinationPath, $struk_gaji_name);
            if ($dataAnggota->struk_gaji) {
                $old_file = $dataAnggota->struk_gaji;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'dokumen'. DIRECTORY_SEPARATOR . $dataAnggota->struk_gaji;
                try {
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $dataAnggota->struk_gaji = $struk_gaji_name;
        }

        $dataAnggota->save();
        \Flash::success('Data Berhasil Diubah');
        return redirect()->route('kelola.akun.index');
    }

    public function dataPekerjaan(Request $request, $id)
    {
        $dataPekerjaan = DataPekerjaan::where('user_id',$id)->first();
        return view('pages.kelola-akun.ubah-data-pekerjaan', compact('dataPekerjaan'));
    }

    public function ubahDataPekerjaan(Request $request)
    {
        $dataPekerjaan = DataPekerjaan::where('user_id',$request->input('user_id'))->first();
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
        \Flash::success('Data Berhasil Diubah');
        return redirect()->route('kelola.akun.index');
    }


}

