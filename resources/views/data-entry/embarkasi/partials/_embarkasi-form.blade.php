<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            {!! Form::label('nama','Nama Embarkasi') !!}
            {!! Form::text('nama',old('nama'),['class' => 'form-control','placeholder' => 'Nama Embarkasi']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('bandara_id') ? ' has-error' : '' }}">
            {!! Form::label('bandara_id','Bandara') !!}
            {!! Form::select('bandara_id',\App\Bandara::lists('nama','id'),old('bandara_id'),['class' => 'form-control', 'placeholder' => 'Bandara']) !!}
            @if ($errors->has('bandara_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('bandara_id') }}</strong>
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
