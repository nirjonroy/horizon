@extends('frontend.app')
@section('title', 'Horizon - Home page')
@section('seos')
    @php
        $SeoSettings = DB::table('seo_settings')->where('id', 1)->first();
        // Decode the keywords JSON string into an array
        $keywordsArray = json_decode($SeoSettings->keywords, true);
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
    <meta property="og:image" content="{{asset($slider->image)}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@endsection

@section('content')
 <!--Hero Section-->
 <div class="w-full lg:pt-0 pt-16">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="w-full" src="{{asset($slider->image)}}" alt="Image 1" />
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--End Hero Section-->
  <!--Where to Study-->
  <section class="max-w-7xl mx-auto">
    <h1
      class="mt-16 text-center mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl"
    >
      Where to study
    </h1>
    <p
      class="lg:text-xl text-xs font-semibold text-center mt-4 w-3/4 mx-auto lg:mt-10"
    >
      Prepare for your future at one of our impressive university partners, in
      exciting destinations around the world.
    </p>
    <div
      class="lg:my-20 my-10 max-w-7xl lg:mx-auto flex flex-wrap mx-4 justify-center gap-10"
    >
      @foreach ($whereToStudies as $study)

      <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img
          class="w-full h-60"
          src="{{asset($study->slider1)}}"
          alt="Sunset in the mountains"
        />
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{{$study->name}}</div>
          <p class="text-gray-700 text-base">
           
           {!! Str::limit(strip_tags($study->short_description), 400) !!}
          </p>
          <a href="{{route('where.to.study', $study->id)}}">
            <button
              class="mt-5 bg-primary text-sm text-white border border-white w-36 h-12 rounded-md font-bold"
            >
              View More
            </button>
          </a>
        </div>
      </div>

      @endforeach


    </div>
  </section>
  <!--End Where to Study-->
  <div class="bg-primary py-20 md:px-4">
    <div
      class="max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center justify-between px-4"
    >
      <div class="text-center md:text-left mb-10 md:mb-0 md:max-w-[50%]">
        <h1
          class="text-white text-start text-4xl md:text-5xl xl:text-6xl font-extrabold mb-4 leading-none"
        >
          We Offer
        </h1>
        <div class="w-20 h-1 bg-white mb-10 md:mb-0 md:w-32"></div>
        <div class="flex mt-10 flex-col gap-5">
          <div class="flex items-center gap-5">
            <img
              class="w-14"
              src="{{asset('frontend/images/icons/arrow-right.png')}}"
              alt="arrow-icon"
            />
            <p class="text-2xl md:text-3xl font-semibold text-white">
              Degree Preparation
            </p>
          </div>
          <div class="flex items-center gap-5">
            <img
              class="w-14"
              src="{{asset('frontend/images/icons/arrow-right.png')}}"
              alt="arrow-icon"
            />
            <p class="text-2xl md:text-3xl font-semibold text-white">
              Degree Admission
            </p>
          </div>
          <div class="flex items-center gap-5">
            <img
              class="w-14"
              src="{{asset('frontend/images/icons/arrow-right.png')}}"
              alt="arrow-icon"
            />
            <p class="text-2xl md:text-3xl font-semibold text-white">
              Support at every step
            </p>
          </div>
        </div>
      </div>
      <img
        class="w-full md:max-w-[50%] h-auto rounded md:block hidden"
        src="{{asset('frontend/images/student1.png')}}"
        alt="student-image"
      />
    </div>
  </div>

  <!--Testmonial Section-->

  <div
    class="flex items-center justify-between h-full md:h-1/4 xl:h-full w-full absolute z-0"
  >
    <div class="w-1/3 bg-white h-full"></div>
    <div class="w-4/6 ml-16 bg-gray-100 h-full"></div>
  </div>
  <div class="xl:px-20 px-8 py-10 2xl:mx-auto 2xl:container relative z-40">
    <h1
      class="hidden xl:block mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl"
    >
      What our Students<br />
      saying
    </h1>
    <h1
      class="max-w-2xl mb-4 text-4xl xl:hidden font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl"
    >
      What our Students are saying
    </h1>

    <div class="slider">
      <div class="slide-ana">
        <div class="flex" style="transform: translateX(-100%)">
          <div class="mt-14 md:flex">
            <div class="relative lg:w-1/2 sm:w-96 xl:h-96 h-80">
              <img
              src="https://img.freepik.com/premium-photo/smiling-muslim-young-female-student-holding-books-standing-near-college-happy-arabian-girl-hijab-asian-woman-training_8119-2351.jpg"

                alt="image of profile"
                class="w-full h-full flex-shrink-0 object-fit object-cover shadow-lg rounded"
              />
              <div
                class="w-32 md:flex hidden items-center justify-center absolute top-0 -mr-16 -mt-14 right-0 h-32 bg-indigo-100 rounded-full"
              >
                <img
                  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonial-svg1.svg"
                  alt="commas"
                />
              </div>
            </div>
            <div
              class="md:w-1/3 lg:w-1/3 xl:ml-32 md:ml-20 md:mt-0 mt-4 flex flex-col justify-between"
            >
              <div>
                <h1
                  class="max-w-2xl mb-4 text-2xl font-bold tracking-tight leading-none md:text-3xl xl:text-5xl italic"
                >
                  "Studying abroad was a life-changing experience for me — it
                  made me who I am today"
                </h1>
              </div>
              <div class="md:mt-0 mt-8">
                <p
                  class="text-base lg:text-lg font-semibold leading-4 text-gray-800"
                >
                  Natalie from Malaysia, University of Brighton graduate
                </p>
                <p
                  class="lg:text-lg text-base leading-4 mt-2 mb-4 text-gray-600"
                >
                  Now working as a Biomedical Scientist
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex" style="transform: translateX(-100%)">
          <div class="mt-14 md:flex">
            <div class="relative lg:w-1/2 sm:w-96 xl:h-96 h-80">
              <img
              src="https://t3.ftcdn.net/jpg/04/31/07/04/360_F_431070449_IQITpySvnxJenE8QVkuUIiEyTdFqPkYY.jpg"
                alt="image of profile"
                class="w-full h-full flex-shrink-0 object-fit object-cover shadow-lg rounded"
              />
              <div
                class="w-32 md:flex hidden items-center justify-center absolute top-0 -mr-16 -mt-14 right-0 h-32 bg-indigo-100 rounded-full"
              >
                <img
                  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonial-svg1.svg"
                  alt="commas"
                />
              </div>
            </div>
            <div
              class="md:w-1/3 lg:w-1/3 xl:ml-32 md:ml-20 md:mt-0 mt-4 flex flex-col justify-between"
            >
              <div>
                <h1
                  class="max-w-2xl mb-4 text-2xl font-bold tracking-tight leading-none md:text-3xl xl:text-5xl italic"
                >
                  "Living in a foreign country transformed me in ways I never
                  imagined — it shaped the person I've become"
                </h1>
              </div>
              <div class="md:mt-0 mt-8">
                <p
                  class="text-base lg:text-lg font-semibold leading-4 text-gray-800"
                >
                  Natalie from Malaysia, University of Brighton graduate
                </p>
                <p
                  class="lg:text-lg text-base leading-4 mt-2 mb-4 text-gray-600"
                >
                  Now working as a Biomedical Scientist
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex items-center mt-8">
      <button
        class="cursor-pointer"
        id="prev"
        role="button"
        aria-label="previous slide"
      >
        <img
          src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonal-svg2.svg"
          alt="previous"
        />
      </button>
      <button
        id="next"
        role="button"
        aria-label="next slide"
        class="cursor-pointer ml-2"
      >
        <img
          class="dark:hidden"
          src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonial-svg3.svg"
          alt="next"
        />
        <img
          class="transform rotate-180 w-8 hidden dark:block"
          src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonal-svg2.svg"
          alt="previous"
        />
      </button>
    </div>
  </div>
  <style>
    .slider {
      width: 100%;
      height: 550px;
      position: relative;
      overflow: hidden;
    }

    .slide-ana {
      height: 500px;
    }

    .slide-ana > div {
      width: 100%;
      height: 100%;
      position: absolute;
      transition: all 1s;
    }
    @media (min-width: 300px) and (max-width: 884px) {
      .slider {
        height: 650px;
      }
    }
    @media (min-width: 768px) and (max-width: 1023px) {
      .slider {
        height: 381px;
      }
    }
    @media (min-width: 1024px) and (max-width: 1280px) {
      .slider {
        height: 379px;
      }
    }
  </style>

  <!--End Testmonial Section-->
  <!--New at Horizons Unlimited-->
  <section class="pt-10 lg:pt-40 bg-primary">
    <h1
      class="pt-10 text-center mb-4 text-4xl text-white font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl"
    >
      New at Horizons Unlimited
    </h1>
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
      <a
        rel="noopener noreferrer"
        href="{{route('blog.details', $cover->id)}}"
        class="max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-white rounded-md"
      >
        <img
          src="{{asset($cover->image)}}"
          alt=""
          class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7"
        />
        <div class="p-6 space-y-2 lg:col-span-5 bg-white rounded-md">
          <h3
            class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline"
          >
            {{$cover->title}}
          </h3>
          <span class="text-xs text-black">{{$cover->created_at}}</span>
          <p>
            {!! Str::limit(strip_tags($cover->description), 400) !!}
          </p>
        </div>
      </a>
      <div
        class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3"
      >

      @foreach($blogs as $blog)
      @if(!empty($blog->id))
      <a
          rel="noopener noreferrer"
          href="{{route('blog.details', $blog->id)}}"
          class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white rounded-md"
        >
       @endif
       @if(!empty($blog->image))
          <img
            role="presentation"
            class="object-cover w-full rounded h-60 dark:bg-gray-500"
            src="{{asset($blog->image)}}"
          />
        @endif  
          <div class="p-6 space-y-2">
        @if(!empty($blog->title))      
            <h3
              class="text-2xl font-semibold group-hover:underline group-focus:underline"
            >
        
              {{$blog->title}}
            </h3>
            @endif        
            @if(!empty($blog->created_at))
            <span class="text-xs">{{$blog->created_at}}</span>
            @endif
            @if(!empty($blog->description))
            <p>
              {!! Str::limit(strip_tags($blog->description), 200) !!}

            </p>
            @endif
            
          </div>
        </a>
        @endforeach

      </div>
      <!-- <div class="flex justify-center">
        <button
          type="button"
          class="px-6 py-3 text-sm rounded-md hover:underline bg-white rounded-md font-bold"
        >
          Load more posts...
        </button>
      </div> -->
    </div>
  </section>
  <!--End New at Horizons Unlimited-->
  <!--Video-->
  <div class="container mx-auto py-8">
    <h1
      class="text-center mb-20 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl"
    >
      Student History
    </h1>
    <div class="flex flex-col lg:flex-row gap-5 max-w-7xl mx-4 lg:mx-auto">
      <div class="bg-gray-100">
        <div class="w-full h-72">
          <iframe
            class="w-full h-full"
            src="https://www.youtube.com/embed/FxfzRUk1mKc?si=s4xGEx1ntp6aIZGk"
            title="YouTube video"
            allowfullscreen
          ></iframe>
        </div>
        <!-- Video Description -->
        <div class="p-4">
          <h1 class="max-w-md text-primary font-bold text-2xl">
            Campus Tour | University of Liverpool
          </h1>
        </div>
      </div>
      <div class="bg-gray-100">
        <div class="w-full h-72">
          <iframe
            class="w-full h-full"
            src="https://www.youtube.com/embed/9YZejQ4hRyY?si=f4_3UfmIM7e-8jdl"
            title="YouTube video"
            allowfullscreen
          ></iframe>
        </div>
        <!-- Video Description -->
        <div class="p-4">
          <h1 class="max-w-md text-primary font-bold text-2xl">
            Horizons Unlimited can give you the skills that will be useful for
            your career.
          </h1>
        </div>
      </div>
      <div class="bg-gray-100">
        <div class="w-full h-72">
          <iframe
            class="w-full h-full"
            src="https://www.youtube.com/embed/N6Nvp3LOJwk?si=NmzR-qVxHkdkDSWW"
            title="YouTube video"
            allowfullscreen
          ></iframe>
        </div>
        <!-- Video Description -->
        <div class="p-4">
          <h1 class="max-w-md text-primary font-bold text-2xl">
            International Student lifest
          </h1>
        </div>
      </div>
    </div>
  </div>
  <!--End Video-->
  <!--Contact Us-->
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li style="color: red">{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="max-w-7xl mx-auto p-5">
    <div class="grid grid-cols-1 md:grid-cols-12 border">
      <div class="bg-primary rounded-md md:col-span-4 p-10 text-white">
        <p class="mt-4 text-sm leading-7 font-regular uppercase">Contact</p>
        <h3
          class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight"
        >
          Get In <span class="text-yellow-400">Touch</span>
        </h3>
        <p class="mt-4 leading-7 text-gray-200">
          {!!$info->description!!}
        </p>

        <div class="flex items-center mt-5">
          <svg
            class="h-6 mr-2 text-yellow-400"
            fill="currentColor"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 489.536 489.536"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            enable-background="new 0 0 489.536 489.536"
          >
            <g>
              <g>
                <path
                  d="m488.554,476l-99-280.2c-1-4.2-5.2-7.3-9.4-7.3h-45.6c12.9-31.1 19.6-54.9 19.6-70.8 0-64.6-50-117.7-112.5-117.7-61.5,0-112.5,52.1-112.5,117.7 0,17.6 8.2,43.1 19.9,70.8h-39.7c-4.2,0-8.3,3.1-9.4,7.3l-99,280.2c-3.2,10.3 6.3,13.5 9.4,13.5h468.8c4.2,0.5 12.5-4.2 9.4-13.5zm-246.9-455.3c51,1.06581e-14 91.7,43.7 91.7,96.9 0,56.5-79.2,182.3-91.7,203.1-31.3-53.1-91.7-161.5-91.7-203.1 0-53.1 40.6-96.9 91.7-96.9zm-216.7,448l91.7-259.4h41.7c29.9,64.1 83.3,151 83.3,151s81.4-145.7 83.8-151h47.4l91.7,259.4h-439.6z"
                ></path>
                <rect
                  width="136.5"
                  x="177.054"
                  y="379.1"
                  height="20.8"
                ></rect>
                <path
                  d="m289.554,108.2c0-26-21.9-47.9-47.9-47.9s-47.9,21.9-47.9,47.9 20.8,47.9 47.9,47.9c27.1,0 47.9-21.8 47.9-47.9zm-75-1c0-14.6 11.5-27.1 27.1-27.1s27.1,12.5 27.1,27.1-11.5,27.1-27.1,27.1c-14.6,2.84217e-14-27.1-12.5-27.1-27.1z"
                ></path>
              </g>
            </g>
          </svg>
          <span class="text-sm"
            >{{$info->address}}</span
          >
        </div>
        <div class="flex items-center mt-5">
          <svg
            class="h-6 mr-2 text-yellow-400"
            fill="currentColor"
            version="1.1"
            id="Capa_1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 60.002 60.002"
            style="enable-background: new 0 0 60.002 60.002"
            xml:space="preserve"
          >
            <g>
              <path
                d="M59.002,37.992c-3.69,0-6.693-3.003-6.693-6.693c0-0.553-0.447-1-1-1s-1,0.447-1,1c0,4.794,3.899,8.693,8.693,8.693
    c0.553,0,1-0.447,1-1S59.554,37.992,59.002,37.992z"
              ></path>
              <path
                d="M58.256,35.65c0.553,0,1-0.447,1-1s-0.447-1-1-1c-0.886,0-1.605-0.72-1.605-1.605c0-0.553-0.447-1-1-1s-1,0.447-1,1
    C54.65,34.033,56.267,35.65,58.256,35.65z"
              ></path>
              <path
                d="M20.002,2.992c3.691,0,6.693,3.003,6.693,6.693c0,0.553,0.448,1,1,1s1-0.447,1-1c0-4.794-3.9-8.693-8.693-8.693
    c-0.552,0-1,0.447-1,1S19.449,2.992,20.002,2.992z"
              ></path>
              <path
                d="M19.748,6.334c0,0.553,0.448,1,1,1c0.885,0,1.604,0.72,1.604,1.605c0,0.553,0.448,1,1,1s1-0.447,1-1
    c0-1.988-1.617-3.605-3.604-3.605C20.196,5.334,19.748,5.781,19.748,6.334z"
              ></path>
              <path
                d="M44.076,37.889c-1.276-0.728-2.597-0.958-3.721-0.646c-0.844,0.234-1.532,0.768-1.996,1.546
    c-1.02,1.22-2.286,2.646-2.592,2.867c-2.367,1.604-4.25,1.415-6.294-0.629L17.987,29.542c-2.045-2.045-2.233-3.928-0.631-6.291
    c0.224-0.31,1.65-1.575,2.87-2.596c0.778-0.464,1.312-1.152,1.546-1.996c0.311-1.123,0.082-2.444-0.652-3.731
    c-0.173-0.296-4.291-7.27-8.085-9.277c-1.926-1.019-4.255-0.669-5.796,0.872L4.7,9.059c-4.014,4.014-5.467,8.563-4.321,13.52
    c0.956,4.132,3.742,8.529,8.282,13.068l14.705,14.706c5.762,5.762,11.258,8.656,16.298,8.656c3.701,0,7.157-1.562,10.291-4.695
    l2.537-2.537c1.541-1.541,1.892-3.87,0.872-5.796C51.356,42.186,44.383,38.069,44.076,37.889z M51.078,50.363L48.541,52.9
    c-6.569,6.567-14.563,5.235-23.76-3.961L10.075,34.233c-4.271-4.271-6.877-8.344-7.747-12.104
    c-0.995-4.301,0.244-8.112,3.786-11.655l2.537-2.537c0.567-0.566,1.313-0.862,2.07-0.862c0.467,0,0.939,0.112,1.376,0.344
    c3.293,1.743,7.256,8.454,7.29,8.511c0.449,0.787,0.62,1.608,0.457,2.196c-0.1,0.36-0.324,0.634-0.684,0.836l-0.15,0.104
    c-0.853,0.712-2.883,2.434-3.308,3.061c-0.612,0.904-1.018,1.792-1.231,2.665c-0.711-1.418-1.286-3.06-1.475-4.881
    c-0.057-0.548-0.549-0.935-1.098-0.892c-0.549,0.058-0.949,0.549-0.892,1.099c0.722,6.953,6.129,11.479,6.359,11.668
    c0.025,0.02,0.054,0.028,0.08,0.045l10.613,10.613c0.045,0.045,0.092,0.085,0.137,0.129c0.035,0.051,0.058,0.108,0.104,0.154
    c0.189,0.187,4.704,4.567,11.599,5.283c0.035,0.003,0.07,0.005,0.104,0.005c0.506,0,0.94-0.383,0.994-0.896
    c0.057-0.55-0.342-1.041-0.892-1.099c-2.114-0.219-3.987-0.839-5.548-1.558c0.765-0.23,1.543-0.612,2.332-1.146
    c0.628-0.426,2.35-2.455,3.061-3.308l0.104-0.151c0.202-0.359,0.476-0.583,0.836-0.684c0.588-0.159,1.409,0.008,2.186,0.45
    c0.067,0.04,6.778,4.003,8.521,7.296C52.202,48.062,51.994,49.447,51.078,50.363z"
              ></path>
            </g>
          </svg>
          <span class="text-sm">{{$info->mobile1}}</span>
        </div>
        <div class="flex items-center mt-5">
          <svg
            class="h-6 mr-2 text-yellow-400"
            fill="currentColor"
            version="1.1"
            id="Capa_1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 300.988 300.988"
            style="enable-background: new 0 0 300.988 300.988"
            xml:space="preserve"
          >
            <g>
              <g>
                <path
                  d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493
                S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001
                s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z"
                ></path>
                <polygon
                  points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		"
                ></polygon>
              </g>
            </g>
          </svg>
          <span class="text-sm">24/7</span>
        </div>
      </div>



        <form action="{{route('contact.form')}}" method="POST" class="md:col-span-8 p-4 lg:p-10">
            @CSRF
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-first-name"
            >
              First Name
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
              id="grid-first-name"
              type="text"
              placeholder="Jane"
              name="first_name"
            />
            <p class="text-red-500 text-xs italic">
              Please fill out this field.
            </p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-last-name"
            >
              Last Name
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-last-name"
              type="text"
              placeholder="Doe"
              name="last_name"
            />
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-password"
            >
              Email Address
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-email"
              type="email"
              placeholder="********@*****.**"
              name="email"
            />
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-password"
            >
              Your Message
            </label>
            <textarea
              rows="10"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              name="message"
            ></textarea>
          </div>
          <div class="flex justify-between w-full px-3">
            <div class="md:flex md:items-center">
              <label class="block text-gray-500 font-bold">
                <input class="mr-2 leading-tight" type="checkbox" />
                <span class="text-sm"> Send me your newsletter! </span>
              </label>
            </div>
            <button
              class="shadow bg-primary hover:bg-white-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
              type="submit"
            >
              Send Message
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--End Contact Us-->
@endsection
