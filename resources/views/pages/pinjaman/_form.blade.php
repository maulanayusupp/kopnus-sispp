<div class="card">
    <div class="card-body card-padding">        
    	<center><b><h3>PINJAMAN KHUSUS ANGGOTA</h3></b></center>
    	<hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">ID Anggota</label>
                    <div class="col-sm-1">
                        <div class="fg-line">
                            <input type="text" class="form-control input-sm" name="user_id" value="{{ Auth::user()->id }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <label class="col-sm-3 control-label"><strong>{{ Auth::user()->name }}</strong></label>
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
                <div class="form-group{{ $errors->has('gaji') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Gaji</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::number('gaji', null, ['id'=>'num','onkeyup'=>"document.getElementById('gaji').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                        </div>
                        <span id="gaji"></span>
                        @if($errors->has('gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('kantor_juru_bayar') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Kantor Juru Bayar</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="kantor_juru_bayar">
                                <option value="KPC">KPC</option>
                                <option value="KPRK">KPRK</option>
                            </select>
                        </div>
                        @if($errors->has('kantor_juru_bayar'))
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
                <div class="form-group{{ $errors->has('pengelola_pensiun') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Pengelola Pensiun</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="pengelola_pensiun">
                                <option value="PT. ASABRI">PT. ASABRI</option>
                                <option value="PT. TASPEN">PT. TASPEN</option>
                            </select>
                        </div>
                        @if($errors->has('pengelola_pensiun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pengelola_pensiun') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('no_surat_keputusan_pensiun') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">No. Surat Keputusan Pensiun</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::text('no_surat_keputusan_pensiun', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor surat keputusan pensiun']) !!}
                        </div>
                        @if($errors->has('no_surat_keputusan_pensiun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_surat_keputusan_pensiun') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('no_identitas_pensiun') ? ' has-error' : '' }}">                    
                    <label class="col-sm-3 control-label">No. Kartu Identitas Pensiun</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::text('no_identitas_pensiun', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor kartu identitas pensiun']) !!}
                        </div>
                        @if($errors->has('no_identitas_pensiun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_identitas_pensiun') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>                    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('jenis_pinjaman') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Jenis Pinjaman</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="jenis_pinjaman">
                                <option value="makro">MAKRO</option>
                                <option value="mikro">MIKRO</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('kegunaan_pinjaman') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Kegunaan Pinjaman</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="kegunaan_pinjaman">
                                <option value="Investasi">INVESTASI</option>
                                <option value="Modal Kerja">MODAL KERJA</option>
                                <option value="Konsumtif">KONSUMTIF</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('jumlah_pinjaman') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Jumlah Pinjaman yang diajukan</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::number('jumlah_pinjaman', null, ['id'=>'num','onkeyup'=>"document.getElementById('jumlah_pinjaman').innerHTML = formatCurrency(this.value);",'class'=>'form-control input-sm','placeholder'=>'Nilai Penempatan Terbilang']) !!}
                        </div>
                        <span id="jumlah_pinjaman"></span>
                        @if($errors->has('jumlah_pinjaman'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_pinjaman') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('jumlah_pinjaman_terbilang') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Terbilang</label>
                    <div class="col-sm-7">
                        <div class="fg-line">
                            {!! Form::text('jumlah_pinjaman_terbilang', null, ['class'=>'form-control input-sm','placeholder'=>'Jumlah Pinjaman Terbilang']) !!}
                        </div>
                        @if($errors->has('jumlah_pinjaman_terbilang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_pinjaman_terbilang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('bunga_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Jangka Waktu Pinjam</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::select('bunga_id', [''=>'']+App\Bunga::lists('nama','id')->all(), null, ['class'=>'chosen']) !!}
                        </div>
                        @if($errors->has('bunga_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bunga_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="col-sm-1 control-label">Bulan</label>
                </div>
            </div>
        </div>
    @if(Auth::user()->simpanan_wajib != 50000)
        <hr>
        <center><b><h4>SIMPANAN WAJIB DAN POKOK</h4></b></center>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('simpanan_wajib') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Simpanan Wajib</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::text('simpanan_wajib', 50000, ['class'=>'form-control input-sm','placeholder'=>'Simpanan Wajib', 'readonly']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('simpanan_pokok') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Simpanan Pokok</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::text('simpanan_pokok', 5000, ['class'=>'form-control input-sm','placeholder'=>'Simpanan Pokok', 'readonly']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
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