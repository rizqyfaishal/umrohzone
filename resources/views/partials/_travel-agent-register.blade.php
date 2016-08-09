{!! Form::open([ 'action' => ['AgenController@store'], 'method' => 'POST', 'class' => 'travel-agent-form travel-agent-register-form', 'enctype' => 'multipart/form-data']) !!}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h5 style="color: red">All fields are mandatory</h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('nama_agen') ? ' has-error' : '' }}">
            {!! Form::label('nama_agen','Nama Agen') !!}
            {!! Form::text('nama_agen',old('nama_agen'),['class' => 'form-control','placeholder' => 'Nama Agen']) !!}
            @if ($errors->has('nama_agen'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama_agen') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('full_address') ? ' has-error' : '' }}">
            {!! Form::label('full_address','Alamat') !!}
            {!! Form::textarea('full_address',old('full_address'),['class' => 'form-control','placeholder' => 'Alamat']) !!}
            @if ($errors->has('full_address'))
                <span class="help-block">
                    <strong>{{ $errors->first('full_address') }}</strong>
                </span>
            @endif


        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('provinsi_id') ? ' has-error' : '' }}">
            {!! Form::label('provinsi_id','Provinsi') !!}
            {!! Form::select('provinsi_id',\App\Provinsi::lists('name','id'),old('provinsi_id'),['class' => 'form-control', 'placeholder' => 'Provinsi']) !!}
            @if ($errors->has('provinsi_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('provinsi_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('regency_id') ? ' has-error' : '' }}">
            {!! Form::label('regency_id','Kota') !!}
            {!! Form::select('regency_id',is_null(old('provinsi_id')) ? [] : (is_null(\App\Provinsi::where('id','=',old('provinsi_id'))->first()) ? [] : \App\Provinsi::where('id','=',old('provinsi_id'))->first()->regencies()->lists('name','id')),is_null(old('regency_id')) ? null : old('regency_id'),['class' => 'form-control', 'placeholder' => 'Kota']) !!}
            @if ($errors->has('regency_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('regency_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
            {!! Form::label('phone','Telepon 1') !!}
            {!! Form::text('phone',old('phone1'),['class' => 'form-control','placeholder' => 'Telepon 1']) !!}
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group {{ $errors->has('phone2') ? ' has-error' : '' }}">
            {!! Form::label('phone2','Telepon 2') !!}
            {!! Form::text('phone2',old('phone2'),['class' => 'form-control','placeholder' => 'Telepon 2']) !!}
            @if ($errors->has('phone2'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone2') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('direktur') ? ' has-error' : '' }}">
            {!! Form::label('direktur','Nama Direktur') !!}
            {!! Form::text('direktur',old('direktur'),['class' => 'form-control','placeholder' => 'Nama Direktur']) !!}
            @if ($errors->has('direktur'))
                <span class="help-block">
                    <strong>{{ $errors->first('direktur') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ $errors->has('phone_direktur') ? ' has-error' : '' }}">
            {!! Form::label('phone_direktur','Telepon Direktur') !!}
            {!! Form::text('phone_direktur',old('phone_direktur'),['class' => 'form-control','placeholder' => 'Telepon Direktur']) !!}
            @if ($errors->has('phone_direktur'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone_direktur') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
            {!! Form::label('logo','Logo') !!}
            {!! Form::file('logo',['class' => 'form-control','placeholder' => 'Logo']) !!}
            @if ($errors->has('logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('logo') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('bank') ? ' has-error' : '' }}">
            {!! Form::label('bank','Nama Bank') !!}
            {!! Form::text('bank',old('bank'),['class' => 'form-control','placeholder' => 'Nama Bank']) !!}
            @if ($errors->has('bank'))
                <span class="help-block">
                    <strong>{{ $errors->first('bank') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('no_rekening') ? ' has-error' : '' }}">
            {!! Form::label('no_rekening','Nomor Rekening') !!}
            {!! Form::text('no_rekening',old('no_rekening'),['class' => 'form-control','placeholder' => 'Nomor Rekening']) !!}
            @if ($errors->has('phone_direktur'))
                <span class="help-block">
                    <strong>{{ $errors->first('no_rekening') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
{{--<div class="row">--}}
    {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
        {{--<div class="form-group {{ $errors->has('scan_ppiu') ? ' has-error' : '' }}">--}}
            {{--{!! Form::label('scan_ppiu','Scan PPIU') !!}--}}
            {{--{!! Form::file('scan_ppiu',['class' => 'form-control','placeholder' => 'Scan PPIU']) !!}--}}
            {{--@if ($errors->has('scan_ppiu'))--}}
                {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('scan_ppiu') }}</strong>--}}
                {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
        {{--<div class="form-group {{ $errors->has('scan_asosiasi') ? ' has-error' : '' }}">--}}
            {{--{!! Form::label('scan_ppiu','Scan Asosiasi') !!}--}}
            {{--{!! Form::file('scan_asosiasi',['class' => 'form-control','placeholder' => 'Scan Asosiasi']) !!}--}}
            {{--@if ($errors->has('scan_asosiasi'))--}}
                {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('scan_asosiasi') }}</strong>--}}
                {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
        {{--<div class="form-group {{ $errors->has('scan_ref_bank') ? ' has-error' : '' }}">--}}
            {{--{!! Form::label('scan_ref_bank','Scan Ref. Bank') !!}--}}
            {{--{!! Form::file('scan_ref_bank',['class' => 'form-control','placeholder' => 'Scan Ref. Bank']) !!}--}}
            {{--@if ($errors->has('scan_ref_bank'))--}}
                {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('scan_ref_bank') }}</strong>--}}
                {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',null,['class' => 'form-control','placeholder' => 'Email']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class' => 'form-control','placeholder' => 'Password']) !!}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            {!! Form::label('password_confirmation','Password Confirmation') !!}
            {!! Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Password Confirmation']) !!}
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {!! \Greggilbert\Recaptcha\Facades\Recaptcha::render() !!}
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="checkbox">
            <label for="travel-agent-agree">
                <input type="checkbox" id="travel-agent-agree" name="agree"
                       placeholder="Nama tarvel agent"/> I have read and agree with
                <a data-toggle="modal" data-target="#tcModal">T&C</a></label>
        </div>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Register" class="btn btn-custom"/>
        </div>
    </div>
</div>
@include('partials._tc-modal')
@include('partials._update-select-script')
{!! Form::close() !!}
