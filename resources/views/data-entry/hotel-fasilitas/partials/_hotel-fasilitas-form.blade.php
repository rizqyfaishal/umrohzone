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
        <div class="form-group {{ $errors->has('hotel_fasilitas_category_id') ? ' has-error' : '' }}">
            {!! Form::label('hotel_fasilitas_category_id','Category') !!}
            {!! Form::select('hotel_fasilitas_category_id',\App\HotelFasilitasCategory::lists('name','id'), is_null($hotelFasilitas->category) ? old('hotel_fasilitas_category_id') : $hotelFasilitas->category->id,['class' => 'form-control','placeholder' => 'Category']) !!}
            @if ($errors->has('hotel_fasilitas_category_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_fasilitas_category_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

