{!! Form::model($hotelFasilitasDetail,['method' => 'PATCH', 'action' => ['HotelFasilitasDetailController@update',$hotelFasilitasDetail->id]]) !!}
@include('data-entry.hotel-fasilitas-detail.partials._hotel-fasilitas-detail-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data fasilitas detail hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
