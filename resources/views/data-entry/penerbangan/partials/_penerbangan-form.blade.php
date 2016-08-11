<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('tanggal_berangkat') ? ' has-error' : '' }}">
            {!! Form::label('tanggal_berangkat','Tanggal Berangkat') !!}
            {!! Form::date('tanggal_berangkat',old('tanggal_berangkat'),['class' => 'form-control','placeholder' => 'Tanggal Berangkat']) !!}
            @if ($errors->has('tanggal_berangkat'))
                <span class="help-block">
                    <strong>{{ $errors->first('tanggal_berangkat') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('waktu_tempuh') ? ' has-error' : '' }}">
            {!! Form::label('waktu_tempuh','Waktu Tempuh (satuan jam)') !!}
            {!! Form::number('waktu_tempuh',old('waktu_tempuh'),['class' => 'form-control','placeholder' => 'Waktu Tempuh', 'step' => 0.5]) !!}
            @if ($errors->has('waktu_tempuh'))
                <span class="help-block">
                    <strong>{{ $errors->first('waktu_tempuh') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('bandara_berangkat_id') ? ' has-error' : '' }}">
            {!! Form::label('bandara_berangkat_id','Bandara Berangkat') !!}
            {!! Form::select('bandara_berangkat_id',\App\Bandara::lists('nama','id'),old('bandara_berangkat_id'),['class' => 'form-control', 'placeholder' => 'Bandara Berangkat']) !!}
            @if ($errors->has('bandara_berangkat_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('bandara_berangkat_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('bandara_tujuan_id') ? ' has-error' : '' }}">
            {!! Form::label('bandara_tujuan_id','Bandara Tujuan') !!}
            {!! Form::select('bandara_tujuan_id',\App\Bandara::lists('nama','id'),old('bandara_tujuan_id'),['class' => 'form-control', 'placeholder' => 'Bandara Tujuan']) !!}
            @if ($errors->has('bandara_tujuan_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('bandara_tujuan_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('terminal_berangkat_id') ? ' has-error' : '' }}">
            {!! Form::label('terminal_berangkat_id','Terminal Berangkat') !!}
            {!! Form::select('terminal_berangkat_id',\App\Terminal::lists('nama','id'),old('terminal_berangkat_id'),['class' => 'form-control', 'placeholder' => 'Terminal Berangkat']) !!}
            @if ($errors->has('terminal_berangkat_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('bandara_berangkat_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('terminal_tujuan_id') ? ' has-error' : '' }}">
            {!! Form::label('terminal_tujuan_id','Terminal Tujuan') !!}
            {!! Form::select('terminal_tujuan_id',\App\Terminal::lists('nama','id'),old('terminal_tujuan_id'),['class' => 'form-control', 'placeholder' => 'Terminal Tujuan']) !!}
            @if ($errors->has('terminal_tujuan_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('terminal_tujuan_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('pesawat_id') ? ' has-error' : '' }}">
            {!! Form::label('pesawat_id','Pesawat') !!}
            {!! Form::select('pesawat_id',\App\Pesawat::lists('nama','id'),old('pesawat_id'),['class' => 'form-control', 'placeholder' => 'Pesawat']) !!}
            @if ($errors->has('pesawat_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('pesawat_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('jenis_penerbangan') ? ' has-error' : '' }}">
            {!! Form::label('jenis_penerbangan','Jenis Penerbangan') !!}
            {!! Form::select('jenis_penerbangan',[1 => 'Berangkat', 2 => 'Pulang'],old('jenis_penerbangan'),['class' => 'form-control', 'placeholder' => 'Jenis Penerbangan']) !!}
            @if ($errors->has('jenis_penerbangan'))
                <span class="help-block">
                    <strong>{{ $errors->first('jenis_penerbangan') }}</strong>
                 </span>
            @endif
        </div>
    </div>
</div>

