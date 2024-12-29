@extends('frontend.app')

@section('title', $lifes->name)
@section('seos')
    @php
        $SeoSettings = DB::table('seo_settings')->where('id', 1)->first();
        // Decode the keywords JSON string into an array
        $keywordsArray = json_decode($lifes->keywords, true);
    @endphp

    <meta charset="UTF-8">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta name="title" content="{{$lifes->meta_title}}">

    <meta name="description" content="{{$lifes->meta_description}}">
    
    <!-- Populate the keywords meta tag -->
    <meta name="keywords" content="{{ isset($keywordsArray) ? implode(', ', $keywordsArray) : '' }}" /> 

    <meta property="og:title" content="{{$lifes->meta_title}}">
    <meta property="og:description" content="{{$lifes->meta_description}}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{$lifes->meta_title}}">
    <meta property="og:image" content="{{asset($lifes->hero_banner)}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@endsection

@section('content')
  <!--Banner Section-->
  <div class="h-auto rounded flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-white">
    <!-- Themes: blue, purple and teal -->
    <div data-theme="teal" class=" mx-auto max-w-7xl">
      <h2 class="sr-only">Featured case study</h2>
      <section class="font-sans text-black">
        <div class="mt-24 flex flex-col justify-center items-center [ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]">
          <div class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60">
            <div class="h-full">
              <article class="h-full">
                <div class="h-full">
                  <img class="h-full object-cover rounded-lg" src="{{asset($lifes->hero_banner)}}" width="733" height="412" alt='""' typeof="foaf:Image" />
                </div>
              </article>
            </div>
          </div>
          <div class="p-6 bg-blue-100 rounded-lg">
            <div class="leading-relaxed">
              {{-- <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">Find out how it feels to live and learn abroad </h2> --}}
              <p class="mt-4 text-lg">{!!$lifes->hero_banner_text!!}</p>

              <p><a class="mt-4 button button--secondary" href="https://inviqa.com/cxcon-experience-transformation">Explore this event</a></p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

   <!--End Banner Section-->
    <!--Testmonial Section-->

    <div class="flex items-center justify-between h-full md:h-1/4 xl:h-full w-full absolute z-0">
      <div class="w-1/3 bg-white  h-full"></div>
      <div class="w-4/6 ml-16 bg-gray-100  h-full"></div>
  </div>
  <div class="xl:px-20 px-8 py-10 2xl:mx-auto 2xl:container relative z-40">
    <h1 class="hidden xl:block mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">
          What our Students<br />
          saying
      </h1>
      <h1 class="max-w-2xl mb-4 text-4xl xl:hidden font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">What our Students are saying</h1>

      <div class="slider">
          <div class="slide-ana">
              <div class="flex" style="transform: translateX(-100%)">
                  <div class="mt-14 md:flex">
                      <div class="relative lg:w-1/2 sm:w-96 xl:h-96 h-80">
                          <img src="https://media.istockphoto.com/id/1438437093/photo/young-adult-woman-in-studio-shots-making-facial-expressions-and-using-fingers-and-hands.webp?b=1&s=170667a&w=0&k=20&c=s64r95WyPrrg3nEc8X33TqYKIyJiyrj2tu4dRUds_-Y=" alt="image of profile" class="w-full h-full flex-shrink-0 object-fit object-cover shadow-lg rounded" />
                          <div class="w-32 md:flex hidden items-center justify-center absolute top-0 -mr-16 -mt-14 right-0 h-32 bg-indigo-100 rounded-full">
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonial-svg1.svg" alt="commas"/>
                          </div>
                      </div>
                      <div class="md:w-1/3 lg:w-1/3 xl:ml-32 md:ml-20 md:mt-0 mt-4 flex flex-col justify-between">
                          <div>
                            <h1 class="max-w-2xl mb-4 text-2xl font-bold tracking-tight leading-none md:text-3xl xl:text-5xl  italic">"Studying abroad was a life-changing experience for me — it made me who I am today"</h1>

                          </div>
                          <div class="md:mt-0 mt-8">
                              <p class="text-base lg:text-lg font-semibold leading-4 text-gray-800  ">Natalie from Malaysia, University of Brighton graduate </p>
                              <p class="lg:text-lg text-base leading-4 mt-2 mb-4 text-gray-600  ">Now working as a Biomedical Scientist </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="flex" style="transform: translateX(-100%)">
                <div class="mt-14 md:flex">
                    <div class="relative lg:w-1/2 sm:w-96 xl:h-96 h-80">
                        <img src="{{asset('frontend/images/student/1.jpg')}}" alt="image of profile" class="w-full h-full flex-shrink-0 object-fit object-cover shadow-lg rounded" />
                        <div class="w-32 md:flex hidden items-center justify-center absolute top-0 -mr-16 -mt-14 right-0 h-32 bg-indigo-100 rounded-full">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonial-svg1.svg" alt="commas"/>
                        </div>
                    </div>
                    <div class="md:w-1/3 lg:w-1/3 xl:ml-32 md:ml-20 md:mt-0 mt-4 flex flex-col justify-between">
                        <div>
                            <h1 class="text-3xl lg:text-4xl font-bold xl:leading-loose text-gray-800  italic">"Living in a foreign country transformed me in ways I never imagined — it shaped the person I've become"</h1>

                        </div>
                        <div class="md:mt-0 mt-8">
                            <p class="text-base lg:text-lg font-semibold leading-4 text-gray-800  ">Natalie from Malaysia, University of Brighton graduate </p>
                            <p class="lg:text-lg text-base leading-4 mt-2 mb-4 text-gray-600  ">Now working as a Biomedical Scientist </p>
                        </div>
                    </div>
                </div>
            </div>

          </div>
      </div>

      <div class="flex items-center mt-8">
          <button class="cursor-pointer" id="prev" role="button" aria-label="previous slide">
              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonal-svg2.svg" alt="previous" />
          </button>
          <button id="next" role="button" aria-label="next slide" class="cursor-pointer ml-2">
              <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonial-svg3.svg" alt="next" />
              <img class="transform rotate-180 w-8 hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonal-svg2.svg" alt="previous" />
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


<!-- ====== Blog Section Start -->
<section class="bg-primary mt-10 lg:mt-28">
  <div class="text-center max-w-7xl mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
    <h1 class="mb-4 text-4xl font-extrabold text-white pt-20 tracking-tight leading-none md:text-5xl xl:text-5xl ">
   Must try Food in UK
    </h1>

    <p class="text-base px-4 text-white">
       There are many variations of passages of Lorem Ipsum available
       but the majority have suffered alteration in some form.
    </p>
 </div>
   <div class="container max-w-7xl mx-auto">
      <div class="flex flex-wrap justify-center ">

      </div>
      <div class="flex flex-wrap ">
         <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
               <div class="rounded overflow-hidden mb-8">
                  <img
                     src="https://a.storyblok.com/f/112937/568x400/f18ad376c7/7-food-you-have-to-eat-in-the-uk-square-568x400.jpg/m/620x0/filters:quality(70)/"
                     alt="image"
                     class="w-full h-60"
                     />
               </div>
               <div>

                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-xl
                        sm:text-2xl
                        lg:text-xl
                        xl:text-2xl
                        mb-4
                        inline-block
                        text-dark
                        hover:text-primary
                        "
                        >
                        Fish and chips
                     </a>
                  </h3>
                  <p class="text-base text-body-color">
                    This dish is the staple of the Great British summer. (All three days of it.) Whether you’re a lover of our water-based friends or you wrinkle your nose at fish, we English cook it in a way that will make any mouth water: Simply deep-fry the catch of the day in batter and serve with a huge pile of thick-cut chips.
                  </p>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
               <div class="rounded overflow-hidden mb-8">
                  <img
                     src="https://nomadparadise.com/wp-content/uploads/2020/04/british-foods-001-1024x640.jpg"
                     alt="image"
                     class="w-full h-60"
                     />
               </div>
               <div>

                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-xl
                        sm:text-2xl
                        lg:text-xl
                        xl:text-2xl
                        mb-4
                        inline-block
                        text-dark
                        hover:text-primary
                        "
                        >
                        Falafel
                     </a>
                  </h3>
                  <p class="text-base text-body-color">
                    This dish is the staple of the Great British summer. (All three days of it.) Whether you’re a lover of our water-based friends or you wrinkle your nose at fish, we English cook it in a way that will make any mouth water: Simply deep-fry the catch of the day in batter and serve with a huge pile of thick-cut chips.
                  </p>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
               <div class="rounded overflow-hidden mb-8">
                  <img
                     src="https://i.insider.com/62632df99f656600190658aa?width=700"
                     alt="image"
                     class="w-full h-60"
                     />
               </div>
               <div>

                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-xl
                        sm:text-2xl
                        lg:text-xl
                        xl:text-2xl
                        mb-4
                        inline-block
                        text-dark
                        hover:text-primary
                        "
                        >
                        Chips and Gravy
                     </a>
                  </h3>
                  <p class="text-base text-body-color">
                    This dish is the staple of the Great British summer. (All three days of it.) Whether you’re a lover of our water-based friends or you wrinkle your nose at fish, we English cook it in a way that will make any mouth water: Simply deep-fry the catch of the day in batter and serve with a huge pile of thick-cut chips.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Blog Section End -->
 <!-- ====== Sport Section Start -->
 <section
 class="max-w-7xl mx-4  lg:mx-auto overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white "
 >
 <div class="container mx-auto">
    <div class="flex flex-wrap items-center justify-between -mx-4">
       <div class="w-full px-4 lg:w-6/12">
          <div class="flex items-center -mx-3 sm:-mx-4">
             <div class="w-full px-3 sm:px-4 xl:w-1/2">
                <div class="py-3 sm:py-4">
                   <img
                      src="https://img.redbull.com/images/c_crop,x_1004,y_0,h_2133,w_1280/c_fill,w_400,h_660/q_auto:low,f_auto/redbullcom/2022/1/13/r4dvbs0eeugwyqmygfbo/ben-stokes-batting-training"
                      alt=""
                      class="w-full h-80 rounded-2xl"
                      />
                </div>
                <div class="py-3 sm:py-4">
                   <img
                      src="https://www.shutterstock.com/preview-440/14021698bu/14d425a2/Shutterstock_14021698bu.jpg"
                      alt=""
                      class="w-full h-80 rounded-2xl"
                      />
                </div>
             </div>
             <div class="w-full px-3 sm:px-4 xl:w-1/2">
                <div class="relative z-10 my-4">
                   <img
                      src="https://c8.alamy.com/comp/G4BDD2/rugby-union-churchill-cup-england-saxons-v-usa-franklins-gardens-henry-G4BDD2.jpg"
                      alt=""
                      class="w-full h-80 rounded-2xl"
                      />
                   <span class="absolute -right-7 -bottom-7 z-[-1]">
                      <svg
                         width="134"
                         height="106"
                         viewBox="0 0 134 106"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                         >
                         <circle
                            cx="1.66667"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 1.66667 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 16.3333 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 31 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 45.6667 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3334"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 60.3334 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 88.6667 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 117.667 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 74.6667 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 103 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="104"
                            r="1.66667"
                            transform="rotate(-90 132 104)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="89.3333"
                            r="1.66667"
                            transform="rotate(-90 1.66667 89.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="89.3333"
                            r="1.66667"
                            transform="rotate(-90 16.3333 89.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="89.3333"
                            r="1.66667"
                            transform="rotate(-90 31 89.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="89.3333"
                            r="1.66667"
                            transform="rotate(-90 45.6667 89.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="89.3338"
                            r="1.66667"
                            transform="rotate(-90 60.3333 89.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="89.3338"
                            r="1.66667"
                            transform="rotate(-90 88.6667 89.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="89.3338"
                            r="1.66667"
                            transform="rotate(-90 117.667 89.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="89.3338"
                            r="1.66667"
                            transform="rotate(-90 74.6667 89.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="89.3338"
                            r="1.66667"
                            transform="rotate(-90 103 89.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="89.3338"
                            r="1.66667"
                            transform="rotate(-90 132 89.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="74.6673"
                            r="1.66667"
                            transform="rotate(-90 1.66667 74.6673)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="31.0003"
                            r="1.66667"
                            transform="rotate(-90 1.66667 31.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 16.3333 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="31.0003"
                            r="1.66667"
                            transform="rotate(-90 16.3333 31.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 31 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="31.0003"
                            r="1.66667"
                            transform="rotate(-90 31 31.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 45.6667 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="31.0003"
                            r="1.66667"
                            transform="rotate(-90 45.6667 31.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 60.3333 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="30.9998"
                            r="1.66667"
                            transform="rotate(-90 60.3333 30.9998)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 88.6667 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="30.9998"
                            r="1.66667"
                            transform="rotate(-90 88.6667 30.9998)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 117.667 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="30.9998"
                            r="1.66667"
                            transform="rotate(-90 117.667 30.9998)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 74.6667 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="30.9998"
                            r="1.66667"
                            transform="rotate(-90 74.6667 30.9998)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 103 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="30.9998"
                            r="1.66667"
                            transform="rotate(-90 103 30.9998)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="74.6668"
                            r="1.66667"
                            transform="rotate(-90 132 74.6668)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="30.9998"
                            r="1.66667"
                            transform="rotate(-90 132 30.9998)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 1.66667 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 1.66667 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 16.3333 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 16.3333 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 31 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 31 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 45.6667 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 45.6667 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 60.3333 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 60.3333 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 88.6667 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 88.6667 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 117.667 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 117.667 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 74.6667 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 74.6667 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 103 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 103 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="60.0003"
                            r="1.66667"
                            transform="rotate(-90 132 60.0003)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="16.3333"
                            r="1.66667"
                            transform="rotate(-90 132 16.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="45.3333"
                            r="1.66667"
                            transform="rotate(-90 1.66667 45.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="1.66667"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 1.66667 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="45.3333"
                            r="1.66667"
                            transform="rotate(-90 16.3333 45.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="16.3333"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 16.3333 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="45.3333"
                            r="1.66667"
                            transform="rotate(-90 31 45.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="31"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 31 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="45.3333"
                            r="1.66667"
                            transform="rotate(-90 45.6667 45.3333)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="45.6667"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 45.6667 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="45.3338"
                            r="1.66667"
                            transform="rotate(-90 60.3333 45.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="60.3333"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 60.3333 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="45.3338"
                            r="1.66667"
                            transform="rotate(-90 88.6667 45.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="88.6667"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 88.6667 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="45.3338"
                            r="1.66667"
                            transform="rotate(-90 117.667 45.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="117.667"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 117.667 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="45.3338"
                            r="1.66667"
                            transform="rotate(-90 74.6667 45.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="74.6667"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 74.6667 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="45.3338"
                            r="1.66667"
                            transform="rotate(-90 103 45.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="103"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 103 1.66683)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="45.3338"
                            r="1.66667"
                            transform="rotate(-90 132 45.3338)"
                            fill="#3056D3"
                            />
                         <circle
                            cx="132"
                            cy="1.66683"
                            r="1.66667"
                            transform="rotate(-90 132 1.66683)"
                            fill="#3056D3"
                            />
                      </svg>
                   </span>
                </div>
             </div>
          </div>
       </div>
       <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
          <div class="mt-10 lg:mt-0">

            <h1 class="max-w-2xl mb-20 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl  ">
                 {{-- Top 5 sporting events in the UK --}}
            </h1>
             <p class="mb-5 text-xl font-semibold text-gray-700 ">
              {!!$lifes->Sporting_event_text!!}
             </p>
             {{-- <p class="mb-8 text-xl font-semibold text-gray-700 ">
              Wimbledon is famous the world over for its grass Grand Slam event held in South West London. Producing some of the best tennis matches and rivalries across generations, from McEnroe v Carter, Steffi Graff v Monica Sales or Nadal v Federer, Wimbledon has produced some truly magical moments in Tennis history.
             </p> --}}

          </div>
       </div>
    </div>
 </div>
 </section>
 <!-- ====== Sport Section End -->
 <!--Blog-->
 <section class="bg-primary py-10">
  <div class="container max-w-7xl p-6 mx-auto space-y-6 sm:space-y-12">
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
          <span class="text-xs text-black">February 19, 2021</span>
          <p>
           {!! Str::limit(strip_tags($cover->description), 400) !!}
          </p>
        </div>
      </a>
    <div
      class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3"
    >
    @foreach ($blogs as $blog)
    <a
    rel="noopener noreferrer"
    href="{{route('blog.details', $blog->id)}}"
    class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white rounded-md"
  >
    <img
      role="presentation"
      class="object-cover w-full rounded h-44 "
      src="{{asset($blog->image)}}"
    />
    <div class="p-6 space-y-2">
      <h3
        class="text-2xl font-semibold group-hover:underline group-focus:underline"
      >
      {{$blog->title}}
      </h3>
      <span class="text-xs ">{{$blog->created_at}}</span>
      <p>
        {!! Str::limit(strip_tags($blog->description), 200) !!}
      </p>
    </div>
  </a>
    @endforeach

    </div>
  </div>
</section>
<!--End New at Horizons Unlimited-->
 <!--FAQ Section-->
 <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">

  <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">UK: things to know</h1>
              <div class="mt-4 flex md:justify-between md:items-start md:flex-row flex-col justify-start items-start">
                  <div class="">
                      <p class="font-normal  text-base leading-6 text-gray-600 lg:w-8/12 md:w-9/12">Here are few of the most important things for our Students</p>
                  </div>


              </div>
              <div class="flex md:flex-row flex-col md:space-x-8 md:mt-16 mt-8">
                  <div class="md:w-5/12 lg:w-4/12 w-full">
                      <img src="https://cdn.shopify.com/app-store/listing_images/be8e18fe7fd62b265563360c2986633d/promotional_image/CLHpktmI5_QCEAE=.jpeg?height=720&quality=90&width=1280" alt="Image of Glass bottle" class="w-full md:block hidden" />
                      <img src="https://cdn.shopify.com/app-store/listing_images/be8e18fe7fd62b265563360c2986633d/promotional_image/CLHpktmI5_QCEAE=.jpeg?height=720&quality=90&width=1280" alt="Image of Glass bottle" class="w-full md:hidden block" />
                  </div>
                  <div class="md:w-7/12 lg:w-8/12 w-full md:mt-0 sm:mt-14 mt-10">
                      <!-- Travel Section -->
                      <div>
                          <div class="flex justify-between items-center cursor-pointer">
                              <h3 class="font-bold text-3xl   leading-5 text-gray-800">{{$lifes->faq_question_1}}</h3>
                              <button aria-label="too" class="text-gray-800  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" onclick="openAnsSection(1)">
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path id="path1" class="" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                      <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </button>
                          </div>
                          <p id="para1" class="hidden font-normal  text-xl leading-6 text-gray-800 mt-4 w-11/12">{!!$lifes->faq_answer_1!!} </p>
                      </div>

                      <hr class="my-7 bg-gray-200" />

                      <!-- Returns Section -->

                      <div>
                          <div class="flex justify-between items-center cursor-pointer">
                              <h3 class="font-bold text-3xl    leading-5 text-gray-800">{{$lifes->faq_question_2}}</h3>
                              <button aria-label="too" class="text-gray-800  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" onclick="openAnsSection(2)">
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path id="path2" class="" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                      <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </button>
                          </div>
                          <p id="para2" class="hidden font-normal  text-xl leading-6 text-gray-600 mt-4 w-11/12">
                            {!!$lifes->faq_answer_2!!}
                      </div>

                      <hr class="my-7 bg-gray-200" />

                      <!-- Exchange Section -->

                      <div>
                          <div class="flex justify-between items-center cursor-pointer">
                              <h3 class="font-bold text-3xl    leading-5 text-gray-800">{{$lifes->faq_question_3}}</h3>
                              <button aria-label="too" class="text-gray-800  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" onclick="openAnsSection(3)">
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path id="path3" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                      <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </button>
                          </div>
                          <p id="para3" class="hidden font-normal  text-xl leading-6 text-gray-600 mt-4 w-11/12">
                            {!!$lifes->faq_answer_3!!} </p>
                      </div>

                      <hr class="my-7 bg-gray-200" />

                      <!-- Tracking Section -->


                  </div>
              </div>
          </div>
          <script>function openAnsSection(val) {
    var p = document.getElementById("para" + val);
    var svg = document.getElementById("path" + val);

    if (p.classList.contains("hidden")) {
      p.classList.remove("hidden");
      p.classList.add("block");
    } else {
      p.classList.remove("block");
      p.classList.add("hidden");
    }

    if (svg.classList.contains("hidden")) {
      svg.classList.remove("hidden");
      svg.classList.add("block");
    } else {
      svg.classList.remove("block");
      svg.classList.add("hidden");
    }
  }
  </script>
 <!--End FAQ Section-->

@endsection
