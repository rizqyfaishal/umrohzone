<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name','Nama Category') !!}
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder' => 'Nama Category']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

