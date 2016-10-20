
<center><b><h3>DATA PEKERJAAN</h3></b></center>
<hr>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pekerjaan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('pekerjaan', array('Pegawai Negeri' => 'Pegawai Negeri', 'Karyawan' => 'Karyawan', 'ABRI' => 'ABRI', 'Wiraswasta' => 'Wiraswasta'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('pekerjaan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pekerjaan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pekerjaan_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pekerjaan Lain</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('pekerjaan_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Pekerjaan Lain']) !!}
                </div>
                @if($errors->has('pekerjaan_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pekerjaan_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('penghasilan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Penghasilan/Bulan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::number('penghasilan', null, ['id'=>'num','onkeyup'=>"document.getElementById('penghasilan').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                </div>
                <span id="penghasilan"></span>
                @if($errors->has('penghasilan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('penghasilan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pengeluaran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pengeluaran/Bulan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::number('pengeluaran', null, ['id'=>'num','onkeyup'=>"document.getElementById('pengeluaran').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                </div>
                <span id="pengeluaran"></span>
                @if($errors->has('pengeluaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pengeluaran') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('tempat_kerja') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nama Kantor/Usaha</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('tempat_kerja', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Kantor/Usaha']) !!}
                </div>
                @if($errors->has('tempat_kerja'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tempat_kerja') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jenis_pekerjaan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Jenis Usaha/Pekerjaan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('jenis_pekerjaan', null, ['class'=>'form-control input-sm','placeholder'=>'Jenis Usaha/Pekerjaan']) !!}
                </div>
                @if($errors->has('jenis_pekerjaan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_pekerjaan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Alamat Kantor</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('alamat', null, ['class'=>'form-control input-sm','placeholder'=>'Alamat Kantor']) !!}
                </div>
                @if($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('rt_rw') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">RT/RW</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('rt_rw', null, ['class'=>'form-control input-sm','placeholder'=>'RT/RW']) !!}
                </div>
                @if($errors->has('rt_rw'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rt_rw') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kelurahan</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('kelurahan', null, ['class'=>'form-control input-sm','placeholder'=>'Kelurahan']) !!}
                </div>
                @if($errors->has('kelurahan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelurahan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kecamatan</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('kecamatan', null, ['class'=>'form-control input-sm','placeholder'=>'Kecamatan']) !!}
                </div>
                @if($errors->has('kecamatan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kecamatan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kota') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kota</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('kota', null, ['class'=>'form-control input-sm','placeholder'=>'Kota']) !!}
                </div>
                @if($errors->has('kota'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kota') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pos') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pos</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('pos', null, ['class'=>'form-control input-sm','placeholder'=>'Pos']) !!}
                </div>
                @if($errors->has('pos'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pos') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_telepon_kantor') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Telepon Kantor</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('nomor_telepon_kantor', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Telepon Kantor']) !!}
                </div>
                @if($errors->has('nomor_telepon_kantor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_telepon_kantor') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('ext') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Ext</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('ext', null, ['class'=>'form-control input-sm','placeholder'=>'Ext']) !!}
                </div>
                @if($errors->has('ext'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ext') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Fax</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('fax', null, ['class'=>'form-control input-sm','placeholder'=>'Fax']) !!}
                </div>
                @if($errors->has('fax'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fax') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Jabatan Pekerjaan</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('jabatan', null, ['class'=>'form-control input-sm','placeholder'=>'Jabatan Pekerjaan']) !!}
                </div>
                @if($errors->has('jabatan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jabatan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('lama_bekerja') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Lama Bekerja</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('lama_bekerja', array('< 2 Tahun' => '< 2 Tahun', '2 s/d < 3 Tahun' => '2 s/d < 3 Tahun', '3 s/d < 5 Tahun' => '3 s/d < 5 Tahun', '> 5 Tahun' => '> 5 Tahun'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('lama_bekerja'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lama_bekerja') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('sumber_dana') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Sumber Dana</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('sumber_dana', array('Hasil Usaha' => 'Hasil Usaha', 'Hasil Investasi' => 'Hasil Investasi', 'Gaji' => 'Gaji'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('sumber_dana'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sumber_dana') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('sumber_dana_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Sumber Dana Lain</label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::text('sumber_dana_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Sumber Dana Lain']) !!}
                </div>
                @if($errors->has('sumber_dana_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sumber_dana_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('tujuan_pembukaan_rekening') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Tujuan Pembukaan Rekening</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('tujuan_pembukaan_rekening', array('Investasi' => 'Investasi', 'Operasional Harian' => 'Operasional Harian'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('tujuan_pembukaan_rekening'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tujuan_pembukaan_rekening') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('tujuan_pembukaan_rekening_lain') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Tujuan Lainnya</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('tujuan_pembukaan_rekening_lain', null, ['class'=>'form-control input-sm','placeholder'=>'Tujuan Lainya']) !!}
                </div>
                @if($errors->has('tujuan_pembukaan_rekening_lain'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tujuan_pembukaan_rekening_lain') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('transaksi_pengambilan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Transaksi Pengambilan/Bulan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('transaksi_pengambilan', array('< Rp. 5 Juta' => '< Rp. 5 Juta', 'Rp. 5 Juta S/D < 25 Juta' => 'Rp. 5 Juta S/D < 25 Juta', 'Rp. 25 Juta S/D 100 Juta' => 'Rp. 25 Juta S/D 100 Juta', 'Rp. 100 Juta S/D 500 Juta' => 'Rp. 100 Juta S/D 500 Juta', 'Rp. > 500 Juta' => 'Rp. > 500 Juta'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('transaksi_pengambilan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('transaksi_pengambilan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('transaksi_penyetoran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Transaksi Penyetoran/Bulan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('transaksi_penyetoran', array('< Rp. 5 Juta' => '< Rp. 5 Juta', 'Rp. 5 Juta S/D < 25 Juta' => 'Rp. 5 Juta S/D < 25 Juta', 'Rp. 25 Juta S/D 100 Juta' => 'Rp. 25 Juta S/D 100 Juta', 'Rp. 100 Juta S/D 500 Juta' => 'Rp. 100 Juta S/D 500 Juta', 'Rp. > 500 Juta' => 'Rp. > 500 Juta'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('transaksi_penyetoran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('transaksi_penyetoran') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('gaji_kotor') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Gaji Kotor Bulan Terakhir</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::number('gaji_kotor', null, ['id'=>'num','onkeyup'=>"document.getElementById('gaji_kotor').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                </div>
                <span id="gaji_kotor"></span>
                @if($errors->has('gaji_kotor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gaji_kotor') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('gaji_bersih') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Gaji Bersih Bulan Terakhir</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::number('gaji_bersih', null, ['id'=>'num','onkeyup'=>"document.getElementById('gaji_bersih').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                </div>
                <span id="gaji_bersih"></span>
                @if($errors->has('gaji_bersih'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gaji_bersih') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('potongan_gaji_terakhir') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Potongan Gaji Terakhir</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::number('potongan_gaji_terakhir', null, ['id'=>'num','onkeyup'=>"document.getElementById('potongan_gaji_terakhir').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                </div>
                <span id="potongan_gaji_terakhir"></span>
                @if($errors->has('potongan_gaji_terakhir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('potongan_gaji_terakhir') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

