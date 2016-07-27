{!! Form::open(['action' => ['PageController@index'],'class' => 'form']) !!}
<div class="form-group{{ $errors->has('booking_status_phone_number') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('booking_status_phone_number','Nomor Telepon') !!}
            {!! Form::text('booking_status_phone_number',null,['class' => 'form-control', 'placeholder'  => 'Nomor Telepon']) !!}
            @if ($errors->has('booking_status_phone_number'))
                <span class="help-block text-center">
                        <strong>{{ $errors->first('booking_status_phone_number') }}</strong>
                    </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group{{ $errors->has('booking_status_code') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('booking_status_code','Booking Code') !!}
            {!! Form::text('booking_status_code',null,['class' => 'form-control', 'placeholder'  => 'Kode Booking']) !!}
            @if ($errors->has('booking_status_code'))
                <span class="help-block text-center">
                        <strong>{{ $errors->first('booking_status_code') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <button class="btn btn-custom" style="display: block;margin: 0 auto;"><i class="fa fa-search">&nbsp;</i>Search</button>
        </div>
    </div>
</div>
{!! Form::close() !!}