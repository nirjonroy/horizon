@extends('frontend.app')
@section('title', 'Horizon - Who We are')
@section('seos')
    @php
        $SeoSettings = DB::table('seo_settings')->where('id', 2)->first();
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

<!-- ====== About Section Start -->
<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary to-red text-white lg:pt-40 pt-28 py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">About Horizons Unlimited</h1>
        <p class="text-xl max-w-3xl mx-auto">Empowering individuals through quality online education to build a more skillful world</p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mission</h2>
            <p class="text-xl text-gray-600">To provide accessible, high-quality online education that equips people with the skills they need to thrive in today's competitive world. We believe education should be flexible, affordable, and tailored to help you achieve your personal and professional goals.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-blue-50 p-8 rounded-lg shadow-sm hover:shadow-md transition duration-300 border-t-4 border-blue-500">
                <div class="text-red mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Skill Development</h3>
                <p class="text-gray-600">Our courses are designed to make you more skillful and competitive in today's job market.</p>
            </div>
            
            <div class="bg-blue-100 p-8 rounded-lg shadow-sm hover:shadow-md transition duration-300 border-t-4 border-red">
                <div class="text-blue-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">University Partnerships</h3>
                <p class="text-gray-600">Access courses from prestigious universities worldwide, all from the comfort of your home.</p>
            </div>
            
            <div class="bg-blue-50 p-8 rounded-lg shadow-sm hover:shadow-md transition duration-300 border-t-4 border-blue-500">
                <div class="text-red mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Flexible Plans</h3>
                <p class="text-gray-600">Premium monthly subscriptions with a 30-day money-back guarantee for risk-free learning.</p>
            </div>
        </div>
    </div>
</section>

<!-- University Partners -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our University Partners</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">We collaborate with prestigious institutions to bring you world-class education</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-blue-500 hover:border-red transition duration-300">
                <span class="font-semibold text-gray-700">SSBM</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-red hover:border-blue-500 transition duration-300">
                <span class="font-semibold text-gray-700">Golden Gate University</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-blue-500 hover:border-red transition duration-300">
                <span class="font-semibold text-gray-700">University of Liverpool</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-red hover:border-blue-500 transition duration-300">
                <span class="font-semibold text-gray-700">Rashford Business School</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-blue-500 hover:border-red transition duration-300">
                <span class="font-semibold text-gray-700">ESGI</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-red hover:border-blue-500 transition duration-300">
                <span class="font-semibold text-gray-700">Edgwood College</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-blue-500 hover:border-red transition duration-300">
                <span class="font-semibold text-center text-gray-700">Liverpool John Moores University</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center border-l-4 border-red hover:border-blue-500 transition duration-300">
                <span class="font-semibold text-gray-700">Paris School of Business</span>
            </div>
        </div>
    </div>
</section>

<!-- Premium Courses -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Premium Courses</h2>
                <p class="text-gray-600 mb-6">Enhance your learning experience with our premium subscription plans. Get access to exclusive content, personalized coaching, and advanced learning materials.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-700">Monthly subscription plans</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-700">30-day money-back guarantee</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-700">Exclusive content and resources</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-700">Personalized learning paths</span>
                    </li>
                </ul>
                <button class="bg-gradient-to-r from-primary to-red text-white px-6 py-3 rounded-lg hover:from-blue-700 hover:to-red-700 transition duration-300 font-medium shadow-md">Explore Premium Plans</button>
            </div>
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Premium Courses" class="rounded-lg shadow-md w-full border-4 border-blue-500 hover:border-red transition duration-300">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-primary to-red text-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to enhance your skills?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Join thousands of students who are advancing their careers with our online courses.</p>
        <button class="bg-white text-blue-600 px-8 py-4 rounded-lg hover:bg-gray-100 hover:text-red-600 transition duration-300 font-medium shadow-lg">Start Learning Today</button>
    </div>
</section>
<!-- ====== About Section End -->
@endsection
