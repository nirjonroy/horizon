@extends('frontend.app')

@section('content')
<!--Banner Section-->
<div
class="h-auto rounde flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-white"
>
<div data-theme="teal" class="mx-auto max-w-7xl">
  <h2 class="sr-only">Featured case study</h2>
  <section class="font-sans text-black">
    <div
      class="mt-24 [ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]"
    >
      <div
        class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60"
      >
        <div class="h-full">
          <article class="h-full">
            <div class="h-full">
              <img
                class="h-full object-cover rounded-lg"
                src="https://englobaleducation.co.uk/wp-content/uploads/2024/02/In-Demand-UK-Degrees-Set-to-Promising-Career-Paths-in-2024.jpg"
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
            class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
          >
            Getting you ready for the world of work
          </h1>
          <p class="mt-4 text-lg mb-4">
            An international education can help you stand out to employers
            — it’s a great way to give yourself a career advantage. At our
            international study centres and partner universities, you’ll
            finish your studies feeling ready to succeed.
          </p>

          <p>
            <a
              class=" bg-primary text-white px-4 py-2"
              href="https://inviqa.com/cxcon-experience-transformation"
              >Explore this event</a
            >
          </p>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

<!--End Banner Section-->
<section class="bg-gray-200  ">
<div
  class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
>
  <div class="mr-auto place-self-center lg:col-span-7">
    <h1
      class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
    >
      Why is career preparation important?
    </h1>
    <p class="text-lg pt-4">
      The global job market is highly competitive, and it’s not always
      easy to stand out among your fellow candidates. Studying abroad
      could give you an edge.
    </p>

    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
        When you study overseas, you’ll gain valuable international
        experience that employers really value.
      </p>
    </div>
    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
        You can also build a global network of contacts that will come in
        useful once you graduate.
      </p>
    </div>
    <p class="text-lg mt-4">
      All of this, and the other career skills you’ll learn on your degree
      preparation course and/or degree, will help you to improve your
      employability!
    </p>
  </div>
</div>
</section>
<!--Testmonial Section-->

<div class="flex items-center justify-between h-full w-full absolute z-0">
<div class="w-1/3 bg-white  h-full"></div>
<div class="w-4/6 ml-16 bg-gray-100 h-full"></div>
</div>
<div class="xl:px-20 px-8 py-10 2xl:mx-auto 2xl:container relative z-40">
<h1
  class="hidden xl:block mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
>
  What our Students<br />
  saying
</h1>
<h1
  class="max-w-2xl mb-4 text-4xl xl:hidden font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
>
  What our Students are saying
</h1>

<div class="slider">
  <div class="slide-ana">
    <div class="flex" style="transform: translateX(-100%)">
      <div class="mt-14 md:flex">
        <div class="relative lg:w-1/2 sm:w-96 xl:h-96 h-80">
          <img
            src="https://media.istockphoto.com/id/1438437093/photo/young-adult-woman-in-studio-shots-making-facial-expressions-and-using-fingers-and-hands.webp?b=1&s=170667a&w=0&k=20&c=s64r95WyPrrg3nEc8X33TqYKIyJiyrj2tu4dRUds_-Y="
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
              class="max-w-2xl mb-4 text-2xl font-bold tracking-tight leading-none md:text-3xl xl:text-5xl  italic"
            >
              "Studying abroad was a life-changing experience for me — it
              made me who I am today"
            </h1>
          </div>
          <div class="md:mt-0 mt-8">
            <p
              class="text-base lg:text-lg font-semibold leading-4 text-gray-800 "
            >
              Natalie from Malaysia, University of Brighton graduate
            </p>
            <p
              class="lg:text-lg text-base leading-4 mt-2 mb-4 text-gray-600 "
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
            src="images/student/1.jpg"
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
              class="text-3xl lg:text-4xl font-bold xl:leading-loose text-gray-800  italic"
            >
              "Living in a foreign country transformed me in ways I never
              imagined — it shaped the person I've become"
            </h1>
          </div>
          <div class="md:mt-0 mt-8">
            <p
              class="text-base lg:text-lg font-semibold leading-4 text-gray-800 "
            >
              Natalie from Malaysia, University of Brighton graduate
            </p>
            <p
              class="lg:text-lg text-base leading-4 mt-2 mb-4 text-gray-600 "
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
<section class="bg-gray-200 pt-40 ">
<div
  class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
