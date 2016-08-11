{!! Form::open(['action' => ['PageController@index'],'class' => 'form']) !!}
<div class="form-group{{ $errors->has('embarkasi') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('embarkasi','Embarkasi') !!}
            {!! Form::select('embarkasi',[1 => 'Jakarta','Surabaya'],null,['class' => 'form-control text-center', 'placeholder'  => 'Embarksi']) !!}
            @if ($errors->has('embarkasi'))
                <span class="help-block text-center">
                            <strong>{{ $errors->first('embarkasi') }}</strong>
                        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group{{ $errors->has('waktu_keberangkatan') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('waktu_keberangkatan','Waktu Keberangkatan (mingguan)') !!}
            {{--{!! Form::select('waktu_keberangkatan',[1 => 'Juni 2016'],null,['class' => 'form-control text-center', 'placeholder'  => 'Waktu Keberangkatan']) !!}--}}
            {{--@if ($errors->has('waktu_keberangkatan'))--}}
                {{--<span class="help-block text-center">--}}
                        {{--<strong>{{ $errors->first('waktu_keberangkatan') }}</strong>--}}
                    {{--</span>--}}
            {{--@endif--}}

                    <!-- coba datepicker -->
            <input class="form-control text-center" type="text" id="datepicker-form-private" placeholder="Pilih Tanggal Keberangkatan">
            {{--<input class="form-control text-center" type="text" placeholder="click to show datepicker"  id="datepicker-form">--}}
                    <!-- end of coba datepicker -->

        </div>
    </div>
</div>


<div class="form-group{{ $errors->has('anggota_jamaah') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            {!! Form::label('anggota_jamaah','Anggota Jamaah (min 8 orang)') !!}
            {!! Form::select('anggota_jamaah',[8 => 8,9 => 9],null,['class' => 'form-control text-center', 'placeholder'  => 'Jumlah Jamaah']) !!}
            @if ($errors->has('anggota_jamaah'))
                <span class="help-block text-center">
                        <strong>{{ $errors->first('anggota_jamaah') }}</strong>
                    </span>
            @endif
        </div>

    </div>
</div>
<div class="form-group{{ $errors->has('hotel_mekah') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            {!! Form::label('hotel_mekah','Embarkasi') !!}
            {!! Form::select('hotel_mekah',[1 => 'Juni 2016'],null,['class' => 'form-control text-center', 'placeholder'  => 'Hotel Mekah']) !!}
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
            {!! Form::label('hotel_madinah','Waktu Keberangkatan (mingguan)') !!}
            {!! Form::select('hotel_madinah',[1 => 'Juni 2016'],null,['class' => 'form-control text-center', 'placeholder'  => 'Hotel Madinah']) !!}
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