{!! Form::model($fasilitas = new \App\Fasilitas(),['METHOD' => 'POST', 'action' => ['FasilitasController@store']]) !!}
@include('data-entry.fasilitas.partials._fasilitas-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data fasilitas" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
