{!! Form::model($terminal,['method' => 'PATCH', 'action' => ['TerminalController@update',$terminal->id]]) !!}
@include('data-entry.terminal.partials._terminal-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data terminal" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
