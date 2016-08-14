<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('waktu_manasik') ? ' has-error' : '' }}">
            {!! Form::label('waktu_manasik','Waktu Manasik') !!}
            <div class='input-group date datetimepicker'>
                {!! Form::text('waktu_manasik',old('waktu_manasik'),['class' => 'form-control','placeholder' => 'Waktu Manasik',]) !!}
                <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
            </span>
            </div>
            @if ($errors->has('waktu_manasik'))
                <span class="help-block">
                    <strong>{{ $errors->first('waktu_manasik') }}</strong>
                </span>
            @endif
        </div>
       
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('full_address') ? ' has-error' : '' }}">
            {!! Form::label('full_address','Tempat Manasik)') !!}
            {!! Form::text('full_address',is_null($manasik->address) ? old('full_address') : $manasik->address->full_address ,['class' => 'form-control','placeholder' => 'Tempat Manasik']) !!}
            @if ($errors->has('full_address'))
                <span class="help-block">
                    <strong>{{ $errors->first('full_address') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
@include('partials._datetimepicker')
