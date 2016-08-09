{!! Form::open(['action' => ['PageController@index'],'class' => 'form']) !!}
    <div class="form-group{{ $errors->has('tanggal_keberangkatan') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                {!! Form::label('tanggal_keberangkatan','Tanggal Keberangkatan') !!}
                {!! Form::select('tanggal_keberangkatan',[1 => 'Juni 2016'],null,['class' => 'form-control text-center', 'placeholder'  => 'Tanggal Keberangkatan']) !!}
                @if ($errors->has('tanggal_keberangkatan'))
                    <span class="help-block text-center">
                        <strong>{{ $errors->first('tanggal_keberangkatan') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group{{ $errors->has('embarkasi') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                {!! Form::label('embarkasi','Embarkasi') !!}
                {!! Form::select('embarkasi',[1 => 'Juni 2016'],null,['class' => 'form-control text-center', 'placeholder'  => 'Embarksi']) !!}
                @if ($errors->has('embarkasi'))
                    <span class="help-block text-center">
                            <strong>{{ $errors->first('embarkasi') }}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('flexible') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('flexible',null) !!} Tanggal Flexible
                    </label>
                    @if ($errors->has('flexible'))
                        <span class="help-block text-center">
                            <strong>{{ $errors->first('flexible') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="form-group{{ $errors->has('jumlah_jamaah') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                {!! Form::label('jumlah_jamaah','Jumlah Jamaah') !!}
                {!! Form::select('jumlah_jamaah',[1 => 1,2 => 2],null,['class' => 'form-control text-center', 'placeholder'  => 'Jumlah Jamaah']) !!}
                @if ($errors->has('jumlah_jamaah'))
                    <span class="help-block text-center">
                        <strong>{{ $errors->first('jumlah_jamaah') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                {!! Form::submit('Cari',['class' => 'btn btn-orange extra-padd-top']) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}