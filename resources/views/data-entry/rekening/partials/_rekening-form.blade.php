<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('bank') ? ' has-error' : '' }}">
            {!! Form::label('bank','Nama Bank') !!}
            {!! Form::text('bank',old('bank'),['class' => 'form-control','placeholder' => 'Nama Bank']) !!}
            @if ($errors->has('bank'))
                <span class="help-block">
                    <strong>{{ $errors->first('bank') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('no_rekening') ? ' has-error' : '' }}">
            {!! Form::label('no_rekening','Nomor Rekening)') !!}
            {!! Form::text('no_rekening',old('no_rekening') ,['class' => 'form-control','placeholder' => 'Nomor Rekening']) !!}
            @if ($errors->has('no_rekening'))
                <span class="help-block">
                    <strong>{{ $errors->first('no_rekening') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

