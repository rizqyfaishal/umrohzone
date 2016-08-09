{!! Form::model($hotelFasilitasCategory = new \App\HotelFasilitasCategory(),['METHOD' => 'POST', 'action' => ['HotelFasilitasCategoryController@store']]) !!}
@include('data-entry.hotel-fasilitas-category.partials._hotel-fasilitas-category-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data fasilitas hotel category" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
