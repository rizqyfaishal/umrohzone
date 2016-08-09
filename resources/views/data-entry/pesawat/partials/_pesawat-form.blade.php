<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            {!! Form::label('nama','Nama Pesawat') !!}
            {!! Form::text('nama',old('nama'),['class' => 'form-control', 'placeholder' => 'Nama Pesawat']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('jenis') ? ' has-error' : '' }}">
            {!! Form::label('jenis','Jenis Pesawat') !!}
            {!! Form::text('jenis',old('jenis'),['class' => 'form-control', 'placeholder' => 'Jenis Pesawat']) !!}
            @if ($errors->has('jenis'))
                <span class="help-block">
                    <strong>{{ $errors->first('jenis') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('kelas') ? ' has-error' : '' }}">
            {!! Form::label('kelas','Kelas') !!}
            {!! Form::text('kelas',old('kelas'),['class' => 'form-control', 'placeholder' => 'Kelas']) !!}
            @if ($errors->has('kelas'))
                <span class="help-block">
                    <strong>{{ $errors->first('kelas') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('makanan') ? ' has-error' : '' }}">
            {!! Form::label('makanan','Makanan Pesawat') !!}
            {!! Form::text('makanan',old('makanan'),['class' => 'form-control', 'placeholder' => 'Makanan']) !!}
            @if ($errors->has('makanan'))
                <span class="help-block">
                    <strong>{{ $errors->first('makanan') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('hiburan') ? ' has-error' : '' }}">
            {!! Form::label('hiburan','Hiburan') !!}
            {!! Form::text('hiburan',old('hiburan'),['class' => 'form-control', 'placeholder' => 'Hiburan']) !!}
            @if ($errors->has('hiburan'))
                <span class="help-block">
                    <strong>{{ $errors->first('hiburan') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('penghargaan') ? ' has-error' : '' }}">
            {!! Form::label('penghargaan','Penghargaan') !!}
            {!! Form::text('penghargaan',old('penghargaan'),['class' => 'form-control', 'placeholder' => 'Penghargaan']) !!}
            @if ($errors->has('penghargaan'))
                <span class="help-block">
                    <strong>{{ $errors->first('penghargaan') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('makanan') ? ' has-error' : '' }}">
            {!! Form::label('rating','Rating Pesawat') !!}
            {!! Form::number('rating',old('rating'),['class' => 'form-control', 'placeholder' => 'Rating Pesawat', 'step' => 0.1]) !!}
            @if ($errors->has('rating'))
                <span class="help-block">
                    <strong>{{ $errors->first('rating') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
            {!! Form::label('logo','Logo Pesawat') !!}
            {!! Form::file('logo',['class' => 'form-control', 'placeholder' => 'Logo Pesawat']) !!}
            @if ($errors->has('logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('logo') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>