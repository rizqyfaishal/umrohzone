{!! Form::model($manasik = new \App\Manasik(),['METHOD' => 'POST', 'action' => ['ManasikController@store']]) !!}
@include('data-entry.manasik.partials._manasik_form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data manasik" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
