@extends('frontend.app')
@section('title', 'Horizon - Contact US')
@section('seos')
    @php
        $SeoSettings = DB::table('seo_settings')->where('id', 3)->first();
        // Decode the keywords JSON string into an array
        $keywordsArray = json_decode($SeoSettings->keywords, true);
    @endphp

    @php
    $siteInfo = DB::table('site_information')->first();
    @endphp

    <meta charset="UTF-8">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta name="title" content="{{$SeoSettings->seo_title}}">

    <meta name="description" content="{{$SeoSettings->seo_description}}">
    
    <!-- Populate the keywords meta tag -->
    <meta name="keywords" content="{{ isset($keywordsArray) ? implode(', ', $keywordsArray) : '' }}" /> 

    <meta property="og:title" content="{{$SeoSettings->seo_title}}">
    <meta property="og:description" content="{{$SeoSettings->seo_description}}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{$SeoSettings->seo_title}}">
    <meta property="og:image" content="{{asset($siteInfo->logo)}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@endsection

@section('content')
<section class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Left Side Card -->
            <div class="bg-blue-900 text-white p-6 mt-12 lg:mt-0 rounded-lg flex flex-col items-start">
                <h2 class="text-2xl font-semibold mb-4">Appointment for Consultation</h2>
                <div class="flex items-center justify-center gap-2 mb-2">
                    <i class="fa-solid fa-clock"></i>
                    <p class="text-lg">30 Mins</p>
                </div>
                <div class="flex items-center justify-center gap-2 mb-2">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p class="text-lg font-medium">{{ request('date') }}</p>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <i class="fa-solid fa-globe flex gap-2">{{ request('time') }}</i>
                    <p class="text-lg font-medium">UTC-5 Eastern Time</p>
                </div>
            </div>

            <!-- Right Side Form -->
            <div>
                <h2 class="text-xl font-semibold mb-4 underline">Enter Details</h2>
                
                <form method="POST" action="{{ route('consultation.personal-info') }}">
                    @csrf

                    <input type="hidden" name="date" value="{{ request('date') }}">
                    <input type="hidden" name="time" value="{{ request('time') }}">
                    <input type="hidden" name="time_zone" value="{{ request('time_zone') }}">
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name *</label>
                        <input type="text" id="first-name" name="first_name" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                               @error('first_name')
                               <span class="text-red-500 text-sm">{{ $message }}</span>
                           @enderror
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name *</label>
                        <input type="text" id="last-name" name="last_name" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                               @error('last_name')
                               <span class="text-red-500 text-sm">{{ $message }}</span>
                           @enderror
                   
                   </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone *</label>
                        <input type="tel" id="phone" name="phone" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                               @error('phone')
                               <span class="text-red-500 text-sm">{{ $message }}</span>
                           @enderror
                    
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input type="email" id="email" name="email" required 
                               class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500">
                               @error('email')
                               <span class="text-red-500 text-sm">{{ $message }}</span>
                           @enderror
                    </div>
                    <div>
                        <label for="additional-info" class="block text-sm font-medium text-gray-700">Additional Information</label>
                        <textarea id="additional-info" name="additional_info" rows="4" 
                                  class="mt-1 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500" 
                                  placeholder="Is there anything you would like us to know before your appointment?"></textarea>
                                  @error('additional_info')
                                  <span class="text-red-500 text-sm">{{ $message }}</span>
                              @enderror
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
                    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
