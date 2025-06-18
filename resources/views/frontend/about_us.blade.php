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


<section
      class="max-w-7xl mx-4 lg:mx-auto overflow-hidden pt-20 pb-12  lg:pb-[90px] bg-white"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap items-center justify-between -mx-4">
          <div class="w-full px-4 lg:w-6/12">
            <div class="flex items-center -mx-3 sm:-mx-4">
              <div class="w-full px-3 sm:px-4 xl:w-1/2">
                <div class="py-3 sm:py-4">
                  <img
                    src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-1.jpg"
                    alt=""
                    class="w-full rounded-2xl"
                  />
                </div>
                <div class="py-3 sm:py-4">
                  <img
                    src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-2.jpg"
                    alt=""
                    class="w-full rounded-2xl"
                  />
                </div>
              </div>
              <div class="w-full px-3 sm:px-4 xl:w-1/2">
                <div class="relative z-10 my-4">
                  <img
                    src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-3.jpg"
                    alt=""
                    class="w-full rounded-2xl"
                  />
                  
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
            <div class="mt-10 lg:mt-0">
              <span class="block mb-4 text-lg font-semibold text-primary">
                Why Choose Us
              </span>
              <h2
                class="mb-5 text-3xl font-bold text-dark sm:text-[40px]/[48px]"
              >
                Make your online study much easier with us
              </h2>
              <p class="mb-5 text-base text-body-color">
                With our team of highly qualified tutors and proven track record
                of pupil success; Our students gain entry to the UK’S
                institutions including Hurtwood House, Eton College, the
                University of Cambridge and the University of Oxford. Not only
                do our tutors provide students with a solid foundation of
                knowledge upon which to build, but also focus on the development
                of key skills for success that students can carry forward into
                their future endeavours.
              </p>

              <a
                href="{{route('contact.us')}}"
                class="bg-primary items-center justify-center py-3 text-base font-medium text-center text-white border border-transparent rounded-md px-7 bg-primary hover:bg-opacity-90"
              >
                Get Started
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
