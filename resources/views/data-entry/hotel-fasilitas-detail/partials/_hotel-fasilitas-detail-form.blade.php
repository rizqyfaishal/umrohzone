<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name','Nama Fasilitas Detail') !!}
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder' => 'Nama Fasilitas Detail']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('hotel_id') ? ' has-error' : '' }}">
            {!! Form::label('hotel_fasilitas_id','Nama Fasilitas Hotel') !!}
            {!! Form::select('hotel_fasilitas_id',\App\HotelFasilitas::lists('name','id'),old('hotel_id'),['class' => 'form-control','placeholder' => 'Nama Hotel Fasilitas Detail']) !!}
            @if ($errors->has('hotel_fasilitas_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
