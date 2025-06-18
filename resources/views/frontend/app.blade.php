<!DOCTYPE html>
<html>
    @include('frontend.head')
  <body>
      
<div
  id="preloader"
  class="preloader fixed top-0 left-0 w-full h-full bg-primary flex justify-center items-center z-50"
>

  <a href="{{route('home.index')}}">
            @php
                $siteInfo = DB::table('site_information')->first();
            @endphp
          <img class="w-36 lg:w-48 animate-bounce" src="{{asset($siteInfo->logo)}}" alt="{{$siteInfo->name}}" />
        </a>
  </div>


<div class="content hidden">


    @include('frontend.header')

    @yield('content')
</div>    
 
    @include('frontend.footer')
    
    
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
 
