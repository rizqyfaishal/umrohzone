<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('waktu') ? ' has-error' : '' }}">
            {!! Form::label('waktu','Waktu') !!}
            {!! Form::date('waktu',old('waktu'),['class' => 'form-control','placeholder' => 'Waktu']) !!}
            @if ($errors->has('waktu'))
                <span class="help-block">
                    <strong>{{ $errors->first('waktu') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
            {!! Form::label('harga','Harga') !!}
            {!! Form::number('harga',old('harga'),['class' => 'form-control','placeholder' => 'Harga (dalam juta)', 'step' => 0.1]) !!}
            @if ($errors->has('harga'))
                <span class="help-block">
                    <strong>{{ $errors->first('harga') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('durasi') ? ' has-error' : '' }}">
            {!! Form::label('durasi','Durasi') !!}
            {!! Form::number('durasi',old('durasi'),['class' => 'form-control','placeholder' => 'Durasi (dalam hari)']) !!}
            @if ($errors->has('durasi'))
                <span class="help-block">
                    <strong>{{ $errors->first('durasi') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('kuota') ? ' has-error' : '' }}">
            {!! Form::label('kuota','Kuota') !!}
            {!! Form::number('kuota',old('kuota'),['class' => 'form-control','placeholder' => 'Kuota']) !!}
            @if ($errors->has('kuota'))
                <span class="help-block">
                    <strong>{{ $errors->first('kuota') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('hotel_mekah_id') ? ' has-error' : '' }}">
            {!! Form::label('hotel_mekah_id','Hotel Mekah') !!}
            {!! Form::select('hotel_mekah_id',\App\Hotel::where('hotel_primary_lokasi','=','Mekah')->lists('nama','id'),old('hotel_mekah_id'),['class' => 'form-control','placeholder' => 'Hotel Mekah']) !!}
            @if ($errors->has('hotel_mekah_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_mekah_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('hotel_madinah_id') ? ' has-error' : '' }}">
            {!! Form::label('hotel_madinah_id','Hotel Madinah') !!}
            {!! Form::select('hotel_madinah_id',\App\Hotel::where('hotel_primary_lokasi','=','Madinah')->lists('nama','id'),old('hotel_madinah_id'),['class' => 'form-control','placeholder' => 'Hotel Madinah']) !!}
            @if ($errors->has('hotel_madinah_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_madinah_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('discount') ? ' has-error' : '' }}">
            {!! Form::label('discount','Discount') !!}
            {!! Form::number('discount',old('discount'),['class' => 'form-control','placeholder' => 'Discount (dalam persen)']) !!}
            @if ($errors->has('discount'))
                <span class="help-block">
                    <strong>{{ $errors->first('hotel_mekah_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('agen_id') ? ' has-error' : '' }}">
            {!! Form::label('agen_id','Nama Agen') !!}
            {!! Form::select('agen_id',\App\Agen::lists('nama_agen','id'),old('agen_id'),['class' => 'form-control','placeholder' => 'Nama Agen']) !!}
            @if ($errors->has('agen_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('agen_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('pesawat_id') ? ' has-error' : '' }}">
            {!! Form::label('pesawat_id','Pesawat') !!}
            {!! Form::select('pesawat_id',\App\Pesawat::lists('nama','id'),old('pesawat_id'),['class' => 'form-control','placeholder' => 'Pesawat']) !!}
            @if ($errors->has('pesawat_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('pesawat_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('manasik_id') ? ' has-error' : '' }}">
            {!! Form::label('manasik_id','Agenda Manasik') !!}
            {!! Form::select('manasik_id',\App\Manasik::lists('waktu_manasik','id'),old('manasik_id'),['class' => 'form-control','placeholder' => 'Agenda Manasik']) !!}
            @if ($errors->has('manasik_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('manasik_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('penerbangan_berangkat_id') ? ' has-error' : '' }}">
            {!! Form::label('penerbangan_berangkat_id','Penerbangan Berangkat') !!}
            {!! Form::select('penerbangan_berangkat_id',\App\Penerbangan::where('jenis_penerbangan','=',1)->lists('tanggal_berangkat','id'),old('penerbangan_berangkat_id'),['class' => 'form-control','placeholder' => 'Penerbangan Berangkat']) !!}
            @if ($errors->has('pesawat_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('pesawat_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('penerbangan_pulang_id') ? ' has-error' : '' }}">
            {!! Form::label('penerbangan_pulang_id','Penerbangan Pulang') !!}
            {!! Form::select('penerbangan_pulang_id',\App\Penerbangan::where('jenis_penerbangan','=',0)->lists('tanggal_berangkat','id'),old('penerbangan_pulang_id'),['class' => 'form-control','placeholder' => 'Penerbangan Pulang']) !!}
            @if ($errors->has('penerbangan_pulang_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('penerbangan_pulang_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('paket_category_id') ? ' has-error' : '' }}">
            {!! Form::label('paket_category_id','Kategori Paket') !!}
            {!! Form::select('paket_category_id',\App\PaketCategory::lists('name','id'),old('paket_category_id'),['class' => 'form-control','placeholder' => 'Paket Category']) !!}
            @if ($errors->has('paket_category_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('paket_category_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('embarkasi_id') ? ' has-error' : '' }}">
            {!! Form::label('embarkasi_id','Embarkasi') !!}
            {!! Form::select('embarkasi_id',\App\Embarkasi::lists('nama','id'),old('embarkasi_id'),['class' => 'form-control','placeholder' => 'Embarkasi']) !!}
            @if ($errors->has('embarkasi_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('embarkasi_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<hr>
<h3>Agenda</h3>
<div id="agenda-form">
    <div class="row" id="agenda-template">
        <div class="col-lg-6 col-md-6 col-sm-12" >
            <div class="form-group {{ $errors->has('photos') ? ' has-error' : '' }}">
                {!! Form::label('agenda','Agenda') !!}
                {!! Form::file('agenda[]',old('agenda'),['class' => 'form-control', 'placeholder' => 'Photo Pesawat', 'multiple']) !!}
                @if ($errors->has('photos'))
                    <span class="help-block">
                    <strong>{{ $errors->first('photos') }}</strong>
                 </span>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <button id="add-template" style="margin: 1em 0;" class="btn btn-orange" type="button"><i class="fa fa-plus">&nbsp;</i>Tambah Foto</button>
    </div>
</div>
<script>
    var count = 1;
    var btn = $('#add-template').on('click',function () {
        if(count <= 15){
            var template = $('#photos-template').html();
            var con = $('#photos-form');
            var elem = document.createElement('div');
            elem.className = 'col-lg-6 col-md-6 col-sm-12';
            elem.innerHTML = template;
            $(con).append(elem);
            count++;
        } else {
            alert('Photo tidak boleh lebih dari 16');
        }
    })
</script>

