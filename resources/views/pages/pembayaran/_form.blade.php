<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pinjaman_id') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>ID Pinjaman</strong></label>
            <div class="col-sm-1">
                <div class="fg-line">
                    {!! Form::text('pinjaman_id', isset($pinjaman->id) ? $pinjaman->id : null, ['class'=>'form-control input-sm','readonly']) !!}
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
                    {!! Form::text('user_id', isset($pinjaman->user_id) ? $pinjaman->user_id : null, ['class'=>'form-control input-sm','readonly']) !!}
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
                    {!! Form::text('nama', isset($pinjaman->user->name) ? $pinjaman->user->name : null, ['class'=>'form-control input-sm','readonly']) !!}
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
        <div class="form-group{{ $errors->has('angsuran_nomor') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Angsuran Ke - </strong></label>
            <div class="col-sm-1">
                <div class="fg-line">
                    @if(isset($pinjaman->id))
                        <?php $angsuran = App\Pembayaran::where('pinjaman_id', $pinjaman->id)->count() + 1; ?>
                    @endif                    
                    {!! Form::text('angsuran_nomor', isset($angsuran) ? $angsuran : null, ['class'=>'form-control input-sm','readonly']) !!}
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
                    {!! Form::text('jumlah_tagihan', isset($pinjaman->sisa_pinjaman) ? $pinjaman->sisa_pinjaman : null, ['class'=>'form-control input-sm','readonly']) !!}
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
        <div class="form-group{{ $errors->has('jumlah_pembayaran') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Jumlah Pembayaran</strong></label>
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('jumlah_pembayaran', isset($pinjaman->angsuran) ? $pinjaman->angsuran : null, ['class'=>'form-control input-sm','readonly']) !!}
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