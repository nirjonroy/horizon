@extends('frontend.app')

@section('content')
<section class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Left Side Card -->
            <div class="bg-gradient-to-r from-blue-900 to-red-600 text-white p-6 mt-12 lg:mt-0 rounded-lg flex flex-col items-start">
                <h2 class="text-2xl font-semibold mb-4">Appointment for Consultation</h2>
                <div class="flex items-center justify-center gap-2 mb-2">
                    <i class="fa-solid fa-clock"></i>
                    <p class="text-lg">30 Mins</p>
                </div>
                <div class="flex items-center justify-center gap-2 mb-2">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p class="text-lg font-medium">Wed, Dec 18, 2024</p>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <i class="fa-solid fa-globe"></i>
                    <p class="text-lg font-medium">UTC-5 Eastern Time</p>
                </div>
            </div>

            <!-- Right Side Form -->
            <div>
                <h2 class="text-xl font-semibold mb-4 underline">Enter Details</h2>
                <form action="{{ route('consultation.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name *</label>
                        <input type="text" id="first-name" name="first_name" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name *</label>
                        <input type="text" id="last-name" name="last_name" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone *</label>
                        <input type="tel" id="phone" name="phone" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input type="email" id="email" name="email" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="additional-info" class="block text-sm font-medium text-gray-700">Additional Information</label>
                        <textarea id="additional-info" name="additional_info" rows="4" 
                                  class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500" 
                                  placeholder="Is there anything you would like us to know before your appointment?"></textarea>
                    </div>
                    <div class="flex items-start justify-center">
                        <input type="checkbox" id="confirm" name="confirm" required 
                               class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="confirm" class="ml-2 text-sm text-gray-700">
                            I confirm that I want to receive content from this company using any contact information I provide.
                        </label>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" 
                                class="lg:text-base text-sm bg-[#FF0000] text-white mt-4 px-3 py-2 rounded-md font-bold">
                            Schedule
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection