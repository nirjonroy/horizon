@extends('frontend.app')

@section('content')
<section
class="max-w-7xl mx-4 lg:mx-auto overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white"
>
<div >
    
  <h2
  class="text-3xl lg:text-4xl font-bold text-center text-white bg-blue-950 py-3 mb-8 rounded-md"
>
Blogs
</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    @foreach($blogs as $blog)
  <!-- CARD 1 -->
  <div
    class="bg-white rounded mx-4 overflow-hidden shadow-lg flex flex-col"
  >
    <a href="{{route('blog.details', $blog->id)}}"></a>
    <div class="relative">
      <a href="{{route('blog.details', $blog->id)}}">
        <img
          class="w-full h-60"
          src="{{asset($blog->image)}}"
          alt="Sunset in the mountains"
        />
        <div
          class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-300 opacity-25"
        ></div>
      </a>
    </div>
    <div class="px-6 py-4 mb-auto">
      <a
        href="{{route('blog.details', $blog->id)}}"
        class="font-medium text-2xl inline-block hover:text-blue-900 transition duration-500 ease-in-out inline-block mb-2"
        >{{$blog->title}}</a
      >
      <p class="text-gray-500 text-sm">
        {!! Str::limit(strip_tags($blog->description), 200) !!}
      </p>
    </div>
    <div
      class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100"
    >
      <span
        href="#"
        class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center"
      >
        <svg
          height="13px"
          width="13px"
          version="1.1"
          id="Layer_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 512 512"
          style="enable-background: new 0 0 512 512"
          xml:space="preserve"
        >
          <g>
            <g>
              <path
                d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"
              ></path>
            </g>
          </g>
        </svg>
        <span class="ml-1">{{$blog->created_at}}{{$blog->created_at}}</span>
      </span>
      <span
        href="#"
        class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center"
      >
        <svg
          class="h-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
          ></path>
        </svg>
        <span class="ml-1">39 Comments</span>
      </span>
    </div>
  </div>
  
 @endforeach




</div>
<div class="d-felx justify-content-center">

    {{ $blogs->links() }}

</div>
</div>


</section>
@endsection