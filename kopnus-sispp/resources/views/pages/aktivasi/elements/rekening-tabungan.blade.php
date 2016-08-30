<center><b><h3>REKENING TABUNGAN</h3></b></center>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">PIN Rekening Tabungan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('pin', null, ['class'=>'form-control input-sm','placeholder'=>'Buat PIN Rekening Tabungan']) !!}
                </div>
                @if($errors->has('pin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pin') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group{{ $errors->has('pin_confirmation') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Konfirmasi PIN Rekening Tabungan</label>
            <div class="col-sm-4">
                <div class="fg-line">
                    {!! Form::text('pin_confirmation', null, ['class'=>'form-control input-sm','placeholder'=>'Konfirmasi PIN Rekening Tabungan.']) !!}
                </div>
                @if($errors->has('pin_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pin_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>
