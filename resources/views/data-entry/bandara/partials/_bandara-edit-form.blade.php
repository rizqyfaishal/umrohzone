{!! Form::model($bandara,['method' => 'PATCH', 'action' => ['BandaraController@update',$bandara->id]]) !!}
@include('data-entry.bandara.partials._bandara-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data bandara" class="btn btn-custom"/>
        </div>
    </div>
</div>
@include('partials._update-select-script')
{!! Form::close() !!}
