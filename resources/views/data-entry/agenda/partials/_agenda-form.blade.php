<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('tempat') ? ' has-error' : '' }}">
            {!! Form::label('tempat','Tempat') !!}
            {!! Form::text('tempat',old('tempat'),['class' => 'form-control','placeholder' => 'Tempat',]) !!}
            @if ($errors->has('tempat'))
                <span class="help-block">
                    <strong>{{ $errors->first('tempat') }}</strong>
                </span>
            @endif
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description','Desckripsi Agenda') !!}
            {!! Form::text('description',old('description') ,['class' => 'form-control','placeholder' => 'Deskripsi Agenda']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('paket_id') ? ' has-error' : '' }}">
            {!! Form::label('paket_id','Paket') !!}
            {!! Form::select('paket_id',\App\Paket::lists('nama','id'),old('paket_id'),['class' => 'form-control','placeholder' => 'Paket',]) !!}
            @if ($errors->has('paket_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('paket_id') }}</strong>
                </span>
            @endif
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('step_number') ? ' has-error' : '' }}">
            {!! Form::label('step_number','Step Number') !!}
            {!! Form::number('step_number',old('step_number') ,['class' => 'form-control','placeholder' => 'Step Number']) !!}
            @if ($errors->has('step_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('step_number') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>



