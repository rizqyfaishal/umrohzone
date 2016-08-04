<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            {!! Form::label('nama','Nama Hotel') !!}
            {!! Form::text('nama',old('nama'),['class' => 'form-control','placeholder' => 'Nama Hotel']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
            {!! Form::label('deskripsi','Deskripsi') !!}
            {!! Form::textarea('deskripsi',old('deskripsi'),['class' => 'form-control','placeholder' => 'Deskripsi']) !!}
            @if ($errors->has('deskripsi'))
                <span class="help-block">
                    <strong>{{ $errors->first('deskripsi') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('full_address') ? ' has-error' : '' }}">
            {!! Form::label('full_address','Alamat Hotel') !!}
            {!! Form::textarea('full_address',old('full_address'),['class' => 'form-control','placeholder' => 'Alamat']) !!}
            @if ($errors->has('full_address'))
                <span class="help-block">
                    <strong>{{ $errors->first('full_address') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('review') ? ' has-error' : '' }}">
            {!! Form::label('review','Review Hotel') !!}
            {!! Form::textarea('review',old('review'),['class' => 'form-control','placeholder' => 'Review Hotel']) !!}
            @if ($errors->has('review'))
                <span class="help-block">
                    <strong>{{ $errors->first('review') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('google_map_url') ? ' has-error' : '' }}">
            {!! Form::label('google_map_url','Google Map URL') !!}
            {!! Form::text('google_map_url',old('google_map_url'),['class' => 'form-control','placeholder' => 'Google Map URL']) !!}
            @if ($errors->has('google_map_url'))
                <span class="help-block">
                    <strong>{{ $errors->first('google_map_url') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
            {!! Form::label('logo','Logo Images') !!}
            {!! Form::file('logo',['class' => 'form-control','placeholder' => 'Logo Images']) !!}
            @if ($errors->has('logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('logo') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>