@extends('frontend.app')

@section('content')
<section class="bg-gray-50 p-5 ">
      <div class="max-w-7xl pt-8 mx-auto">
        <!-- Section Title -->
        <h2
          class="text-3xl md:text-4xl font-bold text-center text-primary mb-10 relative"
        >
          Upcoming Webinars
          <div
            class="w-24 h-1 mx-auto mt-4 bg-gradient-to-r from-primary to-gold"
          ></div>
        </h2>

        <!-- Webinar Cards Grid -->
        
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6"
        >
          <!-- Webinar Card 1 -->
            @foreach($webinners as $item)
          <div
            class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2"
          >
            <div class="bg-gradient-to-br from-primary to-blue-900 text-white p-6">
              <div class="text-gold font-bold text-lg">{{$item->date}}</div>
              <div class="text-gray-200">{{$item->time}}&nbsp EST</div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-primary mb-2">
                {{$item->title}}
              </h3>
              <p class="text-gray-600 italic mb-6">{{$item->from}}</p>
              <a
                href="{{$item->link}}"
                class="block w-full text-center bg-red text-white text-primary font-bold py-3 px-6 rounded-md hover:bg-gradient-to-br hover:from-lightgold hover:to-gold transition-all shadow-md hover:shadow-lg"
              >
                Register Now
              </a>
            </div>
          </div>

         @endforeach
          
        </div>
      </div>
    </section>
    
    @endsection