<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            {!! Form::label('nama','Nama Hotel') !!}
            {!! Form::text('nama',old('nama'),['class' => 'form-control','placeholder' => 'Nama Hotel']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('hotel_primary_lokasi') ? ' has-error' : '' }}">
            {!! Form::label('hotel_primary_lokasi','Lokasi Hotel') !!}
            {!! Form::select('hotel_primary_lokasi',['Mekah' => 'Mekah','Madinah' => 'Madinah'],old('hotel_primary_lokasi'),['class' => 'form-control','placeholder' => 'Lokasi Hotel']) !!}
            @if ($errors->has('hotel_primary_lokasi'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_primary_lokasi') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
            {!! Form::label('deskripsi','Deskripsi') !!}
            {!! Form::textarea('deskripsi',old('deskripsi'),['class' => 'form-control','placeholder' => 'Deskripsi']) !!}
            @if ($errors->has('deskripsi'))
                <span class="help-block">
                    <strong>{{ $errors->first('deskripsi') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('full_address') ? ' has-error' : '' }}">
            {!! Form::label('full_address','Alamat Hotel') !!}
            {!! Form::textarea('full_address',old('full_address'),['class' => 'form-control','placeholder' => 'Alamat']) !!}
            @if ($errors->has('full_address'))
                <span class="help-block">
                    <strong>{{ $errors->first('full_address') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('review') ? ' has-error' : '' }}">
            {!! Form::label('review','Review Hotel') !!}
            {!! Form::textarea('review',old('review'),['class' => 'form-control','placeholder' => 'Review Hotel']) !!}
            @if ($errors->has('review'))
                <span class="help-block">
                    <strong>{{ $errors->first('review') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('google_map_url') ? ' has-error' : '' }}">
            {!! Form::label('google_map_url','Google Map URL') !!}
            {!! Form::text('google_map_url',old('google_map_url'),['class' => 'form-control','placeholder' => 'Google Map URL']) !!}
            @if ($errors->has('google_map_url'))
                <span class="help-block">
                    <strong>{{ $errors->first('google_map_url') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
            {!! Form::label('logo','Logo Hotel') !!}
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
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('hotel_fasilitas') ? ' has-error' : '' }}">
            {!! Form::label('hotel_fasilitas','Fasilitas Hotel') !!}
            {!! Form::select('hotel_fasilitas[]',\App\HotelFasilitas::lists('name','id'),is_null($hotel->fasilitas->lists('id')) ?  old('hotel_fasilitas') : $hotel->fasilitas->lists('id')->all(),['class' => 'form-control select-multiple','placeholder' => 'Fasilitas Hotel','multiple' => 'multiple']) !!}
            @if ($errors->has('hotel_fasilitas'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_fasilitas') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
@include('partials._select2')