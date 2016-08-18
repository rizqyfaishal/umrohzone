<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            {!! Form::label('nama','Nama Paket') !!}
            {!! Form::text('nama',old('nama'),['class' => 'form-control','placeholder' => 'Nama Paket']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
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
            @if(isset($agen))
                <input disabled name="agen_id" value="{{$agen->id}}" class="form-control">
            @else
            {!! Form::select('agen_id',\App\Agen::lists('nama_agen','id'),old('agen_id'),['class' => 'form-control','placeholder' => 'Nama Agen']) !!}
            @endif
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
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('manasik_id') ? ' has-error' : '' }}">
            {!! Form::label('manasik_id','Agenda Manasik') !!}
            <select name="manasik_id" id="manasik_id" class="form-control">
                <option value="0" selected>Agenda Manasik</option>
                @foreach(\App\Manasik::with('address')->get() as $manasik)
                    @if(!is_null(old('manasik_id')))
                        @if(old('manasik_id') == $manasik->id)
                            <option selected value="{{ $manasik->id }}">{{ $manasik->address->full_address }} - {{ $manasik->waktu_manasik }}</option>
                        @else
                            <option value="{{ $manasik->id }}">{{ $manasik->address->full_address }} - {{ $manasik->waktu_manasik }}</option>
                        @endif
                    @else
                        <option value="{{ $manasik->id }}">{{ $manasik->address->full_address }} - {{ $manasik->waktu_manasik }}</option>
                    @endif
                @endforeach
            </select>
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
            {!! Form::select('penerbangan_pulang_id',\App\Penerbangan::where('jenis_penerbangan','=',2)->lists('tanggal_berangkat','id'),old('penerbangan_pulang_id'),['class' => 'form-control','placeholder' => 'Penerbangan Pulang']) !!}
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
<h3>Fasilitas</h3>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('fasilitas') ? ' has-error' : '' }}">
            {!! Form::label('fasilitas','Fasilitas Paket') !!}
            {!! Form::select('fasilitas[]',\App\Fasilitas::lists('name','id'),is_null($paket->fasilitas->lists('id')) ?  old('hotel_fasilitas') : $paket->fasilitas->lists('id')->all(),['class' => 'form-control','multiple','placeholder' => 'Fasilitas']) !!}
        </div>
    </div>
</div>
<hr>
<h3>Agenda</h3>
<input type="hidden" id="agenda_count" value="0" name="agenda_count">
<div id="agenda-form">
</div>
<div class="row">
    <div class="col-lg-3">
        <button id="add-template" style="margin: 1em 0;" class="btn btn-orange" type="button"><i class="fa fa-plus">&nbsp;</i>Tambahkan Agenda</button>
    </div>
</div>
<script>
    var count = 0;

    var btn = $('#add-template').on('click',function () {
        if(count <= 7){
            var row = document.createElement('div');
            row.className = 'row';
            var col1 = document.createElement('div');
            col1.className = 'col-lg-6 col-md-6 col-sm-12';
            var col2 = document.createElement('div');
            col2.className = 'col-lg-6 col-md-6 col-sm-12';
            var fg1 = document.createElement('div');
            fg1.className = 'form-group';
            var fg2 = document.createElement('div');
            fg2.className = 'form-group';
            var label1 = document.createElement('label');
            label1.setAttribute('for','agenda' + ++count);
            label1.innerHTML = 'Nama Agenda';
            var text1 = document.createElement('input');
            text1.setAttribute('type','text');
            text1.setAttribute('name','agenda' + count);
            text1.setAttribute('placeholder','Nama Agenda');
            text1.className = 'form-control agenda-name-input';
            text1.id = 'agenda' + count;
            fg1.appendChild(label1);
            fg1.appendChild(text1);
            col1.appendChild(fg1);
            row.appendChild(col1);


            var label2 = document.createElement('label');
            label2.setAttribute('for','tempat_agenda' + count);
            label2.innerHTML = 'Tempat Agenda';
            var text2 = document.createElement('input');
            text2.setAttribute('type','text');
            text2.setAttribute('name','tempat_agenda' + count);
            text2.setAttribute('placeholder','Tempat Agenda');
            text2.className = 'form-control agenda-address-input';
            text2.id = 'agenda' + count;

            fg2.appendChild(label2);
            fg2.appendChild(text2);
            col2.appendChild(fg2);
            row.appendChild(col2);

            $('#agenda-form').append(row);
            $('#agenda_count').val(count);
        } else {
            alert('Agenda tidak boleh lebih dari 7');
        }
    })
</script>
@include('partials._select2')
