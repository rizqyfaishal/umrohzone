{!! Form::model($penerbangan = new \App\Penerbangan(),['METHOD' => 'POST', 'action' => ['PenerbanganController@store']]) !!}
@include('data-entry.penerbangan.partials._penerbangan-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data penerbangan" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
