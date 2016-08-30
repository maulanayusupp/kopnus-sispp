<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Nama Bunga</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('nama', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Bunga']) !!}
        </div>
        @if($errors->has('nama'))
            <span class="help-block">
                <strong>{{ $errors->first('nama') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('bunga') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Bunga</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('bunga', null, ['class'=>'form-control input-sm','placeholder'=>'Bunga']) !!}
        </div>
        @if($errors->has('bunga'))
            <span class="help-block">
                <strong>{{ $errors->first('bunga') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('tahun_bunga') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Lama Pinjaman</label>
    <div class="col-sm-2">
        <select name="tahun_bunga" class="chosen">
            <option value="1" selected="selected">1 Tahun</option>
            <option VALUE="2">2 Tahun</option>
            <option VALUE="3">3 Tahun</option>
            <option VALUE="4">4 Tahun</option>
            <option VALUE="5">5 Tahun</option>
            <option VALUE="6">6 Tahun</option>
            <option VALUE="7">7 Tahun</option>
            <option VALUE="8">8 Tahun</option>
            <option VALUE="9">9 Tahun</option>
            <option VALUE="10">10 Tahun</option>
            <option VALUE="11">11 Tahun</option>
            <option VALUE="12">12 Tahun</option>
            <option VALUE="13">13 Tahun</option>
            <option VALUE="14">14 Tahun</option>
            <option VALUE="15">15 Tahun</option>
        </select>
    </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">{{ isset($model) ? 'Ubah' : 'Simpan'}}</button>
    </div>
</div>