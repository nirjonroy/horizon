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
      class="max-w-7xl mx-4 lg:mx-auto overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white"
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
                  <span class="absolute -right-7 -bottom-7 z-[-1]">
                    <svg
                      width="134"
                      height="106"
                      viewBox="0 0 134 106"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="1.66667"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 1.66667 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 16.3333 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 31 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 45.6667 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3334"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 60.3334 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 88.6667 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 117.667 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 74.6667 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 103 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="104"
                        r="1.66667"
                        transform="rotate(-90 132 104)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="89.3333"
                        r="1.66667"
                        transform="rotate(-90 1.66667 89.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="89.3333"
                        r="1.66667"
                        transform="rotate(-90 16.3333 89.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="89.3333"
                        r="1.66667"
                        transform="rotate(-90 31 89.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="89.3333"
                        r="1.66667"
                        transform="rotate(-90 45.6667 89.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="89.3338"
                        r="1.66667"
                        transform="rotate(-90 60.3333 89.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="89.3338"
                        r="1.66667"
                        transform="rotate(-90 88.6667 89.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="89.3338"
                        r="1.66667"
                        transform="rotate(-90 117.667 89.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="89.3338"
                        r="1.66667"
                        transform="rotate(-90 74.6667 89.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="89.3338"
                        r="1.66667"
                        transform="rotate(-90 103 89.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="89.3338"
                        r="1.66667"
                        transform="rotate(-90 132 89.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="74.6673"
                        r="1.66667"
                        transform="rotate(-90 1.66667 74.6673)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="31.0003"
                        r="1.66667"
                        transform="rotate(-90 1.66667 31.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 16.3333 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="31.0003"
                        r="1.66667"
                        transform="rotate(-90 16.3333 31.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 31 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="31.0003"
                        r="1.66667"
                        transform="rotate(-90 31 31.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 45.6667 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="31.0003"
                        r="1.66667"
                        transform="rotate(-90 45.6667 31.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 60.3333 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="30.9998"
                        r="1.66667"
                        transform="rotate(-90 60.3333 30.9998)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 88.6667 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="30.9998"
                        r="1.66667"
                        transform="rotate(-90 88.6667 30.9998)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 117.667 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="30.9998"
                        r="1.66667"
                        transform="rotate(-90 117.667 30.9998)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 74.6667 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="30.9998"
                        r="1.66667"
                        transform="rotate(-90 74.6667 30.9998)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 103 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="30.9998"
                        r="1.66667"
                        transform="rotate(-90 103 30.9998)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="74.6668"
                        r="1.66667"
                        transform="rotate(-90 132 74.6668)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="30.9998"
                        r="1.66667"
                        transform="rotate(-90 132 30.9998)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 1.66667 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 1.66667 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 16.3333 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 16.3333 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 31 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 31 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 45.6667 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 45.6667 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 60.3333 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 60.3333 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 88.6667 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 88.6667 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 117.667 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 117.667 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 74.6667 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 74.6667 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 103 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 103 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="60.0003"
                        r="1.66667"
                        transform="rotate(-90 132 60.0003)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="16.3333"
                        r="1.66667"
                        transform="rotate(-90 132 16.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="45.3333"
                        r="1.66667"
                        transform="rotate(-90 1.66667 45.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.66667"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 1.66667 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="45.3333"
                        r="1.66667"
                        transform="rotate(-90 16.3333 45.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="16.3333"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 16.3333 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="45.3333"
                        r="1.66667"
                        transform="rotate(-90 31 45.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="31"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 31 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="45.3333"
                        r="1.66667"
                        transform="rotate(-90 45.6667 45.3333)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="45.6667"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 45.6667 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="45.3338"
                        r="1.66667"
                        transform="rotate(-90 60.3333 45.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="60.3333"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 60.3333 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="45.3338"
                        r="1.66667"
                        transform="rotate(-90 88.6667 45.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="88.6667"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 88.6667 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="45.3338"
                        r="1.66667"
                        transform="rotate(-90 117.667 45.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="117.667"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 117.667 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="45.3338"
                        r="1.66667"
                        transform="rotate(-90 74.6667 45.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="74.6667"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 74.6667 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="45.3338"
                        r="1.66667"
                        transform="rotate(-90 103 45.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="103"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 103 1.66683)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="45.3338"
                        r="1.66667"
                        transform="rotate(-90 132 45.3338)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="132"
                        cy="1.66683"
                        r="1.66667"
                        transform="rotate(-90 132 1.66683)"
                        fill="#3056D3"
                      />
                    </svg>
                  </span>
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
