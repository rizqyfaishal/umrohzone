{{--{!! Form::open(['url' => '/login','METHOD' => 'POST'])!!}--}}
<h3>Sign in</h3>
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-lg-12">
            {{--{!! Form::label('email') !!}--}}
            {{--{!! Form::text('email',old('email'),['class' => 'form-control','placeholder' => 'Email']) !!}--}}
            <label for="email_coba">Email:</label>
            <input type="email" class="form-control" id="email_coba">
        </div>
    </div>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
{{--<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">--}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
            {{--{!! Form::label('password') !!}--}}
            {{--{!! Form::password('password',['class' => 'form-control','placeholder' => 'Password']) !!}--}}
            <label >Password</label>
            <input type="password" class="form-control" placeholder="password">
        </div>
    </div>
    {{--@if ($errors->has('password'))--}}
        {{--<span class="help-block">--}}
            {{--<strong>{{ $errors->first('password') }}</strong>--}}
        {{--</span>--}}
    {{--@endif--}}
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    {{--<button type="submit" class="btn btn-custom">--}}
        {{--<i class="fa fa-btn fa-sign-in"></i> Login--}}
    {{--</button>--}}
    <button class="btn btn-custom" onclick="cobalogin()">
        <i class="fa fa-btn fa-sign-in"></i> Login
    </button>
    {{--<a href="#" class="btn btn-custom">--}}
        {{--<i class="fa fa-btn fa-sign-in"></i> Login--}}
    {{--</a>--}}
    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
</div>

{{--{!! Form::close() !!}--}}

<script>
    function cobalogin() {
        if (document.getElementById('email_coba').value == 'luthfi@coba.com') {
            window.open("/dashboard", "_self");
        } else if (document.getElementById('email_coba').value == 'agent@coba.com') {
            window.open("/dashboardAgent", "_self")
        }
    }
</script>