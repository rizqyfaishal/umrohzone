{!! Form::model($pesawat = new \App\Pesawat(),['METHOD' => 'POST', 'action' => ['PesawatController@store'], 'enctype' => 'multipart/form-data']) !!}
@include('data-entry.pesawat.partials._pesawat-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data pesawat" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
