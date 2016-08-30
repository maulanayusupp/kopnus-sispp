<div class="card">
    <div class="card-body card-padding">        
        <center><b><h3>SIMPANAN KHUSUS ANGGOTA</h3></b></center>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">ID Anggota</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <input type="text" class="form-control input-sm" name="user_id" value="{{ Auth::user()->id }}" readonly>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nomor_kartu_atm') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Kartu ATM</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <select class="selectpicker" name="kartu_atm">
                                <option value="Ya">YA</option>
                                <option value="Tidak">TIDAK</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-sm-2 control-label">Nomor Kartu</label>
                    <div class="col-sm-6">
                        <div class="fg-line">
                            {!! Form::text('nomor_kartu_atm', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Kartu ATM']) !!}
                        </div>
                        @if($errors->has('nomor_kartu_atm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_kartu_atm') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nilai_penempatan') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Nilai Penempatan</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::number('nilai_penempatan', null, ['class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan', 'number']) !!}
                        </div>
                        @if($errors->has('nilai_penempatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kantor_juru_bayar') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="col-sm-2 control-label">Terbilang</label>
                    <div class="col-sm-6">
                        <div class="fg-line">
                            {!! Form::text('nilai_penempatan_terbilang', null, ['class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                        </div>
                        @if($errors->has('nilai_penempatan_terbilang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nilai_penempatan_terbilang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('tingkat_imbalan') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Jangka Waktu</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <select class="selectpicker" name="jangka_waktu">
                                <option value="1">1 Bulan</option>
                                <option value="2">2 Bulan</option>
                                <option value="6">6 Bulan</option>
                                <option value="12">12 Bulan</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-sm-2 control-label">Tingkat Imbalan</label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {!! Form::text('tingkat_imbalan', null, ['class'=>'form-control input-sm','placeholder'=>'Tingkat Imbalan']) !!}
                        </div>
                        @if($errors->has('tingkat_imbalan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kantor_juru_bayar') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="col-sm-2 control-label-left">% Pertahun</label>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('status_perpanjangan') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Status Perpanjangan</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="status_perpanjangan">
                                <option value="Tidak Diperpanjang">Tidak Diperpanjang</option>
                                <option value="Diperpanjang Pokok">Diperpanjang Pokok</option>
                                <option value="Diperpanjang Pokok + Bunga">Diperpanjang Pokok + Bunga (p+i)</option>
                            </select>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nota_perpanjangan') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Nota Perpanjangan</label>
                    <div class="col-sm-5">
                        <div class="fg-line">
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('nota_perpanjangan', 'Diambil Sendiri', ['class'=>'form-control input-sm']) !!}
                                <i class="input-helper"></i>
                                Diambil Sendiri
                            </label>

                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('nota_perpanjangan', 'Dikirim ke Alamat', ['class'=>'form-control input-sm']) !!}
                                <i class="input-helper"></i>
                                Dikirim ke alamat surat
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="fg-line">
                            {!! Form::textarea('nota_perpanjangan_dikirim', null, ['class'=>'form-control input-sm','rows'=>'2','placeholder'=>'Dikirim ke alamat']) !!}
                        </div>
                        @if($errors->has('nota_perpanjangan_dikirim'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nota_perpanjangan_dikirim') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nama_referensi') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Nama Referensi</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::text('nama_referensi', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Referensi']) !!}
                        </div>
                        @if($errors->has('nama_referensi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_referensi') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-10">
                        <button type="submit" class="btn btn-primary">{{ isset($simpanan) ? 'Ubah Data Simpanan' : 'Simpan'}}</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>