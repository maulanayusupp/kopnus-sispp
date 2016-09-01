
<center><b><h3>CATATAN ANGGOTA</h3></b></center>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <ol type="1">
                <li>Bersedia membayar Simpanan Pokok dan Simpanan Wajib sebesar yang telah ditentukan dan memenuhi semua ketentuan yang tertera dalam Anggaran Dasar, Anggaran Rumah Tangga, peraturan khusus dan kebijakan lainnya yang ada di KSP Nusantara</li>
                <li>Dengan ini bersedia membayar:
                    <ol type="a">
                        <li>Simpanan Pokok : Rp. 50.000,- (Lima Puluh Ribu Rupiah)</li>
                        <li>Simpanan Wajib : Rp. 5.000,- (Lima Ribu Rupiah) setiap bulannya</li>
                    </ol>
                </li>
                <li>Semua informasi dalam formulir ini adalah lengkap dan benar. dengan menandatangani formulir ini, maka saya terikat dengan syarat-syarat dan ketentuan-ketentuan anggota melalui KSP Nusantara dan bertanggung jawab sepenuhnya untuk membayar semua kewajiban yang muncul dengan disetujuinya fasilitas layanan jasa KSP Nusantara</li>
                <li>Rekening penampungan untuk pencairan pinjaman, imbalan Keanggotaan dan Simpanan:</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('kepemilikan_rekening') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Kepemilikan Rekening</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('kepemilikan_rekening', array('Tunai' => 'Tunai', 'Rekening Milik Sendiri' => 'Rekening Milik Sendiri', 'Rekening Pihak lain' => 'Rekening Pihak lain'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('kepemilikan_rekening'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kepemilikan_rekening') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_wesel_pos') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Wesel Pos</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nomor_wesel_pos', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Wesel Pos']) !!}
                </div>
                @if($errors->has('nomor_wesel_pos'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_wesel_pos') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pemilik_nomor_wesel_pos') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pemilik Nomor Wesel Pos</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('pemilik_nomor_wesel_pos', null, ['class'=>'form-control input-sm','placeholder'=>'Pemilik Nomor Wesel Pos']) !!}
                </div>
                @if($errors->has('pemilik_nomor_wesel_pos'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pemilik_nomor_wesel_pos') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_rek_gol') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Rekening Golongan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nomor_rek_gol', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Rekening Golongan']) !!}
                </div>
                @if($errors->has('nomor_rek_gol'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_rek_gol') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pemilik_nomor_rek_gol') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pemilik Nomor Rekening Gol</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('pemilik_nomor_rek_gol', null, ['class'=>'form-control input-sm','placeholder'=>'Pemilik Nomor Rekening Gol']) !!}
                </div>
                @if($errors->has('pemilik_nomor_rek_gol'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pemilik_nomor_rek_gol') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nomor_rek_tabungan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nomor Rekening Tabungan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nomor_rek_tabungan', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Rekening Tabungan']) !!}
                </div>
                @if($errors->has('nomor_rek_tabungan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_rek_tabungan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pemilik_nomor_rek_tabungan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Pemilik Nomor Rekening Tabungan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('pemilik_nomor_rek_tabungan', null, ['class'=>'form-control input-sm','placeholder'=>'Pemilik Nomor Rekening Tabungan']) !!}
                </div>
                @if($errors->has('pemilik_nomor_rek_tabungan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pemilik_nomor_rek_tabungan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama_bank_penerima') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nama Bank Penerima</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('nama_bank_penerima', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Bank Penerima']) !!}
                </div>
                @if($errors->has('nama_bank_penerima'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_bank_penerima') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>


