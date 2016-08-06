{!! Form::model($hotelFasilitasCategory,['method' => 'PATCH',  'action' => ['HotelFasilitasCategoryController@update',$hotelFasilitasCategory->id]]) !!}
@include('data-entry.hotel-fasilitas-category.partials._hotel-fasilitas-category-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data fasilitas hotel category" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
