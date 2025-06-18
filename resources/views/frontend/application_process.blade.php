@extends('frontend.app')

@section('content')
  <!--Banner-->
  <section class="bg-white pt-20 lg:pt-40 ">
    <div
      class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          UK application process
        </h1>

        <p
          class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl "
        >
          We’ve made applying to a UK university simple. All you need to do is
          follow the steps below to start your journey to studying abroad in
          the UK.
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
          src="https://keystoneacademic-res.cloudinary.com/image/upload/element/18/181461_photo-1519337265831-281ec6cc8514.jpg"
          alt="mockup"
        />
      </div>
    </div>
  </section>
  <!--End Banner-->
  <!--Stepper -->
  <section class="bg-blue-100 py-10">
    <div class="p-4 max-w-2xl mx-auto ">
      <h1
        class="text-center mb-16 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl "
      >
        How to apply
      </h1>
      <div class="flex bg-white p-4 rounded-lg">
        <div class="mr-4 flex flex-col items-center">
          <div>
            <div
              class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6 text-blue-800 "
              >
                <path d="M12 5l0 14"></path>
                <path d="M18 13l-6 6"></path>
                <path d="M6 13l6 6"></path>
              </svg>
            </div>
          </div>
          <div class="h-full w-px bg-gray-300 "></div>
        </div>
        <div class="pt-1 pb-8">
          <p
            class="mb-2 text-base font-bold text-gray-900 "
          >
            Step 1
          </p>
          <h1 class="text-2xl font-bold text-gray-700">
            Complete your application form
          </h1>
          <p class="text-gray-600 ">
            You can add your supporting documents straightaway, or save your
            application and upload them later.
          </p>
        </div>
      </div>

      <div class="flex bg-white p-4 rounded-lg">
        <div class="mr-4 flex flex-col items-center">
          <div>
            <div
              class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6 text-blue-800 "
              >
                <path d="M12 5l0 14"></path>
                <path d="M18 13l-6 6"></path>
                <path d="M6 13l6 6"></path>
              </svg>
            </div>
          </div>
          <div class="h-full w-px bg-gray-300 "></div>
        </div>
        <div class="pt-1 pb-8">
          <p
            class="mb-2 text-base font-bold text-gray-900 "
          >
            Step 2
          </p>
          <h1 class="text-2xl font-bold text-gray-700">
            Receive a study offer
          </h1>
          <p class="text-gray-600 ">
            We’ll review your application and get back to you quickly with
            either a conditional or unconditional offer, or to explore your
            options.
          </p>
        </div>
      </div>
      <div class="flex bg-white p-4 rounded-lg">
        <div class="mr-4 flex flex-col items-center">
          <div>
            <div
              class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6 text-blue-800 "
              >
                <path d="M12 5l0 14"></path>
                <path d="M18 13l-6 6"></path>
                <path d="M6 13l6 6"></path>
              </svg>
            </div>
          </div>
          <div class="h-full w-px bg-gray-300 "></div>
        </div>
        <div class="pt-1 pb-8">
          <p
            class="mb-2 text-base font-bold text-gray-900 "
          >
            Step 2
          </p>
          <h1 class="text-2xl font-bold text-gray-700">Accept your offer</h1>
          <p class="text-gray-600 ">
            Return your offer acceptance form to us and pay your deposit, or
            send your financial guarantee.
          </p>
        </div>
      </div>

      <div class="flex bg-white p-4 rounded-lg">
        <div class="mr-4 flex flex-col items-center">
          <div>
            <div
              class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6 text-blue-800 "
              >
                <path d="M12 5l0 14"></path>
                <path d="M18 13l-6 6"></path>
                <path d="M6 13l6 6"></path>
              </svg>
            </div>
          </div>
          <div class="h-full w-px bg-gray-300 "></div>
        </div>
        <div class="pt-1 pb-8">
          <p
            class="mb-2 text-base font-bold text-gray-900 "
          >
            Step 3
          </p>
          <h1 class="text-2xl font-bold text-gray-700">
            Get your CAS (Confirmation of Acceptance for Studies)
          </h1>
          <p class="text-gray-600 ">
            Now you can apply for a student visa
          </p>
        </div>
      </div>

      <div class="flex bg-white p-4 rounded-lg">
        <div class="mr-4 flex flex-col items-center">
          <div>
            <div
              class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900 bg-blue-900"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6 text-white "
              >
                <path d="M5 12l5 5l10 -10"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="pt-1">
          <p class="mb-2 text-xl font-bold text-gray-900 ">
            Ready!
          </p>
        </div>
        <a class="ml-4 px-4 py-2 bg-primary rounded-lg text-white" href="{{route('apply.now')}}">
          Apply Now
        </a>
      </div>
    </div>
  </section>
  <!--End Stepper-->
  <section class="bg-green-100 ">
    <div
      class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          Document checklist
        </h1>
        <p
          class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-2 md:text-lg lg:text-xl "
        >
          For a complete application, you need to send a few extra documents
          with your application form. These include:
        </p>

        <div>
          <div class="flex gap-5 mt-6 item-center">
            <i class="text-3xl fa-regular fa-circle-check"></i>
            <p class="text-lg">
              copies of your passport and any previous UK visas 
            </p>
          </div>
          <div class="flex gap-5 mt-6 item-center">
            <i class="text-3xl fa-regular fa-circle-check"></i>
            <p class="text-lg">
              UKVI-approved Secure English Language Test (SELT) certificate or
              accepted equivalent 
            </p>
          </div>
          <div class="flex gap-5 mt-6 item-center">
            <i class="text-3xl fa-regular fa-circle-check"></i>
            <p class="text-lg">
              academic transcripts (plus certified translations if the
              original transcripts are not in English) 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white ">
    <div
      class="grid max-w-screen-xl px-4 py-8 lg:py-20 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12"
    >
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          Support at Every Step
        </h1>
        <p
          class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-2 md:text-lg lg:text-xl "
        >
          You don’t need to feel nervous about applying. We are here to help
          and, no matter your educational background, we will support you in
          finding a study option that suits you. 
        </p>
      </div>
    </div>
    <div class="h-auto rounde flex flex-col justify-center bg-white">
      <!-- Themes: blue, purple and teal -->
      <div data-theme="teal" class="mx-auto mb-8 max-w-7xl">
        <h2 class="sr-only">Featured case study</h2>
        <section class="font-sans text-black">
          <div
            class="[ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]"
          >
            <div
              class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60"
            >
              <div class="h-full">
                <article class="h-full">
                  <div class="h-full">
                    <img
                      class="h-full object-cover rounded-lg"
                      src="https://www.yorku.ca/laps/sosc/wp-content/uploads/sites/216/2021/01/DecisionsPetitions538x303.jpg"
                      width="733"
                      height="412"
                      alt='""'
                      typeof="foaf:Image"
                    />
                  </div>
                </article>
              </div>
            </div>
            <div class="p-6 bg-blue-100 rounded-lg">
              <div class="leading-relaxed">
                <h1
                  class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-3xl "
                >
                  "My advisor showed genuine interest in my progress and
                  admission, so I knew that studying with Kaplan would be the
                  right choice — and it was!"
                </h1>
                <p class="mt-4 font-bold text-lg">Kayode from Turkey</p>
                <p class="font-semibold text-lg">University of Liverpool</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <section class="bg-blue-100 ">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
      <div class="mr-auto place-self-center">
        <h1
          class="max-w-7xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
        >
          Important dates
        </h1>
        <p
          class="max-w-7xl mb-6 font-medium text-gray-500 lg:mb-2 md:text-lg lg:text-xl "
        >
          There are multiple intakes each year, giving you the flexibility to
          decide when to start your pathway course. We recommend that you
          apply at least a few months in advance of when you want to start, so
          that you have enough time to arrange your visa and accommodation.
        </p>
        <p
          class="max-w-7xl mb-6 font-medium text-gray-500 lg:mb-2 md:text-lg lg:text-xl "
        >
          We also recommend that you enrol on the first day of your intake, or
          as close to this as possible, to take full advantage of Welcome Week
          or orientation activities before teaching starts. We do, however,
          have flexible enrolment periods for students who arrive a little
          later.
        </p>
      </div>
      <div>
        <h1 class="text-4xl font-bold mt-12 mb-8">Spring 2024 Intake</h1>
        <div class="bg-gray-100">
          <div class="container mx-auto mt-8 rounded-lg">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-4 text-xl border border-gray-400">
                    Date
                  </th>
                  <th
                    class="px-4 text-left text-xl border border-gray-400 py-4"
                  >
                    What's happening?
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    22 April
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of final Spring enrolment for 2024 at most UK
                    colleges (until 13 May)
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h1 class="text-4xl font-bold mt-12 mb-8">Summer 2024 intake</h1>
        <div class="bg-gray-100">
          <div class="container mx-auto mt-8 rounded-lg">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-4 text-xl border border-gray-400">
                    Date
                  </th>
                  <th
                    class="px-4 text-left text-xl border border-gray-400 py-4"
                  >
                    What's happening?
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    7 May
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for May 2024 intake for Kaplan digital
                    pathway courses (until 27 May)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    3 June
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for June 2024 intake at all
                    participating UK colleges (until 24 June)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    17 June
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for June 2024 intake for Kaplan digital
                    pathway courses (until 8 July)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    15 July
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for July 2024 intake at all
                    participating UK colleges (until 5 August)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    29 July
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for July 2024 intake for Kaplan digital
                    pathway courses (until 19 August)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    29 July
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for July 2024 intake at the University
                    of York International Pathway College (until 12 August)
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h1 class="text-4xl font-bold mt-12 mb-8">Autumn 2024 intake</h1>
        <div class="bg-gray-100">
          <div class="container mx-auto mt-8 rounded-lg">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-4 text-xl border border-gray-400">
                    Date
                  </th>
                  <th
                    class="px-4 text-left text-xl border border-gray-400 py-4"
                  >
                    What's happening?
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    9 September
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for September 2024 intake at most UK
                    colleges (until 21 October)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    9 September
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for the University of Bristol
                    International Foundation Programme (until 20 September)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    9 September
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for September 2024 intake for Kaplan
                    digital pathway courses (until 30 September)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    16 September
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for September 2024 intake at the
                    University of York International Pathway College (until 30
                    September)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    23 September
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for September 2024 intake for the
                    University of Birmingham foundation pathways (until 14
                    October)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    21 October
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for October 2024 intake at most UK
                    colleges and for digital pathways courses (until 11
                    November)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    28 October
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for October 2024 intake at the
                    University of York International Pathway College (until 11
                    November)
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h1 class="text-4xl font-bold mt-12 mb-8">Spring 2025 Intake</h1>
        <div class="bg-gray-100">
          <div class="container mx-auto mt-8 rounded-lg">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-4 text-xl border border-gray-400">
                    Date
                  </th>
                  <th
                    class="px-4 text-left text-xl border border-gray-400 py-4"
                  >
                    What's happening?
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    2 January
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for January 2025 intake for Kaplan
                    digital pathway courses (until 20 January)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    6 January
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for main Spring 2025 intake at most UK
                    colleges (until 3 February)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    6 January
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for Spring 2025 intake at the
                    University of York International Pathway College (until 20
                    January)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    17 February
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for mid-Spring 2025 intake for Kaplan
                    digital pathway courses (until 10 March)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    24 February
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for mid-Spring 2025 intake at most UK
                    colleges (until 17 March)
                  </td>
                </tr>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                    22 April
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                    Start of enrolment for final Spring 2025 intake at most UK
                    colleges (until 12 May)
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h1 class="text-4xl font-bold mt-12 mb-8">Summer 2025 intake</h1>
        <div class="bg-gray-100">
          <div class="container mx-auto mt-8 rounded-lg">
            <table class="table-auto w-full">
              <thead>
                <tr>
                  <th class="px-4 py-4 text-xl border border-gray-400">
                    Date
                  </th>
                  <th
                    class="px-4 text-left text-xl border border-gray-400 py-4"
                  >
                    What's happening?
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                  2 June
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                  Start of enrolment for June 2025 intake at all participating UK colleges (until 23 June)
                  </td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td
                    class="border px-4 text-lg text-center border-dashed border-gray-400 py-3"
                  >
                  14 July
                  </td>
                  <td
                    class="border px-4 border-dashed border-gray-400 text-lg py-2"
                  >
                  Start of enrolment for July 2025 intake at all participating UK colleges (until 4 August)
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
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
                src="https://img.freepik.com/premium-photo/young-muslim-business-woman-wearing-brown-hijab-working-with-laptop-computer-her-house_68339-442.jpg"
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
                  Entry Requirements
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
