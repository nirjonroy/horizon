@extends('frontend.app')

@section('content')
 <!--Blog Details-->
<div class="max-w-7xl mx-auto">


    <main >

      <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
        <img src="{{asset($blog->image)}}" class="absolute left-0 top-0 w-full rounded-lg h-full z-0 object-cover" />
        <div class="p-4 absolute bottom-0 left-0 z-20">

          <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
            {{$blog->title}}
          </h2>
          <div class="flex mt-3">
            {{-- <img src="https://randomuser.me/api/portraits/men/97.jpg"
              class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div> --}}
              {{-- <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p> --}}
              <p class="font-semibold text-gray-400 text-xs"> {{$blog->created_at}} </p>
            </div>
          </div>
        </div>
      </div>

      <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
        <p class="pb-6">
            {!!$blog->description!!}
        </p>



      </div>
    </main>
    <!-- main ends here -->


  </div>
<!--End Blog Details-->
@endsection
