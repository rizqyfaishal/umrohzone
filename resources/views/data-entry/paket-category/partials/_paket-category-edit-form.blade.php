{!! Form::model($paketCategory,['method' => 'PATCH', 'action' => ['PaketCategoryController@update',$paketCategory->id]]) !!}
@include('data-entry.paket-category.partials._paket-category-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data paket category" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
