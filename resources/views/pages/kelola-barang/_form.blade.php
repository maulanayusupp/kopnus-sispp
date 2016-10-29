<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Nama Barang</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('nama', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Barang']) !!}
        </div>
        @if($errors->has('nama'))
            <span class="help-block">
                <strong>{{ $errors->first('nama') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
    <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('harga', null, ['class'=>'form-control input-sm','placeholder'=>'Harga Barang']) !!}
        </div>
        @if($errors->has('harga'))
            <span class="help-block">
                <strong>{{ $errors->first('harga') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Ubah' : 'Simpan'}}</button>
    </div>
</div>