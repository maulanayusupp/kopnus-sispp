
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
        <div class="form-group{{ $errors->has('produk_id') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label"><strong>Produk</strong></label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::select('produk_id', [''=>'']+App\Produk::lists('nama','id')->all(), null, ['class'=>'chosen']) !!}
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
        <button type="submit" class="btn btn-primary">{{ isset($tabungan) ? 'SUBMIT' : 'SUBMIT'}}</button>
    </center>
</div>