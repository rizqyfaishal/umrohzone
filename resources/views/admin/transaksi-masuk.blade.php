@extends('template.user-template')

@section('content')
    <div class="container">
        <?php $i = 1 ?>
        @foreach($bookings as $booking)
            {{$i++}} <a href="/payment/process/{{$booking->no_booking}}">Validate</a>
        @endforeach
    </div>
@endsection

@section('additional-script')
@endsection