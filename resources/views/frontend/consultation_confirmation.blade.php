@extends('frontend.app')

@section('content')
<section class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6 text-center">
        <h1 class="text-2xl font-semibold text-blue-600 mb-4">Your Meeting has been Scheduled</h1>
        <p class="text-gray-700 mb-6">
            Thank you for your appointment request. We will contact you shortly to confirm your request. 
            Please call our office at 
            <a href="tel:+12144322647" class="text-blue-500 underline">(214) 432-2647</a> if you have any questions.
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

        <!-- Calendar Integration Section -->
        <div class="mt-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Add to Calendar</h2>
            <div class="flex justify-center space-x-4">
                <!-- Google Calendar -->
                <a href="{{ $googleCalendarLink }}" target="_blank" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">
                    Google Calendar
                </a>
                <!-- iCloud Calendar -->
                <a href="{{ $iCloudCalendarLink }}" target="_blank" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                    iCloud Calendar
                </a>
                <!-- Outlook Calendar -->
                <a href="{{ $outlookCalendarLink }}" target="_blank" class="bg-purple-500 text-white py-2 px-4 rounded-lg hover:bg-purple-600">
                    Outlook Calendar
                </a>
            </div>
        </div>

        <button onclick="window.location.href='{{ route('home.index') }}'" class="mt-6 bg-blue-900 text-white py-2 px-6 rounded-lg hover:bg-blue-500">
            Go to Homepage
        </button>
    </div>
</section>
@endsection