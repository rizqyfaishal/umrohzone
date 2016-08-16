@section('side-nav')
    <ul>
        <li><a href="{{ action('AdminController@index') }}">Bookings</a></li>
        <li><a href="{{ action('AdminController@getJamaah') }}">Jamaah</a></li>
        <li><a href="{{ action('AdminController@getTA') }}">Travel Agent</a></li>
        <li><a href="{{ action('AdminController@getHotels') }}">Hotel</a></li>
        <li><a href="{{ action('AdminController@getAirlines') }}">Maskapai</a></li>
    </ul>
@endsection
