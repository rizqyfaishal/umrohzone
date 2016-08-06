{!! Form::model($rekening = new \App\Rekening(),['METHOD' => 'POST', 'action' => ['RekeningController@store']]) !!}
@include('data-entry.rekening.partials._rekening-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data rekening" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
