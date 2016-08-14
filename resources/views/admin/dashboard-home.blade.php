@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="booking-summary">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Booking Summary</h2>
                <table class="table table-hover table-custom">

                    <thead>
                    <tr>
                        <td>Booking No.</td>
                        <td>Package</td>
                        <td>Travel Agent</td>
                        <td>Departure Date</td>
                        <td>Pax</td>
                        <td>DP</td>
                        <td>Submit Docs</td>
                        <td>Visa</td>
                        <td>Result</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{$booking->no_booking}}</td>
                            <td>Multizaram 9 days</td>
                            <td>Magna</td>
                            <td>09 Sept 2016</td>
                            <td>4</td>
                            <td>2000</td>
                            <td>JNE Airwaybill pk21827912</td>
                            @if($booking->status_payment == 0)
                                <td> Invalid </td>
                            @elseif($booking->status_payment == 1)
                                <td> Waiting </td>
                            @else
                                <td> Valid </td>
                            @endif
                            <td><a href="#" class="pdf-submit"><i class="fa fa-file-pdf-o"></i></a></td>
                            <td> <a href="/payment/process/{{$booking->no_booking}}">Validate</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection