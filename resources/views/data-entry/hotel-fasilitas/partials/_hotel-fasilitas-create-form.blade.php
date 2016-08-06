{!! Form::model($hotelFasilitas = new \App\HotelFasilitas(),['METHOD' => 'POST', 'action' => ['HotelFasilitasController@store']]) !!}
@include('data-entry.hotel-fasilitas.partials._hotel-fasilitas-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data fasilitas hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
