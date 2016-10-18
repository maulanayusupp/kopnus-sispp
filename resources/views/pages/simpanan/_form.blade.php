<div class="card">
    <div class="card-body card-padding">        
        <center><b><h3>TABUNGAN KHUSUS ANGGOTA</h3></b></center>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">ID Anggota</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::select('user_id', [''=>'']+App\User::lists('id','id')->all(), null, ['class'=>'chosen']) !!}
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nomor_kartu_atm') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Nomor Kartu ATM</label>
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
                    <label class="col-sm-3 control-label">Nilai Penempatan</label>
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
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nilai_penempatan_terbilang') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Terbilang</label>
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
                <div class="form-group{{ $errors->has('jangka_waktu') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Jangka Waktu</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            <select class="selectpicker" name="jangka_waktu">
                                <option value="1">1 Bulan</option>
                                <option value="2">2 Bulan</option>
                                <option value="6">6 Bulan</option>
                                <option value="12">12 Bulan</option>
                            </select>
                        </div>
                        @if($errors->has('jangka_waktu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jangka_waktu') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('tingkat_imbalan') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Tingkat Imbalan</label>
                    <div class="col-sm-1">
                        <div class="fg-line">
                            {!! Form::text('tingkat_imbalan', null, ['class'=>'form-control input-sm','placeholder'=>'Tingkat']) !!}
                        </div>
                        @if($errors->has('tingkat_imbalan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tingkat_imbalan') }}</strong>
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
                    <label class="col-sm-3 control-label">Status Perpanjangan</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="status_perpanjangan">
                                <option value="Tidak Diperpanjang">Tidak Diperpanjang</option>
                                <option value="Diperpanjang Pokok">Diperpanjang Pokok</option>
                                <option value="Diperpanjang Pokok + Bunga">Diperpanjang Pokok + Bunga (p+i)</option>
                            </select>
                        </div>
                        @if($errors->has('status_perpanjangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status_perpanjangan') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nama_referensi') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Nama Referensi</label>
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
                    <center>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </center>                        
                </div>
            </div>
        </div>

    </div>
</div>