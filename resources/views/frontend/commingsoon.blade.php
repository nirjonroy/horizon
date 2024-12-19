@extends('frontend.app')

@section('content')
 
<div class="h-auto rounded flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-gray-50">
  <div data-theme="teal" class="mx-auto max-w-7xl w-80 h-60 bg-teal-600 flex items-center justify-center text-white">
    <h1 class="text-center font-bold text-2xl">Coming Soon {{$studies->name}}</h1>
  </div>
</div>

@endsection