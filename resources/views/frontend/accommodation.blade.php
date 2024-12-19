@extends('frontend.app')

@section('content')
<section class="bg-white pt-20 lg:pt-40 ">
    <div
      class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl  font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          Safe, comfortable student accommodation
        </h1>

        <p
          class="max-w-2xl  mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl "
        >
          When you study abroad, you’ll need a comfortable and supportive
          place to call home. With Kaplan, you’ll find just that.
        </p>
        <a
          href="#"
          class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 "
        >
          Get started
          <svg
            class="w-5 h-5 ml-2 -mr-1"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </a>
      </div>
      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
        <img
          src="https://media.istockphoto.com/id/1369314103/photo/university-bedroom.jpg?s=612x612&w=0&k=20&c=dIVWPTLxITkk5r7XzUy3V_BM41OPDohD3nfjOjLYwWg="
          alt="mockup"
        />
      </div>
    </div>
  </section>
  <!--End Banner-->
  <section class="bg-gray-200 lg:pt-20 ">
    <div
      class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          How do I book accommodation with Horizons Unlimited
        </h1>
        <div>
          <div class="flex gap-5 mt-6 item-center">
            <i class="text-3xl fa-regular fa-circle-check"></i>
            <p class="text-lg">
              Depending on your study location, you may be able to book
              accommodation with Kaplan Living. You can do this on the Kaplan
              Living website.
            </p>
          </div>
          <div class="flex gap-5 mt-6 item-center">
            <i class="text-3xl fa-regular fa-circle-check"></i>
            <p class="text-lg">
              Once you have received a study offer, you can browse all your
              accommodation options, from private studios to single-sex dorms.
            </p>
          </div>
          <div class="flex gap-5 mt-6 item-center">
            <i class="text-3xl fa-regular fa-circle-check"></i>
            <p class="text-lg">
              You’ll need to accept an offer to study before you can book your
              accommodation.
            </p>
          </div>
          <!--<a href="{{route('contact.us')}}" class="bg-primary text-white px-6 py-3 rounded-lg mt-8">-->
          <!--  How to Book Accommodation-->
          <!--</a>-->
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white lg:pt-20 ">
    <div
      class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class=" mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          Student accommodation in the UK
        </h1>
        <p class="text-lg">
          Studying abroad in the UK is a unique experience, and finding the right accommodation can help to make it extra special!
        </p>
        <div class="mt-10">

          <div class="max-w-[450px] rounded-lg bg-blue-100 h-auto flex gap-5">
              <div>
                  <img class="w-40 rounded-lg" src="https://media.istockphoto.com/id/1319275419/photo/a-young-woman-lying-on-bed.jpg?s=612x612&w=0&k=20&c=WajgBgwDJw0V5OeXU0tBTeJryTRfojt2PI012sB8OKM=">

              </div>
              <div class="flex justify-center items-center">
                  <h1 class="text-xl w-60 font-bold">How to choose your student accommodation</h1>
              </div>
          </div>
        </div>
      </div>
      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
        <img
          src="https://media.istockphoto.com/id/1335437278/photo/friends-at-college-dorm-room.jpg?s=612x612&w=0&k=20&c=uoneHiLpsQBiuZWFtdTTtIYNqYlT7qhMnmshW0iOdKU="
          alt="mockup"
        />
      </div>
    </div>
  </section>



  <!--Things to consider-->
  <section class="max-w-7xl px-4 mx-auto">
    <div class="mb-10">
      <h1
        class="mb-4 mt-10 lg:text-start text-center text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl "
      >
        Things to Consider in UK
      </h1>
      <div
        class="mt-4 flex md:justify-between md:items-start md:flex-row flex-col justify-start items-start"
      ></div>
      <div class="flex md:flex-row flex-col md:space-x-8 md:mt-16 mt-8">
        <div class="md:w-5/12 lg:w-4/12 w-full">
          <img
            src="https://media.istockphoto.com/id/1349297968/photo/happy-female-muslim-student-smiling-in-college.jpg?s=612x612&w=0&k=20&c=d29cHWnlX49P1gcRI16hTvAXu1eQ83A109ffsIVCBZ8="
            alt="Image of Glass bottle"
            class="rounded-lg w-full md:block hidden"
          />
          <img
            src="https://media.istockphoto.com/id/1349297968/photo/happy-female-muslim-student-smiling-in-college.jpg?s=612x612&w=0&k=20&c=d29cHWnlX49P1gcRI16hTvAXu1eQ83A109ffsIVCBZ8="
            alt="Image of Glass bottle"
            class="rounded-lg w-full md:hidden block"
          />
        </div>
        <div
          class="md:w-7/12 flex flex-col justify-center lg:w-8/12 w-full md:mt-0 sm:mt-14 mt-10"
        >
          <div>
            <div class="flex justify-between items-center cursor-pointer">
              <h3
                class="font-bold text-3xl   text-gray-800"
              >
                Living costs in the UK
              </h3>
              <button
                aria-label="too"
                class="text-gray-800  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
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
              class="hidden font-normal  text-xl leading-6 text-gray-800 mt-4 w-11/12"
            >
              You’ll want to make sure you can enjoy your time outside the
              classroom while you study abroad. Here are some things to
              consider… <br />

              1. For visa purposes, you must have at least £1,023 for each
              month of your degree preparation course <br />
              2. £1,334 per month if you are studying in London <br />
              3. This is to cover living expenses for up to 9 months <br />
              Find out more about
              <a class="underline" href="life-uk.html"> life in the UK</a>
            </p>
          </div>

          <hr class="my-7 bg-gray-200" />

          <div>
            <div class="flex justify-between items-center cursor-pointer">
              <h3
                class="font-bold text-3xl   text-gray-800"
              >
                UK accommodation
              </h3>
              <button
                aria-label="too"
                class="text-gray-800  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
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
              class="hidden font-normal  text-xl leading-6 text-gray-600 mt-4 w-11/12"
            >
              You can choose from a wide range of accommodation options,
              making it easy to find your perfect home away from home that
              fits your needs and budget. All bills (WiFi, electricity, gas,
              and water) are included at our residences, so you don’t need to
              worry about any unexpected costs! Find out more about
              accommodation in the UK.
            </p>
          </div>

          <hr class="my-7 bg-gray-200" />

          <div>
            <div class="flex justify-between items-center cursor-pointer">
              <h3
                class="font-bold text-3xl   text-gray-800"
              >
                UK scholarships for international students
              </h3>
              <button
                aria-label="too"
                class="text-gray-800  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
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
              class="hidden font-normal  text-xl leading-6 text-gray-600 mt-4 w-11/12"
            >
              Studying abroad is a huge investment in your future. To make the
              experience more affordable, we offer scholarships that can help
              cover some of the costs. Find out more about scholarships in the
              UK.
            </p>
          </div>

          <hr class="my-7 bg-gray-200" />
        </div>
      </div>
    </div>
  </section>

  <!-- ====== Blog Section Start -->
  <section class="bg-gray-100">
    <div
      class="text-center max-w-7xl mx-auto mb-[60px] lg:mb-20 max-w-[510px]"
    >
      <h1
        class="mb-4 text-4xl font-extrabold pt-20 tracking-tight leading-none md:text-5xl xl:text-5xl "
      >
        Next Steps
      </h1>
    </div>
    <div class="container max-w-7xl mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
            <div class="rounded overflow-hidden mb-8">
              <img
                src="https://research.uci.edu/wp-content/uploads/calculating.webp"
                alt="image"
                class="w-full h-60"
              />
            </div>
            <div>
              <h3>
                <a
                  href="{{route('fees.cost')}}"
                  class="font-bold text-xl sm:text-2xl lg:text-xl xl:text-3xl mb-4 inline-block text-dark hover:text-primary"
                >
                  Fees and costs
                </a>
              </h3>
              <p class="text-base text-body-color">
                Some fees, courses and degrees are more expensive than others,
                but this brief overview can give you an idea of what to
                expect.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
            <div class="rounded overflow-hidden mb-8">
              <img
                src="https://keystoneacademic-res.cloudinary.com/image/upload/element/18/181461_photo-1519337265831-281ec6cc8514.jpg"
                alt="image"
                class="w-full h-60"
              />
            </div>
            <div>
              <h3>
                <a
                  href="{{route('application.process')}}"
                  class="font-bold text-xl sm:text-2xl lg:text-xl xl:text-3xl mb-4 inline-block text-dark hover:text-primary"
                >
                  Application Process
                </a>
              </h3>
              <p class="text-base text-body-color">
                Some fees, courses and degrees are more expensive than others,
                but this brief overview can give you an idea of what to
                expect.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Blog Section End -->
@endsection
