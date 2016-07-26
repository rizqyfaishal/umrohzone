@extends('template.user-template')

@section('content')
    <div class="container">
        <?php $i = 1 ?>
        @foreach($bookings as $booking)
            {{$i++}}
            @if($booking->status_payment == 0)
                Invalid
            @elseif($booking->status_payment == 1)
                Waiting
            @else
                Valid
            @endif
        @endforeach
    </div>
@endsection

@section('additional-script')
@endsection