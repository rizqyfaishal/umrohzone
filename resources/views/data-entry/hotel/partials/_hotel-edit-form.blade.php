{!! Form::model($hotel,['method' => 'PATCH', 'action' => ['HotelController@update',$hotel->id]]) !!}
@include('data-entry.hotel.partials._hotel-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
