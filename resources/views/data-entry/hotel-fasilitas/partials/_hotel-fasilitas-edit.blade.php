{!! Form::model($hotelFasilitas,['method' => 'PATCH', 'action' => ['HotelFasilitasController@update',$hotelFasilitas->id]]) !!}
@include('data-entry.hotel-fasilitas.partials._hotel-fasilitas-form')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Edit data hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {!! Form::label('hotel_fasilitas_details','Detail Fasilitas') !!}
        <div id="form-text-con">
            @foreach($hotelFasilitas->details as $detail)
              <div class="row">
                  <div class="col-lg-5">
                      <div class="form-group {{ $errors->has('hotel_fasilitas_details') ? ' has-error' : '' }}">
                          {!! Form::text('hotel_fasilitas_details[]',is_null($detail) ? old('hotel_fasilitas_detail[]') : $detail->name ,['class' => 'form-control','placeholder' => 'Nama Hotel','multiple' => 'multiple']) !!}
                          @if ($errors->has('hotel_fasilitas_detail'))
                              <span class="help-block">
                            <strong>{{ $errors->first('hotel_fasilitas_detail') }}</strong>
                        </span>
                          @endif
                      </div>
                  </div>
                  <div class="col-lg-7">
                      {!! Form::model($detail,['action' => ['HotelFasilitasDetailController@destroy',$detail->id], 'method' => 'DELETE','class' => 'form-delete']) !!}
                      <button class="btn btn-orange btn-sm"><i class="fa fa-trash">&nbsp;</i></button>
                      {!! Form::close() !!}
                  </div>
              </div>
            @endforeach
        </div>
        <div class="form-group">
            <button id="add" class="btn btn-orange" type="button"><i class="fa fa-plus">&nbsp;</i>Tambahkan detail</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <input type="submit" value="Buat data fasilitas hotel" class="btn btn-custom"/>
        </div>
    </div>
</div>
{!! Form::close() !!}
