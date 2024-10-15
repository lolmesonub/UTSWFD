@extends("base")

@section("content")
@extends("header")
<div class="p-5">
    <h1 class="flex font-bold text-black text-3xl justify-center mb-5">Airplane Booking System</h1>
    <div class="flex justify-between border-b-1 border-black">
        <p class="font-bold">Ticket Booking For</p>
        {{-- <p class="font-bold">{{ $flights->flight_code }}</p> --}}
    </div>

    <div class="flex justify-between">
        <p>{{ $flights->origin }}</p>
        <p>Departure {{ $flights->departure_time }}</p>
        <p>Arrived {{ $flights->arrival_time }}</p>
    </div>
@endsection
