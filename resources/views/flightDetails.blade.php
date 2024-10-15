@extends("base")

@section("content")
@extends("header")
<div class="p-5">
    <h1 class="flex font-bold text-black text-3xl justify-center mb-5">Airplane Booking System</h1>
    <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-3">
        @foreach ($flights as $flight)
            <div class="max-w-sm p-6 bg-gray-200 border rounded-lg shadow m-3">
                <div class="grid grid-cols-2">
                    <p class="text-xl mb-3 font-bold text-gray-700 dark:text-gray-400">{{ $flight->flight_code }}</p>
                    <p class="text-xl mb-3 font-bold text-gray-700 dark:text-gray-400">{{ $flight->origin }} -> {{ $flight->destination }}</p>
                </div>
                <p>Departure</p>
                <p class="font-bold">{{ $flight->departure_time }}</p>

                <p>Arrived</p>
                <p class="font-bold mb-3">{{ $flight->arrival_time }}</p>
                <div class="grid grid-cols-2 justify-between">
                    <a href="{{ route('tickets.create', $flight->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Book Ticket
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="{{ route('tickets.index', $flight->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        View Details
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
