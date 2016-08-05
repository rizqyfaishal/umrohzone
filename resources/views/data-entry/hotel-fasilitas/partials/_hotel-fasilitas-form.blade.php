<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name','Nama Fasilitas') !!}
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder' => 'Nama Fasilitas']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('hotel') ? ' has-error' : '' }}">
            {!! Form::label('hotel','Nama Hotel') !!}
            {!! Form::select('hotel[]',\App\Hotel::lists('nama','id'), is_null($hotelFasilitas->hotels) ? old('hotel_id') : $hotelFasilitas->hotels->lists('id')->all(),['class' => 'form-control','placeholder' => 'Nama Hotel','multiple' => 'multiple']) !!}
            @if ($errors->has('hotel'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

@include('partials._select2')