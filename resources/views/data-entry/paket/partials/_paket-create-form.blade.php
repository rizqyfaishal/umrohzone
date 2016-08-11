{!! Form::model($paket = new \App\Paket(),['METHOD' => 'POST', 'action' => ['PaketController@store']]) !!}
@include('data-entry.paket.partials._paket-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data paket" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
