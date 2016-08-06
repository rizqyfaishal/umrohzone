<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
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
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('base_price') ? ' has-error' : '' }}">
            {!! Form::label('base_price','Base Price (dalam juta)') !!}
            {!! Form::number('base_price',old('base_price'),['class' => 'form-control','placeholder' => 'Base Price','step' => 0.01]) !!}
            @if ($errors->has('base_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('base_price') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

