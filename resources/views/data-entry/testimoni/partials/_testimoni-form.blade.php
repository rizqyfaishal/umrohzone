<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description','Testimoni') !!}
            {!! Form::textarea('description',old('description'),['class' => 'form-control','placeholder' => 'Testimoni']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

