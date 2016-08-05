{!! Form::model($hotelFasilitasDetail = new \App\HotelFasilitasDetail(),['METHOD' => 'POST', 'action' => ['HotelFasilitasDetailController@store']]) !!}
@include('data-entry.hotel-fasilitas-detail.partials._hotel-fasilitas-detail-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data fasilitas detail hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
