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
<section class=" max-w-7xl pt-8 mx-auto">
    <div class="flex flex-col justify-center items-center lg:flex-row gap-10">
      <div class="w-full lg:w-3/4">
        <div id="default-carousel" class="relative" data-carousel="static">
          <!-- Carousel wrapper -->
          <div
            class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96"
          >
            <!-- Item 1 -->
            <div class=" duration-700 ease-in-out" data-carousel-item>
              <span
                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl"
                >First Slide</span
              >
              <img
                src="{{asset($studies->slider1)}}"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="asdfds"
              />
            </div>
            <!-- Item 2 -->
            <div class=" duration-700 ease-in-out" data-carousel-item>
              <img
                src="{{asset($studies->slider2)}}"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
              />
            </div>
          
          </div>
          <!-- Slider indicators -->
          
          <!-- Slider controls -->
          <button
            type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-prev
          >
            <span
              class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-primary group-hover:bg-gray-500 group-focus:ring-4 group-focus:ring-white group-focus:outline-none"
            >
              <svg
                class="w-5 h-5 text-white sm:w-6 sm:h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 19l-7-7 7-7"
                ></path>
              </svg>
              <span class="hidden">Previous</span>
            </span>
          </button>
          <button
            type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-next
          >
            <span
              class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-primary group-hover:bg-gray-500 group-focus:ring-4 group-focus:ring-white group-focus:outline-none"
            >
              <svg
                class="w-5 h-5 text-white sm:w-6 sm:h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                ></path>
              </svg>
              <span class="hidden">Next</span>
            </span>
          </button>
        </div>
      </div>

      <div
        class="w-full lg:max-w-[400px] mx-2 p-4 bg-white border border-gray-200 rounded-lg shadow mx-4"
      >
        <div class="flex items-center justify-between mb-4">
          <h5 class="text-xl font-bold leading-none text-gray-900">
            Latest Courses
          </h5>
          {{-- <a
            href="#"
            class="text-sm font-medium text-white bg-primary py-2 rounded px-4 hover:underline"
          >
            View all
          </a> --}}
        </div>
        <div class="flow-root">
          <ul role="list" class="divide-y divide-gray-200">
            @foreach ($latest_course as $item)
                <li class="py-3 sm:py-4">
              <div class="flex items-start">
                <div class="flex-1">
                  <p class="text-sm font-medium text-gray-900 truncate">
                    {{$item->short_name}}
                  </p>
                </div>
                <div
                  class="inline-flex items-center text-xl font-bold text-gray-700"
                >
                  {{$item->total_fee}}
                </div>
              </div>
            </li>
            @endforeach
            

          </ul>
          <div
            class="w-full gap-5 flex flex-col justify-center item-center mt-5"
          >
          <a
          class="lg:text-base text-sm bg-primary text-white rounded-md text-center px-4 py-4 font-bold"
          href="{{route('contact.us')}}"
        >
         Contact
        </a>
            <a
              class="lg:text-base text-sm bg-[#FF0000] text-white rounded-md text-center px-4 py-4 font-bold"
              href="{{route('apply.now')}}"
            >
             Apply Now
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="px-4 max-w-7xl mx-auto">
  <h1 class="text-3xl lg:text-4xl font-bold text-gray-700 text-center lg:text-start mt-4 mb-6">
    {{ $studies->name }}
  </h1>
  <p class="text-lg lg:text-xl font-semibold text-gray-500 text-center lg:text-start w-full lg:w-3/4 mx-auto lg:mx-0">
    {!! $studies->short_description !!}
  </p>
