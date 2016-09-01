<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Nama</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('nama', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Lengkap']) !!}
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
        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>ID Anggota</strong></label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::text('user_id', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Lengkap',isset($tabungan) ?  'readonly' : '']) !!}
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
        <div class="form-group{{ $errors->has('produk_id') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Produk</strong></label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('produk_id', array('' => '', '' => ''), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('produk_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('produk_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Alamat</strong></label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::textarea('alamat', null, ['class'=>'form-control input-sm','placeholder'=>'Alamat Lengkap','rows'=>'2']) !!}
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
        <div class="form-group{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Kelurahan</strong></label>
            <div class="col-sm-2">
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
            <label class="col-sm-3 control-label"><strong>Kecamatan</strong></label>
            <div class="col-sm-2">
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
        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>NIK</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('nik', null, ['class'=>'form-control input-sm','placeholder'=>'Nomor Penduduk/KTP']) !!}
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
        <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Tanggal_lahir</strong></label>
            <div class="col-sm-2">
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
        <div class="form-group{{ $errors->has('tanggal_pendaftaran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Tanggal Pendaftaran</strong></label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::date('tanggal_pendaftaran', null, ['class'=>'form-control input-sm','placeholder'=>'Tanggal Pendaftaran',isset($tabungan) ?  'readonly' : '']) !!}
                </div>
                @if($errors->has('tanggal_pendaftaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_pendaftaran') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('nama_ibu_kandung') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Nama Ibu Kandung</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('nama_ibu_kandung', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Ibu Kandung']) !!}
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
        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Jenis Kelamin</strong></label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::select('jenis_kelamin', array('Laki - Laki' => 'Laki - Laki', 'Perempuan' => 'Perempuan'), null, ['class'=>'chosen']) !!}
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
        <div class="form-group{{ $errors->has('saldo_akhir') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Saldo Akhir</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('saldo_akhir', null, ['class'=>'form-control input-sm','placeholder'=>'Saldo Akhir']) !!}
                </div>
                @if($errors->has('saldo_akhir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('saldo_akhir') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('status_rekening') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Status Rekening</strong></label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::select('status_rekening', array('aktif' => 'Aktif', 'tidak-aktif' => 'Tidak Aktif'), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('status_rekening'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status_rekening') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>
<hr>
<div class="form-group">
    <center>
        <button type="submit" class="btn btn-primary">{{ isset($tabungan) ? 'Simpan' : 'Simpan'}}</button>
    </center>
</div>