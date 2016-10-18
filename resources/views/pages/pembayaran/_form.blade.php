<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('tanggal_pembayaran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Tanggal Pembayaran</strong></label>
            <div class="col-sm-2">
                <div class="fg-line">
                    {!! Form::date('tanggal_pembayaran', Carbon\Carbon::now(), ['class'=>'form-control input-sm','placeholder'=>'Tanggal Pembayaran','readonly']) !!}
                </div>
                @if($errors->has('tanggal_pembayaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_pembayaran') }}</strong>
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
                    {!! Form::select('user_id', [''=>'']+App\User::lists('id','id')->all(), null, ['class'=>'chosen']) !!}
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
            <label class="col-sm-3 control-label"><strong>Nama</strong></label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('user_id', [''=>'']+App\User::lists('name','name')->all(), null, ['class'=>'chosen']) !!}
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
        <div class="form-group{{ $errors->has('pinjaman_id') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Nomor Pinjaman</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::select('pinjaman_id', [''=>'']+App\Pinjaman::lists('id','id')->all(), null, ['class'=>'chosen']) !!}
                </div>
                @if($errors->has('pinjaman_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pinjaman_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('angsuran_nomor') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Angsuran Ke - </strong></label>
            <div class="col-sm-1">
                <div class="fg-line">
                    {!! Form::text('angsuran_nomor', null, ['class'=>'form-control input-sm']) !!}
                </div>
                @if($errors->has('angsuran_nomor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('angsuran_nomor') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jumlah_tagihan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Jumlah Tagihan</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::number('jumlah_tagihan', null, ['class'=>'form-control input-sm','placeholder'=>'Jumlah Tagihan']) !!}
                </div>
                @if($errors->has('jumlah_tagihan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jumlah_tagihan') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pokok') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Pokok</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::number('pokok', null, ['class'=>'form-control input-sm','placeholder'=>'Pokok']) !!}
                </div>
                @if($errors->has('pokok'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pokok') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('bunga') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Bunga</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::number('bunga', null, ['class'=>'form-control input-sm','placeholder'=>'Bunga']) !!}
                </div>
                @if($errors->has('bunga'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bunga') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jumlah_pembayaran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Jumlah Pembayaran</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::number('jumlah_pembayaran', null, ['class'=>'form-control input-sm','placeholder'=>'Jumlah Pembayaran']) !!}
                </div>
                @if($errors->has('jumlah_pembayaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jumlah_pembayaran') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('jumlah_pembayaran_terbilang') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Jumlah Pembayaran Terbilang</strong></label>
            <div class="col-sm-6">
                <div class="fg-line">
                    {!! Form::textarea('jumlah_pembayaran_terbilang', null, ['class'=>'form-control input-sm','placeholder'=>'Jumlah Pembayaran Terbilang','rows'=>'2']) !!}
                </div>
                @if($errors->has('jumlah_pembayaran_terbilang'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jumlah_pembayaran_terbilang') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('cara_pembayaran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Cara Pembayaran</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::select('cara_pembayaran', array('auto-debit' => 'Auto Debit'), null, ['class'=>'chosen','readonly']) !!}
                </div>
                @if($errors->has('cara_pembayaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cara_pembayaran') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Keterangan</strong></label>
            <div class="col-sm-5">
                <div class="fg-line">
                    {!! Form::textarea('keterangan', null, ['class'=>'form-control input-sm','placeholder'=>'Keterangan atau Catatan Pembayaran','rows'=>'3']) !!}
                </div>
                @if($errors->has('keterangan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('keterangan') }}</strong>
                    </span>
                @endif
            </div>
        </div>                    
    </div>
</div>

<hr>

<div class="form-group">
    <center>
        <button type="submit" class="btn btn-primary">{{ isset($pembayaran) ? 'Ubah ' : 'Bayar'}}</button>
    </center>
</div>