>
  <div class="mr-auto place-self-center lg:col-span-7">
    <h1
      class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
    >
      Employability on our courses
    </h1>


    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
        The opportunity to engage with professional networks.
      </p>
    </div>
    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
          The chance to earn professional certifications
      </p>
    </div>
    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
          Options to take an online internship
      </p>
    </div>
    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
          Help building a portfolio of your skills and achievements
      </p>
    </div>
    <div class="flex gap-5 mt-6 item-center">
      <i class="text-3xl fa-regular fa-circle-check"></i>
      <p class="text-lg">
          The ability to take on a part-time job while you study
      </p>
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
      src="https://t4.ftcdn.net/jpg/03/57/73/05/360_F_357730597_ipILQnMwosSO0KyLILfYeCQNCCn2dBnB.jpg"
      alt=""
      class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7"
    />
    <div class="p-6 space-y-2 lg:col-span-5 bg-white rounded-md">
      <h3
        class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline"
      >
      My course helped me get a job at a 5-star hotel
      </h3>
      <span class="text-xs text-black">February 19, 2023</span>
      <p>
        Original and inclusive for 140 years, we’re a truly inspirational
        place to learn and research. We’re also a place where students
        develop a rich world view, as well as the skills and confidence to
        thrive in today’s connected world. Liverpool is a city unlike any
        other. Part tourist mecca, for Beatles’ lovers, football fans and
        culture vultures alike. Part creative hotspot,
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
        class="object-cover w-full rounded h-44 "
        src="https://st3.depositphotos.com/3591429/19003/i/450/depositphotos_190033948-stock-photo-group-islamic-women-looking-smartphone.jpg"
      />
      <div class="p-6 space-y-2">
        <h3
          class="text-2xl font-semibold group-hover:underline group-focus:underline"
        >
        What are employability skills and why are they important?
        </h3>
        <span class="text-xs ">January 21, 2021</span>
        <p>
          Mei ex aliquid eleifend forensibus, quo ad dicta apeirian
          neglegentur, ex has tantas percipit perfecto. At per tempor
          albucius perfecto, ei probatus consulatu patrioque mea, ei
          vocent delicata indoctum pri.
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
        class="object-cover w-full rounded h-44 "
        src="https://www.kaplanpathways.com/tachyon/sites/4/2023/05/places-to-live-blog-header-Br5699.jpg?resize=1336%2C442&crop_strategy=smart&zoom=1"
      />
      <div class="p-6 space-y-2">
        <h3
          class="text-2xl font-semibold group-hover:underline group-focus:underline"
        >
        Career Focus: What are Life and Career Skills at Kaplan Pathways?
        </h3>
        <span class="text-xs ">January 22, 2021</span>
        <p>
          Mei ex aliquid eleifend forensibus, quo ad dicta apeirian
          neglegentur, ex has tantas percipit perfecto. At per tempor
          albucius perfecto, ei probatus consulatu patrioque mea, ei
          vocent delicata indoctum pri.
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
        class="object-cover w-full rounded h-44 "
        src="https://www.kaplanpathways.com/tachyon/sites/4/2023/10/new-york-student-hinako-5311788202.jpg?resize=400%2C225&crop_strategy=smart&zoom=1"
      />
      <div class="p-6 space-y-2">
        <h3
          class="text-2xl font-semibold group-hover:underline group-focus:underline"
        >
          5 tips for living in New York City
        </h3>
        <span class="text-xs ">January 23, 2021</span>
        <p>
          Mei ex aliquid eleifend forensibus, quo ad dicta apeirian
          neglegentur, ex has tantas percipit perfecto. At per tempor
          albucius perfecto, ei probatus consulatu patrioque mea, ei
          vocent delicata indoctum pri.
        </p>
      </div>
    </a>
  </div>
</div>
</section>
<!--End New at Horizons Unlimited-->
<section class="bg-gray-200   ">
  <div
    class="max-w-7xl px-4 py-8 mx-auto"
  >
    <div class="mr-auto place-self-center lg:col-span-7">
      <h1
        class=" mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "
      >
      Gaining work experience
      </h1>
      <p class="text-lg pt-4 pb-8">
          As well as all the employability skills embedded into our degree preparation courses, many degrees now offer the option to add up to a year of work experience to your study programme. Plus, post-study work visas mean there is the possibility to stay in your study destination for up to three years after graduating to gain further work experience.
      </p>

      <div class="flex flex-col lg:flex-row  w-full justify-between items-center ">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
              <img
                class="w-full h-60"
                src="https://st.depositphotos.com/1075946/4132/i/450/depositphotos_41329025-stock-photo-students-with-teacher.jpg"
                alt="Sunset in the mountains"
              />
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Internship on Horizons courses</div>
                <p class="text-gray-700 text-base">
                  If you’re taking a degree preparation course in the UK, you might have the option to add an integrated online internship to your course.

This will give you relevant experience working at a company related to your career ambitions
                </p>
                <a href="university-liverpool.html">

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
                src="https://i0.wp.com/mvslim.com/wp-content/uploads/2015/10/218977bcc94d897ee8ae214f66c15bb3.jpg?resize=710%2C473"
                alt="Sunset in the mountains"
              />
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Graduate Route Visa</div>
                <p class="text-gray-700 text-base">
                  International students in the UK now have the option to stay in the UK for up to two years after graduating from university to live and work.

                  It’s a fantastic opportunity to get work experience in the UK.
                </p>
                <a href="university-liverpool.html">

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
                src="https://media.istockphoto.com/id/1370858711/photo/portrait-of-confident-young-middle-eastern-woman-smiling-and-looking-at-camera-in-coworking.jpg?s=612x612&w=0&k=20&c=wwwY_uNnOC28sinWrupt3pNtbUL6xwVOslFvL2-XKg8="
                alt="Sunset in the mountains"
              />
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Optional Practical Training</div>
                <p class="text-gray-700 text-base">
                  Optional Practical Training, often referred to as OPT, allows international students to live and work in the USA for one to three years after graduating from university.
                </p>
                <a href="university-liverpool.html">

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
@endsection
