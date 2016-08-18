{!! Form::model($agenda = new \App\Agenda(),['METHOD' => 'POST', 'action' => ['AgendaController@store']]) !!}
@include('data-entry.agenda.partials._agenda-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data manasik" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
