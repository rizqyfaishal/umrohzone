{!! Form::open(['method' => 'GET','action' => ['PageController@getListPaketRedirect'],'class' => 'form home-form']) !!}
    <div class="form-group{{ $errors->has('tanggal_keberangkatan') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                {!! Form::label('datepicker-form-regular','Tanggal Keberangkatan') !!}
                 <!-- coba datepicker -->
                <input class="form-control text-center" name="tanggal_keberangkatan"
                       type="text" id="datepicker-form-regular" placeholder="Pilih Tanggal Keberangkatan">
                        <!-- end of coba datepicker -->
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
                {!! Form::select('embarkasi',\App\Embarkasi::lists('nama','id'),null,['class' => 'form-control text-center', 'placeholder'  => 'Embarkasi']) !!}

                @if ($errors->has('embarkasi'))
                    <span class="help-block text-center">
                            <strong>{{ $errors->first('embarkasi') }}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('flexible_date') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('flexible_date',true) !!} Tanggal Flexible
                    </label>
                    @if ($errors->has('flexible_date'))
                        <span class="help-block text-center">
                            <strong>{{ $errors->first('flexible_date') }}</strong>
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
                {!! Form::number('jumlah_jamaah',null,['class' => 'form-control text-center', 'placeholder'  => 'Jumlah Jamaah']) !!}
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