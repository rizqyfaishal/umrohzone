{!! Form::model($terminal = new \App\Terminal(),['METHOD' => 'POST', 'action' => ['TerminalController@store']]) !!}
@include('data-entry.terminal.partials._terminal-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data terminal" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
