{!! Form::model($hotel = new \App\Hotel(),['METHOD' => 'POST', 'action' => ['HotelController@store'], 'enctype' => 'multipart/form-data']) !!}
@include('data-entry.hotel.partials._hotel-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data hotel" class="btn btn-orange"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
