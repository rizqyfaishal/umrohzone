{!! Form::model($hotelFasilitas = new \App\HotelFasilitas(),['METHOD' => 'POST', 'action' => ['HotelFasilitasController@store']]) !!}
@include('data-entry.hotel-fasilitas.partials._hotel-fasilitas-form')
<div class="row">
    <div class="col-lg-6">
        {!! Form::label('hotel_fasilitas_details','Detail Fasilitas') !!}
        <div id="form-text-con">
            <div class="form-group {{ $errors->has('hotel_fasilitas_details') ? ' has-error' : '' }}">
                {!! Form::text('hotel_fasilitas_details[]',old('hotel_fasilitas_detail[]'),['class' => 'form-control','placeholder' => 'Nama Hotel','multiple' => 'multiple']) !!}
                @if ($errors->has('hotel_fasilitas_detail'))
                    <span class="help-block">
                    <strong>{{ $errors->first('hotel_fasilitas_detail') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <button id="add" class="btn btn-orange" type="button"><i class="fa fa-plus">&nbsp;</i>Tambahkan detail</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data fasilitas hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