</div>

    <div class="w-full rounded-lg bg-primary py-12 px-0 lg:px-12 my-10 max-w-7xl">
      <div
        class="flex flex-col lg:flex-row gap-10 items-center justify-between"
      >
        <div
          class="w-full px-2 lg:w-1/2 flex gap-4 justify-center align-items-center"
        >
          <div class="flex flex-col gap-4">
            <div
              class="h-56 max-w-60 rounded-md py-4 bg-red flex flex-col justify-center align-items-center"
            >
              <h1
                class="lg:text-3xl text-xl text-center font-bold text-white mb-4"
              >

              </h1>
              <p
                class="text-lg text-center font-semibold mt-1 px-2 text-white"
              >
              {!!$studies->rated!!}
              </p>
            </div>
            <div
              class="h-56 max-w-60 rounded-md py-4 bg-white flex flex-col justify-center align-items-center"
            >
              <h1
                class="lg:text-3xl text-xl te text-center font-bold text-gray-700 text-black mb-4"
              >

              </h1>
              <p
                class="text-lg text-center font-semibold mt-1 px-2 text-black"
              >
              {!!$studies->rated!!}
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-4">
            <div
              class="h-56 max-w-60 rounded-md py-4 bg-white flex flex-col justify-center align-items-center"
            >
              <h1
                class="lg:text-3xl text-xl text-center font-bold text-gray-700 text-black mb-4"
              >

              </h1>
              <p
                class="text-lg text-center font-semibold mt-1 px-2 text-black"
              >
              {!!$studies->global_network!!}
              </p>
            </div>
            <div
              class="h-56 max-w-60 rounded-md py-4 bg-red flex flex-col justify-center align-items-center"
            >
              <h1 class="lg:text-3xl text-xl text-center font-bold text-white mb-4">

              </h1>
              <p
                class="text-lg text-center font-semibold mt-1 px-2 text-white"
              >
              {!!$studies->award!!}
              </p>
            </div>
          </div>
        </div>
         <div class="w-full lg:w-7/12 mt-8 lg:mt-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl aspect-w-16 aspect-h-9">
          <img
            src="{{ asset($studies->image_1) }}"
            alt="{{ $studies->name }} showcase"
            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
            loading="lazy"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
      </div>
      </div>
    </div>

  </section>
  <!--End University slider-->
  <!--Online Programs-->


    <!--Online Program Section-->

    <section class="max-w-7xl mx-auto">
        @foreach($categories as $category)
            <h1 class="text-2xl lg:text-5xl text-center lg:text-start font-extrabold text-primary my-10">
                {{$studies->name}}   {{ $category->name }}’s Fees
            </h1>
            <div class="bg-white rounded-md px-4 w-full">
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th class="px-2 py-3 border-b-2 border-gray-200 bg-primary text-center lg:text-xl text-base font-semibold text-white uppercase tracking-wider">
                                            Programs
                                        </th>
                                        <th class="px-2 py-3 text-center border-b-2 border-gray-200 bg-primary lg:text-xl text-base font-semibold text-white uppercase tracking-wider">
                                            Total Tuition Fees
                                        </th>
                                        <th class="px-2 py-3 border-b-2 text-center border-gray-200 bg-primary lg:text-xl text-base font-semibold text-white uppercase tracking-wider">
                                            Fees/Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category->onlineFees as $fee)
                                        <tr>
                                            <td class="px-2 py-5 border-b border-gray-300 bg-blue-50 text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-8 h-8 lg:w-10 lg:h-10">
                                                        <img class="w-full h-full" src="https://cdn-icons-png.flaticon.com/512/3424/3424839.png" alt="" />
                                                    </div>
                                                    <div class="xl:ml-4 ml-2">
                                                        <p class="text-gray-900 text-sm xl:text-lg font-bold">
                                                            {{ $fee->program }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2 py-5 border-b border-gray-300 bg-blue-100 text-sm">
                                                <p class="text-gray-900 text-xl font-bold text-center">{{ $fee->total_fee }} </p>
                                            </td>
                                            <td class="px-2 py-5 border-b border-gray-300 bg-blue-50 text-sm">
                                                <p class="text-gray-900 text-xl font-bold text-center">
                                                    {{ $fee->yearly }} 
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


  <!--Entry Requirements-->
  <section class="max-w-7xl mx-auto mb-4 lg:mb-20">
    <h1
      class="text-2xl lg:text-5xl text-center lg:text-start font-bold text-primary mt-20"
    >
      {{$studies->name}} Entry Requirements
    </h1>
    <p
      class="text-sm text-center lg:text-start lg:text-xl font-bold text-gray-500 mt-4 mb-8 mx-4"
    >
      There are two entry routes onto each of our courses:
    </p>
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table
              class="min-w-full text-center text-sm font-light text-surface sm:block"
            >
              <thead
                class="border-b border-neutral-200 bg-primary font-medium text-white"
              >
                <tr>
                  <th scope="col" class="hidden sm:table-cell px-6 py-4">
                    #
                  </th>
                  <th scope="col" class="px-0 lg:px-6 text-2xl py-4">
                    Academic Entry Route
                  </th>
                  <th scope="col" class="px-6 py-4 text-2xl font-bold">
                    Open Entry Route​
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-neutral-200">
                  <td class="hidden sm:table-cell px-6 py-4 font-medium">
                    PG
                  </td>
                  <td
                    class="px-2 lg:text-base text-sm lg:px-6 text-start font-semibold py-4"
                  >
                    1. A minimum of a 2:1 class degree in an appropriate
                    subject, equivalent to a UK bachelor’s degree
                  </td>
                  <td
                    class="text-start px-2 lg:text-base text-sm lg:px-6 font-semibold px-6 py-4"
                  >
                    1. Professional work experience in a related field and/or
                    other prior qualifications which will be considered on a
                    case-by-case basis.
                  </td>
                </tr>
                <tr class="border-b border-neutral-200">
                  <td
                    class="hidden sm:table-cell whitespace-nowrap px-6 py-4 font-medium"
                  >
                    PG
                  </td>
                  <td
                    class="text-start px-2 lg:text-base text-sm lg:px-6 font-semibold py-4"
                  >
                    2. All applications must provide evidence that they have
                    an English Language ability equivalent to a minimum of an
                    IELTS (Academic) score of 6.5 (some programmes require
                    7.0). ​
                  </td>
                  <td
                    class="text-start px-2 lg:text-base text-sm lg:px-6 font-semibold py-4"
                  >
                    2. All applications must provide evidence that they have
                    an English Language ability equivalent to a minimum of an
                    IELTS (Academic) score of 6.5 (some programmes require
                    7.0).
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Faq-->
  <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
    <h2
      class="font-bold lg:text-5xl text-3xl lg:leading-9 md:leading-7 leading-9 text-primary"
    >
      Frequently Ask Questions
    </h2>
    <div
      class="mt-4 flex md:justify-between md:items-start md:flex-row flex-col justify-start items-start"
    >
      <div class="">
        <p
          class="font-normal text-base leading-6 text-gray-600 lg:w-8/12 md:w-9/12"
        >
          Here are few of the most important things for our Students
        </p>
      </div>
    </div>
    <div class="flex md:flex-row flex-col md:space-x-8 md:mt-16 mt-8">
      <div class="md:w-5/12 lg:w-4/12 w-full">
        <img
          src="https://cdn.shopify.com/app-store/listing_images/be8e18fe7fd62b265563360c2986633d/promotional_image/CLHpktmI5_QCEAE=.jpeg?height=720&quality=90&width=1280"
          alt="Image of Glass bottle"
          class="w-full md:block hidden"
        />
        <img
          src="https://cdn.shopify.com/app-store/listing_images/be8e18fe7fd62b265563360c2986633d/promotional_image/CLHpktmI5_QCEAE=.jpeg?height=720&quality=90&width=1280"
          alt="Image of Glass bottle"
          class="w-full md:hidden block"
        />
      </div>
      <div class="md:w-7/12 lg:w-8/12 w-full md:mt-0 sm:mt-14 mt-10">
        <div>
          <div class="flex justify-between items-center cursor-pointer">
            <h3 class="font-bold text-3xl text-gray-800">
              {{$studies->faq_question_1}}
            </h3>
            <button
              aria-label="too"
              class="text-gray-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
              onclick="openAnsSection(1)"
            >
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  id="path1"
                  class=""
                  d="M10 4.1665V15.8332"
                  stroke="currentColor"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M4.16602 10H15.8327"
                  stroke="currentColor"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>
          </div>
          <p
            id="para1"
            class="hidden font-normal text-xl leading-6 text-gray-800 mt-4 w-11/12"
          >
           {{$studies->faq_answer_1}}
          </p>
        </div>

        <hr class="my-7 bg-gray-200" />

        <div>
          <div class="flex justify-between items-center cursor-pointer">
            <h3 class="font-bold text-3xl text-gray-800">
                {{$studies->faq_question_2}}
            </h3>
            <button
              aria-label="too"
              class="text-gray-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
              onclick="openAnsSection(2)"
            >
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  id="path2"
                  class=""
                  d="M10 4.1665V15.8332"
                  stroke="currentColor"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M4.16602 10H15.8327"
                  stroke="currentColor"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>
          </div>
          <p
            id="para2"
            class="hidden font-normal text-xl leading-6 text-gray-600 mt-4 w-11/12"
          >
          {!!$studies->faq_answer_2!!}
          </p>
        </div>

        <hr class="my-7 bg-gray-200" />

        <div>
          <div class="flex justify-between items-center cursor-pointer">
            <h3 class="font-bold text-3xl text-gray-800">
                {{$studies->faq_question_3}}
            </h3>
            <button
              aria-label="too"
              class="text-gray-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
              onclick="openAnsSection(3)"
            >
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  id="path3"
                  d="M10 4.1665V15.8332"
                  stroke="currentColor"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M4.16602 10H15.8327"
                  stroke="currentColor"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>
          </div>
          <p
            id="para3"
            class="hidden font-normal text-xl leading-6 text-gray-600 mt-4 w-11/12"
          >
          {!!$studies->faq_answer_3!!}
          </p>
        </div>

        <hr class="my-7 bg-gray-200" />
      </div>
    </div>
  </div>

@endsection
