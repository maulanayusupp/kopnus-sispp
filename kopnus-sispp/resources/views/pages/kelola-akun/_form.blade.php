<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('name', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Lengkap']) !!}
        </div>
        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
        <div class="fg-line">
            {!! Form::text('email', null, ['class'=>'form-control input-sm','placeholder'=>'Nama Lengkap']) !!}
        </div>
        @if($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Hak Akses</label>
    <div class="col-sm-2">
        <select name="role" class="chosen">
            <option value="admin" selected="selected">Admin</option>
            <option VALUE="member">Member</option>
        </select>
    </div>
    @if($errors->has('role'))
        <span class="help-block">
            <strong>{{ $errors->first('role') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label fo class="col-sm-2 control-label">Password</label>
    <div class="col-sm-4">
        <div class="fg-line">
            <input type="password" class="form-control input-sm" name="password" placeholder="Password">
        </div>
        @if($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label class="col-sm-2 control-label">Konfirmasi Password</label>
    <div class="col-sm-4">
        <div class="fg-line">
            <input type="password" class="form-control input-sm" name="password_confirmation" placeholder="Konfirmasi Password">
        </div>
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">{{ isset($model) ? 'Ubah' : 'Simpan'}}</button>
    </div>
</div>