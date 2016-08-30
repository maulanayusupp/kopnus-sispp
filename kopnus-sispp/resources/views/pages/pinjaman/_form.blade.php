<div class="card">
    <div class="card-body card-padding">        
    	<center><b><h3>PINJAMAN KHUSUS ANGGOTA</h3></b></center>
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
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}{{ $errors->has('kantor_juru_bayar') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Kantor Juru Bayar</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::text('kantor_juru_bayar', null, ['class'=>'form-control input-sm','placeholder'=>'Kantor Juru Bayar']) !!}
                        </div>
                        @if($errors->has('kantor_juru_bayar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kantor_juru_bayar') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="col-sm-2 control-label">Pengelola Pensiun</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            {!! Form::text('pengelola_pensiun', null, ['class'=>'form-control input-sm','placeholder'=>'Pengelola Pensiun']) !!}
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
                    <label class="col-sm-2 control-label">No. Surat Keputusan Pensiun</label>
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
                    <label class="col-sm-2 control-label">No. Kartu Identitas Pensiun</label>
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
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('jenis_pinjaman') ? ' has-error' : '' }}">
                    <label class="col-sm-4 control-label">Jenis Pinjaman</label>
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
            <div class="col-sm-6">
                <div class="form-group{{ $errors->has('kegunaan_pinjaman') ? ' has-error' : '' }}">
                    <label class="col-sm-4 control-label">Kegunaan Pinjaman</label>
                    <div class="col-sm-4">
                        <div class="fg-line">
                            <select class="selectpicker" name="kegunaan_pinjaman">
                                <option value="Investasi">INVESTASI</option>
                                <option value="Modal Kerja">MODAL KERJA</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('jumlah_pinjaman') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Jumlah Pinjaman yang diajukan</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::number('jumlah_pinjaman', null, ['class'=>'form-control input-sm','placeholder'=>'Jumlah pinjaman']) !!}
                        </div>
                        @if($errors->has('jumlah_pinjaman'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_pinjaman') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="col-sm-1 control-label">Terbilang</label>
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
                <div class="form-group{{ $errors->has('jangka_waktu_pinjam') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Jangka Waktu Pinjam</label>
                    <div class="col-sm-1">
                        <div class="fg-line">
                            {!! Form::text('jangka_waktu_pinjam', null, ['class'=>'form-control input-sm','placeholder'=>'Bulan']) !!}
                        </div>
                        @if($errors->has('jangka_waktu_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jangka_waktu_pinjam') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="col-sm-1 control-label">Bulan</label>
                </div>
            </div>
        </div>

        <hr>
        <center><b><h4>PENDAPATAN DAN PINJAMAN LAINNYA</h4></b></center>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nama_kreditur') ? ' has-error' : '' }}">
                    <label class="col-sm-1 control-label">Nama Kreditur</label>
                    <div class="col-sm-3">
                        <div class="fg-line">
                            {!! Form::text('nama_kreditur', null, ['class'=>'form-control input-sm','placeholder'=>'Nama kreditur']) !!}
                        </div>
                    </div>
                    <label class="col-sm-1 control-label">No. Rekening</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::text('no_rek_kreditur', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor rekening kreditur']) !!}
                        </div>
                    </div>
                    <label class="col-sm-1 control-label">Sisa Angsuran</label>
                    <div class="col-sm-2">
                        <div class="fg-line">
                            {!! Form::text('sisa_angsuran_kreditur', null, ['class'=>'form-control input-sm','placeholder'=>'Sisa angsuran kreditur']) !!}
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="fg-line">
                            {!! Form::text('sisa_angsuran_bulan_kreditur', null, ['class'=>'form-control input-sm','placeholder'=>'Bulan']) !!}
                        </div>
                    </div>
                    <label class="col-sm-1 control-label">Bulan</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('penghasilan_bulanan_kreditur') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label">Penghasilan Pasangan/Bulan</label>
                    <div class="col-sm-6">
                        <div class="fg-line">
                            {!! Form::text('penghasilan_bulanan_kreditur', null, ['class'=>'form-control input-sm','placeholder'=>'Penghasilan Bulanan Kreditur']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-offset-9 col-sm-10">
                        <button type="submit" class="btn btn-primary">{{ isset($pinjam) ? 'Ubah Data Pinjaman' : 'Pinjam'}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>