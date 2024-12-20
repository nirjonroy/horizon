<!--Navbar-->
<header id="navbar">
    <div class="bg-primary">
      <div class="flex justify-between max-w-7xl mx-4 md:mx-8 xl:mx-auto">
        <a href="{{route('home.index')}}">
            @php
                $siteInfo = DB::table('site_information')->first();
            @endphp
          <img class="w-36" src="{{asset($siteInfo->logo)}}" alt="{{$siteInfo->name}}" />
        </a>

        <div class="flex justify-center items-center gap-4 lg:gap-5">
          <!--<div class="dropdown">-->
          <!--  <span class="text-lg font-semibold"-->
          <!--    ><i class="text-2xl text-white fa-solid fa-user"></i-->
          <!--  ></span>-->
          <!--  <div class="dropdown-content">-->
          <!--    <a-->
          <!--      class="text-base font-bold mb-2 border-b-2 border-black"-->
          <!--      href="log-in.html"-->
          <!--      >Log in</a-->
          <!--    >-->
          <!--    <a-->
          <!--      class="text-base font-bold mb-2 border-b-2 border-black"-->
          <!--      href="sign-up.html"-->
          <!--      >Sign Up</a-->
          <!--    >-->
          <!--  </div>-->
          <!--</div>-->
          <a href="{{route('consultation.step1')}}">
            <button
              class="hidden lg:block text-base text-white border border-white w-36 h-12 rounded-md font-bold"
            >
              Book Consultation
            </button>
          </a>
          <a href="{{route('contact.us')}}">
            <button
              class="hidden lg:block text-base text-white border border-white w-36 h-12 rounded-md font-bold"
            >
              Contact Us
            </button>
          </a>
          <a href="{{route('apply.now')}}">
            <button
              class="lg:text-base text-sm bg-[#FF0000] text-white w-24 h-10 lg:w-36 lg:h-12 rounded-md font-bold"
            >
              Apply Now
            </button>
          </a>
        </div>
        <button class="menu-toggle text-3xl xl:hidden text-white">
          <i class="ml-2 fas fa-bars"></i>
        </button>
      </div>
    </div>
    <div class="max-w-7xl hidden xl:block mx-auto">
      <ul class="flex justify-between">
        <a href="{{route('home.index')}}">
            <li class="text-lg font-semibold">Home</li>
        </a>

        <div class="dropdown">
          <span class="text-lg font-semibold"
            >Where to Study <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
            @php
                $wheretoStudies = DB::table('where_to_studies')->get();
            @endphp
            @foreach ($wheretoStudies as $study)
                <a
                class="text-base font-bold mb-2 border-b-2 border-black"
                href="{{route('where.to.study', $study->id)}}"
                >{{$study->name}}</a
            >
            @endforeach


            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('online.study.option')}}"
              >Online Study Option</a
            >
          </div>
        </div>
        <div class="dropdown">
          <span class="text-lg font-semibold"
            >International Student Life
            <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
            @php
              $studentLife =  DB::table('international_student_lives')->get();
            //   print_r($studentLife)
            @endphp
            @foreach ($studentLife as $life)
            @if(!empty($life->id))
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('international.student.life', $life->id)}}"
              >{{$life->name}}</a
            >
            @endif
            @endforeach

          </div>
        </div>
        <div class="dropdown">
          <span class="text-lg font-semibold"
            >How to Apply <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('how.to.apply')}}"
              >Find out how to apply</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('fees.cost')}}"
              >Fees and costs</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('entry.req')}}"
              >Entry Requirements</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('application.process')}}"
              >Application Process</a
            >
          </div>
        </div>

        <a href="{{route('accommodation')}}">
          <li class="text-lg font-semibold">Accommodation</li>
        </a>
        <a href="{{route('who_we_are')}}">
          <li class="text-lg font-semibold">Who We Are</li>
        </a>
        <div class="dropdown">
          <span class="text-lg font-semibold"
            >Support <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('support.study.abroad')}}"
              >Support for Study Abroad</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('support.career.preparation')}}"
              >Career Preparation</a
            >
          </div>
        </div>
        {{-- <a href="#">
          <li class="text-lg font-semibold">Refer & Earn Bonus</li>
        </a> --}}
      </ul>
    </div>
    <div class="max-w-7xl mx-auto xl:hidden">
      <ul
        class="hidden pb-4 bg-primary flex flex-col items-center gap-5 justify-between"
      >
        <a href="{{route('home.index')}}">
          <li class="text-lg text-white mt-4 font-semibold">Home</li>
        </a>
        <div class="dropdown">
          <span class="text-lg text-white font-semibold"
            >Where to Study<i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
           @foreach ($wheretoStudies as $study)
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('where.to.study', $study->id)}}"
              >{{$study->name}}</a
            >
           @endforeach
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('online.study.option')}}"
              >Online Study Option</a
            >
          </div>
        </div>
        <div class="dropdown">
          <span class="text-lg text-white font-semibold"
            >International Student Life
            <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
               @foreach ($studentLife as $life)
            @if(!empty($life->id))
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('international.student.life', $life->id)}}"
              >{{$life->name}}</a
            >
             @endif
            @endforeach
          </div>
        </div>
        <div class="dropdown">
          <span class="text-lg text-white font-semibold"
            >How to Apply <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('how.to.apply')}}"
              >Find out how to apply</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('fees.cost')}}"
              >Fees and costs</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('entry.req')}}"
              >Entry Requirements</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('application.process')}}"
              >Application Process</a
            >
          </div>
        </div>
        <a href="{{route('accommodation')}}">
          <li class="text-lg text-white font-semibold">Accommodation</li>
        </a>
        <a href="{{route('who_we_are')}}">
          <li class="text-lg font-semibold text-white">Who We Are</li>
        </a>
        <div class="dropdown">
          <span class="text-lg text-white font-semibold"
            >Support <i class="ml-2 fa-solid fa-caret-down"></i
          ></span>
          <div class="dropdown-content">
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('support.study.abroad')}}"
              >Support for Study Abroad</a
            >
            <a
              class="text-base font-bold mb-2 border-b-2 border-black"
              href="{{route('support.career.preparation')}}"
              >Career Preparation</a
            >
          </div>
        </div>
        {{-- <a href="#">
          <li class="text-lg font-semibold text-white">Refer & Earn Bonus</li>
        </a> --}}
      </ul>
    </div>
  </header>
  <!--End Navbar-->
