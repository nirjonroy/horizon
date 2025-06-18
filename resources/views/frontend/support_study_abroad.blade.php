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
          Support for studying abroad
        </h1>

        <p
          class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl "
        >
          We embed career skills into our UK curriculum, and all our
          university partners have dedicated careers centres to help you
          prepare for the world of work after you graduate. In many cases,
          you’ll also be able to complete an optional internship or work
          experience placement.
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
          src="https://content.health.harvard.edu/wp-content/uploads/2023/09/0e1fafa1-df1e-46aa-9047-b7808a354bca.jpg"
          alt="mockup"
        />
      </div>
    </div>
  </section>
  <!--End Banner-->

  <!--Degree Fees-->
  <section class="bg-gray-100">
    <div class="max-w-7xl py-16 mx-auto">
      <h1
        class="mb-4 lg:text-start text-center text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl "
      >
        Before you study abroad
      </h1>
      <p class="px-4 text-xl">
        Our support begins before you even start studying abroad
      </p>
      <div
        class="flex mt-10 flex-row flex-wrap justify-center lg:justify-start item-center pb-10 gap-10"
      >
        <div
          class="bg-blue-100 max-w-[400px] flex flex-col justify-center item-center p-8 rounded-lg"
        >
          <h1 class="text-3xl font-bold mb-4">Application support</h1>
          <p class="text-xl font-semibold text-gray-600">
            From help with choosing a study option and advice on entry
            requirements to guidance on submitting your application and
            obtaining a student visa, we’re here to support you from the start
            of your journey.
          </p>
        </div>
        <div
          class="bg-blue-100 max-w-[400px] flex flex-col justify-center item-center p-8 rounded-lg"
        >
          <h1 class="text-3xl font-bold mb-4">Pre-arrival support</h1>
          <p class="text-xl max-w-sm font-semibold text-gray-600">
            We’ll make sure that you have everything ready before you travel
            to your study destination, including helping you organise any
            documents and arrival arrangements.
          </p>
        </div>
        <div
          class="bg-blue-100 max-w-[400px] flex flex-col justify-center item-center p-8 rounded-lg"
        >
          <h1 class="text-3xl font-bold mb-4">
            Parents’ and guardians’ guide
          </h1>
          <p class="text-xl max-w-sm font-semibold text-gray-600">
            Your parents or guardians may want to be involved in the process
            of studying abroad. Share our parents’ and guardians’ page with
            them to help answer any questions.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-blue-100">
    <div class="max-w-7xl py-16 mx-auto">
      <h1
        class="mb-4 lg:text-start text-center text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl "
      >
        While you study abroad
      </h1>
      <p class="px-4 text-xl">
        When you’re at your study destination, you’ll have lots of help
        available, such as friendly student support staff and useful
        resources.
      </p>
      <div
        class="flex mt-10 flex-row flex-wrap justify-center lg:justify-start item-center pb-10 gap-10"
      >
        <div
          class="bg-white max-w-[400px] flex flex-col justify-center item-center p-8 rounded-lg"
        >
          <h1 class="text-3xl font-bold mb-4">Student services</h1>
          <p class="text-xl font-semibold text-gray-600">
              At your study centre and university, you’ll have access to student services that focus on your welfare. From academic support to wellbeing and mental health resources, you’ll always have someone to ask for help.
          </p>
        </div>
        <div
          class="bg-white max-w-[400px] flex flex-col justify-center item-center p-8 rounded-lg"
        >
          <h1 class="text-3xl font-bold mb-4">Health and safety</h1>
          <p class="text-xl max-w-sm font-semibold text-gray-600">
              Your health and safety is a top priority. You should feel comfortable when you’re studying abroad and understand where to go for healthcare and welfare needs. We’ll make sure you have everything you need.
          </p>
        </div>

      </div>
    </div>
  </section>
  <!--End Degree Fees-->
  <section class="hidden lg:block bg-white pt-20 lg:pt-40 ">
      <div
        class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
      >
        <div class="mr-auto place-self-center lg:col-span-7">
          <h1
            class="max-w-2xl mb-4 text-xl font-extrabold tracking-tight leading-none md:text-xl xl:text-3xl "
          >
          After you study abroad
          </h1>

          <p
            class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl "
          >
          It’s important to think about what you want to do in the future, and develop the skills that make you valuable to employers. Our study options and university partners help you do just that. 


          </p>
          <h1
            class="max-w-2xl mb-4 text-xl font-extrabold tracking-tight leading-none md:text-xl xl:text-3xl "
          >
          Career preparation
          </h1>

          <p
            class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl "
          >
          We embed career skills into our UK curriculum, and all our university partners have dedicated careers centres to help you prepare for the world of work after you graduate. In many cases, you’ll also be able to complete an optional internship or work experience placement.


          </p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
          <img
          class="rounded-lg"
            src="https://t3.ftcdn.net/jpg/03/24/24/64/360_F_324246435_ihJX0EPbmPKtRvs8asEmw0mR2STjWqs5.jpg"
            alt="mockup"
          />
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
      <div class="flex flex-wrap justify-center"></div>
      <div class="flex flex-wrap">
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

        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
            <div class="rounded overflow-hidden mb-8">
              <img
                src="https://kaplan-prod.altis.cloud/tachyon/sites/4/2023/01/student-studying-No4323.jpg?resize=1440%2C960&zoom=1"
                alt="image"
                class="w-full h-60"
              />
            </div>
            <div>
              <h3>
                <a
                  href="{{route('entry.req')}}"
                  class="font-bold text-xl sm:text-2xl lg:text-xl xl:text-3xl mb-4 inline-block text-dark hover:text-primary"
                >
                  Entry requirements
                </a>
              </h3>
              <p class="text-base text-body-color">
                In order for your application to be accepted, you’ll need to
                meet the entry requirements for your chosen course or degree.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Blog Section End -->
@endsection
