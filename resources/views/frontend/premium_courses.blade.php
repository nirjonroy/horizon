@extends('frontend.app')

@section('content')
<section class="bg-white ">
 <section class="py-12 px-4 sm:px-6 lg:px-8" id="courses">
      <div class="max-w-7xl mx-auto">
          <h2 class="text-3xl font-bold text-center mb-2 text-blue-800">
              Premium Courses
          </h2>
          <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
              Enhance your skills with our industry-leading courses taught by experts
          </p>
  
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Course 1 -->
              <a href="{{route('premium-course-details')}}" class="cursor-pointer">
                  <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 h-full flex flex-col">
                      <div class="bg-blue-600 h-2"></div>
                      <div class="p-6 flex-grow">
                          <div class="flex items-center mb-4">
                              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Instructor" 
                                  class="w-12 h-12 rounded-full border-2 border-red-500"/>
                              <div class="ml-4">
                                  <h3 class="text-xl font-bold text-blue-800">
                                      Master in Business
                                  </h3>
                                  <p class="text-gray-600">Prof. John Smith</p>
                              </div>
                          </div>
                          <p class="text-gray-700 mb-6">
                              Comprehensive business management program covering all essential aspects of modern business operations.
                          </p>
                          <div class="flex justify-between items-center mb-3">
                              <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                  8 Weeks
                              </span>
                              <div class="text-lg font-bold text-blue-800">$1,299</div>
                          </div>
                          <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition-colors duration-300">
                              Learn More
                          </button>
                      </div>
                  </div>
              </a>
  
              <!-- Course 2 -->
              <a href="{{route('premium-course-details')}}" class="cursor-pointer">
                  <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 h-full flex flex-col">
                      <div class="bg-red h-2"></div>
                      <div class="p-6 flex-grow">
                          <div class="flex items-center mb-4">
                              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Instructor" 
                                  class="w-12 h-12 rounded-full border-2 border-blue-500"/>
                              <div class="ml-4">
                                  <h3 class="text-xl font-bold text-blue-800">
                                      Applied Business Studies
                                  </h3>
                                  <p class="text-gray-600">Dr. Sarah Johnson</p>
                              </div>
                          </div>
                          <p class="text-gray-700 mb-6">
                              Practical approach to business studies with real-world applications and case studies from top companies.
                          </p>
                          <div class="flex justify-between items-center mb-3">
                              <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                  6 Weeks
                              </span>
                              <div class="text-lg font-bold text-red">$999</div>
                          </div>
                          <button class="w-full bg-red hover:bg-red text-white font-medium py-2 px-4 rounded transition-colors duration-300">
                              Learn More
                          </button>
                      </div>
                  </div>
              </a>
  
              <!-- Course 3 -->
              <a href="{{route('premium-course-details')}}" class="cursor-pointer">
                  <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 h-full flex flex-col">
                      <div class="bg-blue-600 h-2"></div>
                      <div class="p-6 flex-grow">
                          <div class="flex items-center mb-4">
                              <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Instructor" 
                                  class="w-12 h-12 rounded-full border-2 border-red-500"/>
                              <div class="ml-4">
                                  <h3 class="text-xl font-bold text-blue-800">
                                      Brian Tracy Global Mastermind
                                  </h3>
                                  <p class="text-gray-600">Brian Tracy</p>
                              </div>
                          </div>
                          <p class="text-gray-700 mb-6">
                              World-renowned program for business leaders and entrepreneurs to maximize productivity and success.
                          </p>
                          <div class="flex justify-between items-center mb-3">
                              <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                  12 Weeks
                              </span>
                              <div class="text-lg font-bold text-blue-800">$1,899</div>
                          </div>
                          <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition-colors duration-300">
                              Learn More
                          </button>
                      </div>
                  </div>
              </a>
          </div>
      </div>
  </section>
  </section>
@endsection
