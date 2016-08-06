<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name','Nama Fasilitas') !!}
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder' => 'Nama Fasilitas']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description','Deskripsi') !!}
            {!! Form::textarea('description',old('description'),['class' => 'form-control','placeholder' => 'Deskripsi']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

