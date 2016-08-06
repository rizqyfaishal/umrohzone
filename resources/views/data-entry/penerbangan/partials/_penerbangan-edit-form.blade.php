{!! Form::model($penerbangan,['method' => 'PATCH', 'action' => ['PenerbanganController@update',$penerbangan->id]]) !!}
@include('data-entry.penerbangan.partials._penerbangan-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data bandara" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
