{!! Form::model($paket,['method' => 'PATCH', 'action' => ['PaketController@update',$paket->id]]) !!}
@include('data-entry.paket.partials._paket-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data manasik" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
<div class="row">
    <div class="col-lg-12">
        <h3>List Agenda</h3>
    </div>
    <div class="hotel-photos">

        @foreach($paket->agenda as $agenda)
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">Tempat : {{ $agenda->tempat }}</div>
                    <div class="col-lg-12">Agenda: {{ $agenda->description  }}</div>
                </div>
                {!! Form::open(['method' => 'DELETE','action' => ['AgendaController@destroy',$agenda->id]]) !!}
                <a href="{{ action('AgendaController@edit',$agenda->id) }}" type="submit" class="btn btn-orange"><i class="fa fa-pencil">&nbsp;</i>Edit</a>
                <button type="submit" class="btn btn-orange"><i class="fa fa-trash">&nbsp;</i>Delete</button>
                {!! Form::close() !!}
            </div>
        @endforeach
    </div>
</div>

