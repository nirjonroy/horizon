@extends('frontend.app')

@section('content')
 
<div class="h-auto rounded pt-20 flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-gray-50">
  <div data-theme="teal" class="mx-auto max-w-7xl lg:w-80 h-40 lg:h-80 flex items-center justify-center text-blue-900">
    <h1 class="text-center font-bold text-2xl">Coming Soon {{$studies->name}}</h1>
  </div>
</div>

@endsection