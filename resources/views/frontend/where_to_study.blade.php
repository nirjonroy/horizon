@extends('frontend.app')

@section('title', $studies->name)
@section('seos')
    @php
        $SeoSettings = DB::table('seo_settings')->where('id', 1)->first();
        // Decode the keywords JSON string into an array
        $keywordsArray = json_decode($studies->keywords, true);
    @endphp

    <meta charset="UTF-8">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta name="title" content="{{$studies->meta_title}}">

    <meta name="description" content="{{$studies->meta_description}}">
    
    <!-- Populate the keywords meta tag -->
    <meta name="keywords" content="{{ isset($keywordsArray) ? implode(', ', $keywordsArray) : '' }}" /> 

    <meta property="og:title" content="{{$studies->meta_title}}">
    <meta property="og:description" content="{{$studies->meta_description}}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{$studies->meta_title}}">
    <meta property="og:image" content="{{asset($studies->slider1)}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@endsection

@section('content')
<!--University Slider-->
<section class="bg-white">
  <!-- Hero Section -->
  <div class="max-w-7xl mx-auto px-4 pt-24 lg:pt-40 py-12">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <div class="md:w-1/2">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6">{{ $studies->name }}</h1>
        <p class="text-lg text-gray-600 mb-6">
          {!! $studies->short_description !!}
        </p>
         <div class="flex gap-4">
          <a style="background:red" href="{{route('consultation.step1')}}" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg transition duration-300 font-medium shadow-md">
          Book Consultaion
        </a>
        <a href="{{route('apply.now')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition duration-300 font-medium shadow-md">
          Apply Now
        </a>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="{{asset($studies->slider1)}}">
      </div>
    </div>
  </div>

  <!-- Popular Courses Section -->
  <div class="bg-blue-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Our Popular Courses</h2>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Course 1 -->
        @foreach ($latest_course as $item)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-t-4 border-blue-500">
          <h3 class="text-xl font-semibold text-blue-900 mb-3">{{$item->short_name}}</h3>
          <p class="text-gray-600 mb-4">{!! $item->short_description !!}</p>
          <div class="flex justify-between items-center">
            <span class="font-bold text-blue-600">{{$item->total_fee}}</span>
            <a href="{{route('apply.now')}}" class="text-blue-600 hover:text-blue-800 border p-1 border-blue-300 rounded-lg font-medium">Apply Now →</a>
          </div>
        </div>
         @endforeach
        
      </div>
    </div>
  </div>

  <!-- All Programs Section -->
  <div class="max-w-7xl mx-auto px-4 py-16">
     @foreach($categories as $category)
    {{-- <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">All {{ $studies->name }} Programs</h2> --}}
    
    <!-- Online Bachelor's -->
    <div class="mb-16">
      <h3 class="text-2xl font-semibold text-blue-800 mb-6 border-b pb-2">{{$studies->name}}   {{ $category->name }}’s Programs</h3>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
          <thead class="bg-blue-100">
            <tr>
              <th class="py-3 px-4 text-left font-semibold text-blue-700">Programs</th>
              <th class="py-3 px-4 text-left font-semibold text-blue-700">Total Tuition Fees</th>
              <th class="py-3 px-4 text-left font-semibold text-blue-700">Fees/Year</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-blue-200">
            @foreach($category->onlineFees as $fee)
            <tr class="hover:bg-blue-50">
              <td class="py-4 px-4"> {{ $fee->program }}</td>
              <td class="py-4 px-4">{{ $fee->total_fee }}</td>
              <td class="py-4 px-4">{{ $fee->yearly }} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
    @endforeach
  </div>

  <!-- CTA Section -->
  <div class="bg-gradient-to-r from-blue-600 to-red-600 py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-white mb-6">Ready to Join SSBM Geneva?</h2>
      <p class="text-xl text-white mb-8 max-w-3xl mx-auto">Take the next step in your academic and professional journey with our world-class programs.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="{{route('apply.now')}}" class="bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-blue-100 transition duration-300 font-medium shadow-lg">
          Apply Now
        </a>
        <a href="{{route('consultation.step1')}}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-blue-600 transition duration-300 font-medium shadow-lg">
         Book Consultancy
        </a>
      </div>
    </div>
  </div>
</section>




@endsection
