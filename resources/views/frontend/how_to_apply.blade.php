@extends('frontend.app')

@section('content')
   <!--End Navbar-->
   <section class="bg-white pt-20 lg:pt-40 ">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center  lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">How to apply</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">Applying to study abroad is very exciting, but it can be a bit intimidating too. That’s why we’ll support you at every step of the way, and make the application process as simple as possible. </p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <div class="flex justify-start item-center">

                <a href="{{route('apply.now')}}" class="inline-flex items-center justify-center px-5 bg-primary py-3 text-base font-medium text-center text-white border border-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100  ">
                    Apply Now
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://tsrmatters.com/wp-content/uploads/2019/09/applying.jpg" alt="mockup">
        </div>
    </div>
</section>
<!--Stepper -->
<section class="bg-blue-100 py-10">
    <div class="p-4 max-w-2xl mx-auto ">

        <h1 class="text-center mb-16 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl ">Our simple application process
        </h2>

        <div class="flex bg-white p-4 rounded-lg">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-blue-800 ">
                            <path d="M12 5l0 14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg></div>
                </div>
                <div class="h-full w-px bg-gray-300 "></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-base font-bold text-gray-900 ">Step 1</p>
                <h1 class="text-2xl font-bold text-gray-700">Choose your Degree</h1>
                <p class="text-gray-600 ">Our friendly advisors can help you explore your options.</p>
                <a href="#" class="mt-4 underline text-gray-600 text-xl font-bold">Find a degree</a>
            </div>
        </div>
        <div class="flex bg-white p-4 rounded-lg">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-blue-800 ">
                            <path d="M12 5l0 14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg></div>
                </div>
                <div class="h-full w-px bg-gray-300 "></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-base font-bold text-gray-900 ">Step 2</p>
                <h1 class="text-2xl font-bold text-gray-700">Submit an application</h1>
                <p class="text-gray-600 ">You’ll need to include any relevant supporting documents.</p>
                <a href="#" class="mt-4 underline text-gray-600 text-xl font-bold">Application Process</a>
            </div>
        </div>


        <div class="flex bg-white p-4 rounded-lg">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-blue-800 ">
                            <path d="M12 5l0 14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg></div>
                </div>
                <div class="h-full w-px bg-gray-300 "></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-base font-bold text-gray-900 ">Step 3</p>
                <h1 class="text-2xl font-bold text-gray-700">Receive an offer letter or decision</h1>
                <p class="text-gray-600 ">This may be a conditional or unconditional offer or an admission decision.</p>

            </div>
        </div>


        <div class="flex bg-white p-4 rounded-lg">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-blue-800 ">
                            <path d="M12 5l0 14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg></div>
                </div>
                <div class="h-full w-px bg-gray-300 "></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-base font-bold text-gray-900 ">Step 4</p>
                <h1 class="text-2xl font-bold text-gray-700">Accept your offer and obtain a visa</h1>
                <p class="text-gray-600 ">You’ll need to pay a deposit to study, and allow plenty of time for the visa process.</p>
                <a href="#" class="mt-4 underline text-gray-600 text-xl font-bold">Visa support</a>
            </div>
        </div>
        <div class="flex bg-white p-4 rounded-lg">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-blue-800 ">
                            <path d="M12 5l0 14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg></div>
                </div>
                <div class="h-full w-px bg-gray-300 "></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-base font-bold text-gray-900 ">Step 5</p>
                <h1 class="text-2xl font-bold text-gray-700">Complete your pre-arrival tasks and travel to your study destination</h1>
                <p class="text-gray-600 ">Arrange your housing, book your flights and start your adventure abroad!</p>
                <a href="#" class="mt-4 underline text-xl font-bold text-gray-500">Pre-arrival support</a>
            </div>
        </div>


        <div class="flex bg-white p-4 rounded-lg">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900 bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-white ">
                            <path d="M5 12l5 5l10 -10"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="pt-1 ">
                <p class="mb-2 text-xl font-bold text-gray-900 ">Ready!</p>
            </div>
            <a class="ml-4 px-4 py-2 bg-primary rounded-lg text-white " href="{{route('apply.now')}}">Apply Now</a>
        </div>


    </div>
</section>
<!--End Stepper-->

<!-- ====== Blog Section Start -->
<section class="bg-gray-100">
<div class="text-center max-w-7xl mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
  <h1 class="mb-4 text-4xl font-extrabold  pt-20 tracking-tight leading-none md:text-5xl xl:text-5xl ">
    Things to consider when applying
  </h1>


</div>
 <div class="container max-w-7xl mx-auto">
    <div class="flex flex-wrap justify-center ">

    </div>
    <div class="flex flex-wrap ">
       <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="max-w-[370px] bg-white p-4 rounded-lg mx-auto mb-10">
             <div class="rounded overflow-hidden mb-8">
                <img
                   src="https://kaplan-prod.altis.cloud/tachyon/sites/4/2023/01/Phone-Sh683237059.jpg?resize=1440%2C961&zoom=1"
                   alt="image"
                   class="w-full h-60"
                   />
             </div>
             <div>

                <h3>
                   <a
                      href="{{route('fees.cost')}}"
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
                      Fees and costs
                   </a>
                </h3>
                <p class="text-base text-body-color">
                    Some fees, courses and degrees are more expensive than others, but this brief overview can give you an idea of what to expect.
                </p>
             </div>
          </div>
       </div>


       <div class="w-full md:w-1/2 lg:w-1/3 px-4">
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
                      Entry requirements
                   </a>
                </h3>
                <p class="text-base text-body-color">
                    In order for your application to be accepted, you’ll need to meet the entry requirements for your chosen course or degree.
                </p>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- ====== Blog Section End -->
@endsection
