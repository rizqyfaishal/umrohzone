{!! Form::model($manasik,['method' => 'PATCH', 'action' => ['ManasikController@update',$manasik->id]]) !!}
@include('data-entry.manasik.partials._manasik_form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data manasik" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
