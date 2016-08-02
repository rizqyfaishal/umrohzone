<h3>Data Pemesan yang dapat dihubungi</h3>
{!! Form::open(['action' => ['PemesanController@postRegister'], 'class' => 'data-pemesan-form data-pemesan-form-field']) !!}
    <div class="row form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {!! Form::label('nama','Nama') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            {!! Form::text('nama',old('nama'),['class' => 'form-control','placeholder' => 'Nama']) !!}
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {!! Form::label('email','Email') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            {!! Form::text('email',old('email'),['class' => 'form-control','placeholder' => 'Email']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {!! Form::label('phone','Nomor Handphone') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            {!! Form::text('phone',old('phone'),['class' => 'form-control','placeholder' => 'Nomor Handphone']) !!}
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {!! Form::label('password','Password') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            {!! Form::password('password',['class' => 'form-control','placeholder' => 'Password']) !!}
            @if ($errors->has('password'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>
    </div>
    <div class="row form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {!! Form::label('password_confirmation','Password Confirmation') !!}
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            {!! Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Password Confirmation']) !!}
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#confirmationModal">
            Lanjutkan !
        </button>
    </div>
    <!--Modal-->
    @include('partials._data-pemesan-form-modal')
{!! Form::close() !!}
<script>

</script>