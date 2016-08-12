<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            {!! Form::label('nama','Nama Bandara') !!}
            {!! Form::text('nama',old('nama'),['class' => 'form-control','placeholder' => 'Nama Bandara']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('kode_bandara') ? ' has-error' : '' }}">
            {!! Form::label('kode_bandara','Kode Bandara') !!}
            {!! Form::text('kode_bandara',old('kode_bandara'),['class' => 'form-control','placeholder' => 'Kode Bandara']) !!}
            @if ($errors->has('kode_bandara'))
                <span class="help-block">
                    <strong>{{ $errors->first('kode_bandara') }}</strong>
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
            {!! Form::select('regency_id',is_null(old('regency_id')) ? [] : (is_null(\App\Provinsi::where('id','=',old('provinsi_id'))->first()) ? [] : \App\Provinsi::where('id','=',old('provinsi_id'))->first()->regencies()->lists('name','id')),is_null(old('regency_id')) ? null : old('regency_id'),['class' => 'form-control', 'placeholder' => 'Kota']) !!}
            @if ($errors->has('regency_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('regency_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
