<!DOCTYPE html>
<html>
    @include('frontend.head')
  <body>
      
<div
  id="preloader"
  class="preloader fixed top-0 left-0 w-full h-full bg-primary flex justify-center items-center z-50"
>
  <div
    id="loader"
    class="loader border-2 border-dashed border-yellow-200 rounded-full w-32 h-32 lg:w-48 lg:h-48"
  >
    <img
      id="loading-icon"
      src="{{asset('frontend/images/logo-preloader.png')}}"
      alt="Loading Icon"
      class="loading-icon lg:w-48 w-32 h-32 lg:h-48 mx-auto"
    />
  </div>
</div>

<div class="content hidden">


    @include('frontend.header')

    @yield('content')
</div>    
 
    @include('frontend.footer')
    
    
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
 
