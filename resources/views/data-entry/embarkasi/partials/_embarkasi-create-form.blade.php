{!! Form::model($embarkasi = new App\Embarkasi(),['METHOD' => 'POST', 'action' => ['EmbarkasiController@store']]) !!}
@include('data-entry.embarkasi.partials._embarkasi-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data embarkasi" class="btn btn-custom"/>
        </div>
    </div>
</div>
@include('partials._update-select-script')
{!! Form::close() !!}