@extends('frontend.app')

@section('content')
<section class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6 text-center">
        <h1 class="text-2xl font-semibold text-blue-600 mb-4">Your Meeting has been Scheduled</h1>
        <p class="text-gray-700 mb-6">
            Thank you for your appointment request. We will contact you shortly to confirm your request. 
            Please call our office at 
            <a href="tel:+12144322647" class="text-blue-500 underline">+1 (202) 459-7853</a> if you have any questions.
        </p>

        <div class="bg-blue-50 p-4 rounded-lg border border-blue-300">
            <p class="text-lg font-medium text-blue-700">30 Mins</p>
            <p class="text-xl font-semibold text-gray-800 mt-2">
                {{ \Carbon\Carbon::parse($booking->time)->format('h:i A') }} - 
                {{ \Carbon\Carbon::parse($booking->time)->addMinutes(30)->format('h:i A') }}
            </p>
            <p class="text-lg text-gray-700">
                {{ \Carbon\Carbon::parse($booking->date)->format('D, M d, Y') }}
            </p>
            <p class="text-sm text-gray-500 mt-1">UTC </p>
        </div>

        <button onclick="window.location.href='{{ route('home.index') }}'" class="mt-6 bg-blue-900 text-white py-2 px-6 rounded-lg hover:bg-blue-500">
            Go to Homepage
        </button>
    </div>
</section>
@endsection
