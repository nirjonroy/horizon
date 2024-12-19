@extends('frontend.app')

@section('content')
<section class="bg-white pt-20 lg:pt-40 ">
    <div
      class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
        Study a degree online at one of our partner universities
        </h1>

        <p
          class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl"
        >
        Online learning allows you to take a degree entirely online. This means you can study alongside any existing commitments or responsibilities you may have, making it a convenient study option.
        </p>

      </div>
      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
        <img
          src="https://i.pinimg.com/736x/f6/4e/97/f64e979c3c907c1240d371bafa868666.jpg"
          alt="mockup"
          class="rounded-lg"
        />
      </div>
    </div>
  </section>
  <!--End Banner-->

    <!--End Banner Section-->
    <section class="bg-gray-200 py-10  ">
      <div
        class="max-w-7xl px-4 py-8 mx-auto "
      >
        <div class="mr-auto place-self-center">
          <h1
            class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
          >
          Why choose Essex or Liverpool?
          </h1>
          <div class="flex flex-col md:flex-row mt-10 gap-10">
            <div class="max-w-2xl rounded-lg bg-white p-8">
                <h1 class="text-3xl font-bold ">University of Essex</h1>
                <div class="flex gap-5 mt-6 item-center">
                    <i class="text-3xl fa-regular fa-circle-check"></i>
                    <p class="text-lg">
                        Top 25 in the world for international outlook (Times Higher Education World University Rankings 2023) 
                    </p>
                  </div>
                  <div class="flex gap-5 mt-6 item-center">
                    <i class="text-3xl fa-regular fa-circle-check"></i>
                    <p class="text-lg">
                        Top 40 in the UK overall (Complete University Guide 2023)
                    </p>
                  </div>
            </div>
            <div class="max-w-2xl rounded-lg bg-white p-8">
                <h1  class="text-3xl font-bold ">University of Liverpool</h1>
                <div class="flex gap-5 mt-6 item-center">
                    <i class="text-3xl fa-regular fa-circle-check"></i>
                    <p class="text-lg">
                        Russell Group member
                    </p>
                  </div>
                  <div class="flex gap-5 mt-6 item-center">
                    <i class="text-3xl fa-regular fa-circle-check"></i>
                    <p class="text-lg">
                        Top 150 university in the world (Shanghai Academic Ranking of World Universities 2022)
                    </p>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white   ">
        <div
          class="max-w-7xl px-4 py-8 mx-auto"
        >
          <div class="mr-auto place-self-center ">
            <h1
              class=" mb-8 pb-8 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
            >
            Your online degree routes include:
            </h1>


            <div class="flex flex-wrap   w-full justify-between items-start ">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img
                      class="w-full h-60"
                      src="https://img.freepik.com/premium-photo/arab-female-student-hijab-using-laptop-university-cafe-muslim-woman-with-books-sitting-library_266732-19192.jpg"
                      alt="Sunset in the mountains"
                    />
                    <div class="px-6 py-4">
                      <div class="font-bold text-2xl  mb-2">Essex Online bachelor’s and top-up degrees</div>

                      <a href="https://online.essex.ac.uk/subjects/undergraduate-courses/">

                        <button
                          class="mt-5 bg-primary text-sm text-white border border-white w-36 h-12 rounded-md font-bold"
                        >
                          View More
                        </button>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img
                      class="w-full h-60"
                      src="https://static.vecteezy.com/system/resources/previews/029/769/642/non_2x/portrait-of-beautiful-muslim-female-student-online-learning-in-coffee-shop-young-woman-with-hijab-studies-with-laptop-in-cafe-girl-doing-her-homework-free-photo.jpeg"
                      alt="Sunset in the mountains"
                    />
                    <div class="px-6 py-4">
                      <div class="font-bold text-2xl  mb-2">Essex Online master’s degrees</div>

                      <a href="https://online.essex.ac.uk/subjects/postgraduate-courses/">

                        <button
                          class="mt-5 bg-primary text-sm text-white border border-white w-36 h-12 rounded-md font-bold"
                        >
                          View More
                        </button>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img
                      class="w-full h-60"
                      src="https://img.freepik.com/premium-photo/female-student-with-hijab-standing-opened-laptop-her-hand_8595-30260.jpg"
                      alt="Sunset in the mountains"
                    />
                    <div class="px-6 py-4">
                      <div class="font-bold text-2xl  mb-2">Liverpool Online master’s degrees awarded by the University of Liverpool</div>

                      <a href="https://www.liverpool.ac.uk/study/online/">

                        <button
                          class="mt-5 bg-primary text-sm text-white border border-white w-36 h-12 rounded-md font-bold"
                        >
                          View More
                        </button>
                      </a>
                    </div>
                  </div>
            </div>


          </div>
        </div>
      </section>

    <!--Blog-->
    <section class="bg-primary py-10">
      <div class="container max-w-7xl p-6 mx-auto space-y-6 sm:space-y-12">
        <a
          rel="noopener noreferrer"
          href="#"
          class="max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-white rounded-md"
        >
          <img
            src="https://i.pinimg.com/736x/f6/4e/97/f64e979c3c907c1240d371bafa868666.jpg"
            alt=""
            class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7"
          />
          <div class="p-6 space-y-2 lg:col-span-5 bg-white rounded-md">
            <h3
              class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline"
            >
            10 benefits of digital learning
            </h3>
            <span class="text-xs text-black">February 19, 2023</span>
            <p>
                From online degrees to Kaplan’s own Virtual Learning Environment, digital learning has existed in various forms for many years. Now lots of institutions are adopting this technology as a solution while not all students can travel to study — so what are the benefits of digital learning?
            </p>
          </div>
        </a>
        <div
          class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3"
        >
          <a
            rel="noopener noreferrer"
            href="#"
            class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white rounded-md"
          >
            <img
              role="presentation"
              class="object-cover w-full rounded h-60"
              src="https://st3.depositphotos.com/3591429/19003/i/450/depositphotos_190033948-stock-photo-group-islamic-women-looking-smartphone.jpg"
            />
            <div class="p-6 space-y-2">
              <h3
                class="text-2xl font-semibold group-hover:underline group-focus:underline"
              >
              5 tips for studying at home and online
              </h3>
              <span class="text-xs">January 21, 2021</span>
              <p>
                With recent global events affecting the way we go about our daily lives, you might have had to make some changes to the way you study. A lot of teaching has moved online, and you may be finding it challenging to adjust to this, so we’ve compiled some tips to help you adapt to the change and with studying at home.
              </p>
            </div>
          </a>
          <a
            rel="noopener noreferrer"
            href="#"
            class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white rounded-md"
          >
            <img
              role="presentation"
              class="object-cover w-full rounded h-60"
              src="https://www.kaplanpathways.com/tachyon/sites/4/2023/05/places-to-live-blog-header-Br5699.jpg?resize=1336%2C442&crop_strategy=smart&zoom=1"
            />
            <div class="p-6 space-y-2">
              <h3
                class="text-2xl font-semibold group-hover:underline group-focus:underline"
              >
              Career Focus: What are Life and Career Skills at Horizons Pathways?
              </h3>
              <span class="text-xs">January 22, 2021</span>
              <p>
                In 2019, the University of Liverpool, a member of the UK’s elite Russell Group, partnered with Kaplan Open Learning (KOL) to launch a selection of online degrees delivered through KOL’s innovative multi-media learning platform.
              </p>
            </div>
          </a>
          <a
            rel="noopener noreferrer"
            href="#"
            class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white rounded-md"
          >
            <img
              role="presentation"
              class="object-cover w-full rounded h-60"
              src="https://us.images.westend61.de/0001266403pw/young-man-student-study-at-home-using-laptop-and-learning-online-CAVF64908.jpg"
            />
            <div class="p-6 space-y-2">
              <h3
                class="text-2xl font-semibold group-hover:underline group-focus:underline"
              >
              Study an online degree with Liverpool Online
              </h3>
              <span class="text-xs">January 23, 2021</span>
              <p>
                Did you know that the University of Liverpool offers a range of online degrees through Kaplan Open Learning? Read on to discover how you could gain a prestigious UK degree from anywhere in the world!
              </p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!--End New at Horizons Unlimited-->
    <section class="bg-gray-100">
        <div class="text-center max-w-7xl mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
          <h1 class="mb-4 text-4xl font-extrabold  pt-20 tracking-tight leading-none md:text-5xl xl:text-5xl">
           Next Steps
          </h1>


       </div>
         <div class="container max-w-7xl mx-auto">
            <div class="flex flex-wrap justify-center ">

            </div>
            <div class="flex flex-wrap ">
                @foreach ($study as $item)
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
                       <div class="rounded overflow-hidden mb-8">
                          <img
                             src="{{$item->slider1}}"
                             alt="image"
                             class="w-full h-60"
                             />
                       </div>
                       <div>

                          <h3>
                             <a
                                href="{{$item->link}}"
                                class="
                                font-bold
                                text-xl
                                sm:text-2xl
                                lg:text-xl
                                xl:text-3xl
                                mb-4
                                inline-block
                                text-dark
                                hover:text-primary
                                "
                                >
                                {{$item->name}} online degrees
                             </a>
                          </h3>

                       </div>
                    </div>
                 </div>
                @endforeach




            </div>
         </div>
      </section>

@endsection
