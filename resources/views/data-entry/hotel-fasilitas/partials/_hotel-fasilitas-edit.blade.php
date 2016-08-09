{!! Form::model($hotelFasilitas,['method' => 'PATCH', 'action' => ['HotelFasilitasController@update',$hotelFasilitas->id]]) !!}
@include('data-entry.hotel-fasilitas.partials._hotel-fasilitas-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data fasilitas hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
