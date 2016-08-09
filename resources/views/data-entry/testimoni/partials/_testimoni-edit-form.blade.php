{!! Form::model($testimoni,['method' => 'PATCH', 'action' => ['TestimoniController@update',$testimoni->id]]) !!}
@include('data-entry.testimoni.partials._testimoni-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data testimoni" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
