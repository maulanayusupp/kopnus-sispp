<center><b><h3>DATA ANGGOTA</h3></b></center>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('keperluan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Keperluan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    <label class="checkbox checkbox-inline m-r-20">
                        {!! Form::checkbox('keperluan[0]', 'Pinjaman', true) !!}<i class="input-helper"></i>Pinjaman
                    </label>
                    <label class="checkbox checkbox-inline m-r-20">
                        {!! Form::checkbox('keperluan[1]', 'Simpanan') !!}<i class="input-helper"></i>Simpanan
                    </label>
                </div>
                @if($errors->has('keperluan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('keperluan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">ID Anggota</label>
            <div class="col-sm-1">
                <div class="fg-line">
                    {!! Form::text('user_id', Auth::user()->id, ['class'=>'form-control input-sm','placeholder'=>'ID Anggota', 'readonly']) !!}
                </div>
                @if($errors->has('user_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nama Lengkap</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nama', Auth::user()->name, ['class'=>'form-control input-sm','placeholder'=>'Nama Lengkap', 'readonly']) !!}
                </div>
                @if($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jenis_layanan_jasa') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Jenis Layanan Jasa</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('jenis_layanan_jasa', array('Pinjaman Pensiun' => 'Pinjaman Pensiun', 'Pinjaman Mikro Karyawan Aktif' => 'Pinjaman Mikro Karyawan Aktif', 'Gadai' => 'Gadai', 'Simpanan Harian' => 'Simpanan Harian', 'Simpanan Berjangka' => 'Simpanan Berjangka'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('jenis_layanan_jasa'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_layanan_jasa') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama_suami_istri') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nama Suami/Istri</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nama_suami_istri', null, ['class'=>'form-control input-sm','placeholder'=>'Nama suami atau istri.']) !!}
                </div>
                @if($errors->has('nama_suami_istri'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_suami_istri') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nopen/NIK</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nik', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor induk kependudukan/nomor penduduk.']) !!}
                </div>
                @if($errors->has('nik'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nik') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama_ibu_kandung') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nama Ibu Kandung</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nama_ibu_kandung', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Ibu kandung.']) !!}
                </div>
                @if($errors->has('nama_ibu_kandung'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_ibu_kandung') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Agama</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::select('agama', array('Islam' => 'Islam', 'Katolik' => 'Katolik', 'Kristen' => 'Kristen', 'Hindu' => 'Hindu', 'Buda' => 'Buda'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('agama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('agama') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Jenis Kelamin</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    <label class="radio radio-inline m-r-20">
                        {!! Form::radio('jenis_kelamin', 'Laki - Laki', true) !!}<i class="input-helper"></i>Laki - Laki
                    </label>
                    <label class="radio radio-inline m-r-20">
                        {!! Form::radio('jenis_kelamin', 'Perempuan') !!}<i class="input-helper"></i>Perempuan
                    </label>
                </div>
                @if($errors->has('jenis_kelamin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Tanggal Lahir</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::date('tanggal_lahir', null, ['class'=>'form-control input-sm','placeholder'=>'Tanggal Lahir']) !!}
                </div>
                @if($errors->has('tanggal_lahir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jumlah_tanggungan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Jumlah Tanggungan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('jumlah_tanggungan', null, ['class'=>'form-control input-sm','placeholder'=>'Jumlah Tanggungan.']) !!}
                </div>
                @if($errors->has('jumlah_tanggungan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jumlah_tanggungan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('identitas_dimiliki') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Identitas yang Dimiliki</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('identitas_dimiliki', array('KTP' => 'KTP', 'SIM' => 'SIM', 'PASPOR' => 'PASPOR', 'KITAS' => 'KITAS'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('identitas_dimiliki'))
                    <span class="help-block">
                        <strong>{{ $errors->first('identitas_dimiliki') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Identitas</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nomor_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Identitas.']) !!}
                </div>
                @if($errors->has('nomor_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('alamat_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Alamat sesuai kartu identitas</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::textarea('alamat_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'Alamat sesuai kartu identitas.','rows'=>'2']) !!}
                </div>
                @if($errors->has('alamat_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('rt_rw_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">RT/RW</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('rt_rw_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'RT/RW']) !!}
                </div>
                @if($errors->has('rt_rw_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rt_rw_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kelurahan_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kelurahan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('kelurahan_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'Kelurahan']) !!}
                </div>
                @if($errors->has('kelurahan_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelurahan_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kecamatan_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kecamatan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('kecamatan_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'Kecamatan']) !!}
                </div>
                @if($errors->has('kecamatan_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kecamatan_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kota_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kota</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('kota_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'Kota']) !!}
                </div>
                @if($errors->has('kota_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kota_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pos_identitas') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pos</label>
            <div class="col-sm-1">
                <div class="fg-line">
                    {!! Form::text('pos_identitas', null, ['class'=>'form-control input-sm','placeholder'=>'Pos']) !!}
                </div>
                @if($errors->has('pos_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pos_identitas') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pendidikan_terakhir') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pendidikan Terakhir</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('pendidikan_terakhir', array('TK' => 'TK', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA','D3'=>'D3','S1'=>'S1','S2'=>'S2','S3'=>'S3'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('pendidikan_terakhir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pendidikan_terakhir') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kewarganegaraan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kewarganegaraan</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    <label class="radio radio-inline m-r-20">
                        {!! Form::radio('kewarganegaraan', 'WNI', true) !!}<i class="input-helper"></i>WNI
                    </label>
                    <label class="radio radio-inline m-r-20">
                        {!! Form::radio('kewarganegaraan', 'WNA') !!}<i class="input-helper"></i>WNA
                    </label>
                </div>
                @if($errors->has('kewarganegaraan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kewarganegaraan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">NPWP</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('npwp', null, ['class'=>'form-control input-sm','placeholder'=>'NPWP']) !!}
                </div>
                @if($errors->has('npwp'))
                    <span class="help-block">
                        <strong>{{ $errors->first('npwp') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('alamat_domisili') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Alamat Domisili</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('alamat_domisili', null, ['class'=>'form-control input-sm','placeholder'=>'Alamat Domisili']) !!}
                </div>
                @if($errors->has('alamat_domisili'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_domisili') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('rt_rw_domisili') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">RT/RW (Domisili)</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('rt_rw_domisili', null, ['class'=>'form-control input-sm','placeholder'=>'RT/RW (Domisili)']) !!}
                </div>
                @if($errors->has('rt_rw_domisili'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rt_rw_domisili') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kelurahan_domisili') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kelurahan (Domisili)</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('kelurahan_domisili', null, ['class'=>'form-control input-sm','placeholder'=>'Kelurahan (Domisili)']) !!}
                </div>
                @if($errors->has('kelurahan_domisili'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelurahan_domisili') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kecamatan_domisili') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kecamatan (Domisili)</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('kecamatan_domisili', null, ['class'=>'form-control input-sm','placeholder'=>'Kecamatan (Domisili)']) !!}
                </div>
                @if($errors->has('kecamatan_domisili'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kecamatan_domisili') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kota_domisili') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kota (Domisili)</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('kota_domisili', null, ['class'=>'form-control input-sm','placeholder'=>'Kota (Domisili)']) !!}
                </div>
                @if($errors->has('kota_domisili'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kota_domisili') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pos_domisili') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pos (Domisili)</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('pos_domisili', null, ['class'=>'form-control input-sm','placeholder'=>'Pos (Domisili)']) !!}
                </div>
                @if($errors->has('pos_domisili'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pos_domisili') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('status_rumah') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Status Rumah</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('status_rumah', array('Milik Sendiri' => 'Milik Sendiri', 'Orang Tua' => 'Orang Tua', 'Sewa' => 'Sewa'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('status_rumah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status_rumah') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_telepon') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Telepon</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('nomor_telepon', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Telepon']) !!}
                </div>
                @if($errors->has('nomor_telepon'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_telepon') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_hp') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Handphone</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('nomor_hp', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Handphone']) !!}
                </div>
                @if($errors->has('nomor_hp'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_hp') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('alamat_surat_korespondensi') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Alamat Surat Korespondensi</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::textarea('alamat_surat_korespondensi', null, ['class'=>'form-control input-sm','placeholder'=>'Alamat surat korespondensi','rows'=>'2']) !!}
                </div>
                @if($errors->has('alamat_surat_korespondensi'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_surat_korespondensi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Alamat E-mail</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('email', Auth::user()->email, ['class'=>'form-control input-sm','placeholder'=>'Alamat E-mail','readonly']) !!}
                </div>
                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<center><b><h4>Pihak yang dapat dihubungi dalam keadaan darurat (tidak satu rumah)</h4></b></center>

<hr>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('nama_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Nama']) !!}
                </div>
                @if($errors->has('nama_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('hubungan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Hubungan</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('hubungan', null, ['class'=>'form-control input-sm','placeholder'=>'hubungan']) !!}
                </div>
                @if($errors->has('hubungan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('hubungan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_telepon_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Telepon (lain)</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('nomor_telepon_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Telepon (lain)']) !!}
                </div>
                @if($errors->has('nomor_telepon_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_telepon_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('alamat_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Alamat</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::textarea('alamat_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Alamat','rows'=>'2']) !!}
                </div>
                @if($errors->has('alamat_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('rt_rw_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">RT/RW</label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('rt_rw_lain', null, ['class'=>'form-control input-sm','placeholder'=>'RT/RW']) !!}
                </div>
                @if($errors->has('rt_rw_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rt_rw_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kelurahan_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kelurahan </label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('kelurahan_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Kelurahan']) !!}
                </div>
                @if($errors->has('kelurahan_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelurahan_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kecamatan_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kecamatan</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('kecamatan_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Kecamatan']) !!}
                </div>
                @if($errors->has('kecamatan_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kecamatan_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kota_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kota</label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('kota_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Kota']) !!}
                </div>
                @if($errors->has('kota_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kota_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pos_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pos </label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('pos_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Pos']) !!}
                </div>
                @if($errors->has('pos_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pos_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

