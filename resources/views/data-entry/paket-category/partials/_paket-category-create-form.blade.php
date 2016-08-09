{!! Form::model($paketCategory = new \App\PaketCategory(),['METHOD' => 'POST', 'action' => ['PaketCategoryController@store']]) !!}
@include('data-entry.paket-category.partials._paket-category-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data paket category" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
