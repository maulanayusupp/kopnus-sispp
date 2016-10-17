<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Nama Produk</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('nama', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Produk']) !!}
        </div>
        @if($errors->has('nama'))
            <span class="help-block">
                <strong>{{ $errors->first('nama') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">{{ isset($model) ? 'Ubah' : 'Simpan'}}</button>
    </div>
</div>