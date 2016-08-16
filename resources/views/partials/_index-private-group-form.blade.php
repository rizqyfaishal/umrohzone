{!! Form::open(['method' => 'GET','action' => ['PageController@getListPaketRedirect'],'class' => 'home-form form']) !!}
<div class="form-group{{ $errors->has('embarkasi') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('embarkasi','Embarkasi') !!}
            {!! Form::select('embarkasi',\App\Embarkasi::lists('nama','id'),null,['class' => 'form-control text-center', 'placeholder'  => 'Embarksi']) !!}
            @if ($errors->has('embarkasi'))
                <span class="help-block text-center">
                            <strong>{{ $errors->first('embarkasi') }}</strong>
                        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group{{ $errors->has('tanggal_keberangkatan') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('datepicker-form-private','Tanggal Keberangkatan') !!}
                    <!-- coba datepicker -->
            <input class="form-control text-center" name="tanggal_keberangkatan"
                   type="text" id="datepicker-form-private" placeholder="Pilih Tanggal Keberangkatan">
            {{--<input class="form-control text-center" type="text" placeholder="click to show datepicker"  id="datepicker-form">--}}
                    <!-- end of coba datepicker -->

        </div>
    </div>
</div>


<div class="form-group{{ $errors->has('jumlah_jamaah') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            {!! Form::label('jumlah_jamaah','Anggota Jamaah') !!}
            {!! Form::number('jumlah_jamaah',null,['class' => 'form-control text-center', 'placeholder'  => 'Jumlah Jamaah','start' => 8]) !!}
            @if ($errors->has('jumlah_jamaah'))
                <span class="help-block text-center">
                        <strong>{{ $errors->first('jumlah_jamaah') }}</strong>
                    </span>
            @endif
        </div>

    </div>
</div>
<div class="form-group{{ $errors->has('hotel_mekah') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('hotel_mekah','Hotel Mekah') !!}
            {!! Form::select('hotel_mekah',\App\Hotel::where('hotel_primary_lokasi','=','Mekah')->lists('nama','id'),null,['class' => 'form-control text-center', 'placeholder'  => 'Hotel Mekah']) !!}
            @if ($errors->has('hotel_mekah'))
                <span class="help-block text-center">
                            <strong>{{ $errors->first('hotel_mekah') }}</strong>
                        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group{{ $errors->has('hotel_madinah') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('hotel_madinah','Hotel Madinah)') !!}
            {!! Form::select('hotel_madinah',\App\Hotel::where('hotel_primary_lokasi','=','Madinah')->lists('nama','id'),null,['class' => 'form-control text-center', 'placeholder'  => 'Hotel Madinah']) !!}
            @if ($errors->has('hotel_madinah'))
                <span class="help-block text-center">
                        <strong>{{ $errors->first('hotel_madinah') }}</strong>
                    </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            {!! Form::submit('Cari',['class' => 'btn btn-orange','style' => 'display:block;']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}