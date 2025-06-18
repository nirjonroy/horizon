@extends('frontend.app')

@section('content')
<section class="bg-white ">
 <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <!-- Master in Business Details -->
        <div id="master-in-business" class="course-details">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex flex-col md:flex-row justify-between">
                        <div class="md:w-2/3">
                            <h2 class="text-3xl font-bold text-blue-800 mb-4">Master in Business</h2>
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Instructor" 
                                     class="w-16 h-16 rounded-full border-2 border-red-500"/>
                                <div class="ml-4">
                                    <p class="text-gray-600 font-medium">Instructor</p>
                                    <p class="text-xl">Prof. John Smith</p>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-6">
                                This comprehensive program covers all essential aspects of modern business operations, 
                                from strategic planning to financial management and leadership development. You'll gain 
                                practical skills that can be immediately applied in your professional life.
                            </p>
                            <div class="mb-6">
                                <h3 class="text-xl font-semibold text-blue-800 mb-3">What You'll Learn</h3>
                                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                    <li>Advanced business strategy development</li>
                                    <li>Financial analysis and decision making</li>
                                    <li>Leadership and team management</li>
                                    <li>Marketing and brand management</li>
                                    <li>Operations and supply chain optimization</li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:w-1/3 md:pl-8 mt-6 md:mt-0">
                            <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                                <h3 class="text-xl font-semibold text-blue-800 mb-4">Course Details</h3>
                                <div class="space-y-4">
                                    <div>
                                        <p class="text-sm text-gray-500">Duration</p>
                                        <p class="font-medium">8 Weeks</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Effort</p>
                                        <p class="font-medium">6-8 hours per week</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Format</p>
                                        <p class="font-medium">Online + Live Sessions</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Price</p>
                                        <p class="font-medium">$1,299</p>
                                    </div>
                                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded transition-colors duration-300 mt-4">
                                        Enroll Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h3 class="text-xl font-semibold text-blue-800 mb-6">Course Timeline</h3>
                        <div class="space-y-8">
                            <div class="flex">
                                <div class="flex flex-col items-center mr-4">
                                    <div class="w-8 h-8 bg-red rounded-full flex items-center justify-center text-white font-bold">1</div>
                                    <div class="w-px h-full bg-gray-300"></div>
                                </div>
                                <div class="pb-8">
                                    <h4 class="text-lg font-semibold text-gray-800">Week 1-2: Business Foundations</h4>
                                    <p class="text-gray-600 mt-2">
                                        Understanding business models, market analysis, and competitive positioning.
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex flex-col items-center mr-4">
                                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
                                    <div class="w-px h-full bg-gray-300"></div>
                                </div>
                                <div class="pb-8">
                                    <h4 class="text-lg font-semibold text-gray-800">Week 3-4: Financial Mastery</h4>
                                    <p class="text-gray-600 mt-2">
                                        Financial statements analysis, budgeting, and investment decision making.
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex flex-col items-center mr-4">
                                    <div class="w-8 h-8 bg-red rounded-full flex items-center justify-center text-white font-bold">3</div>
                                    <div class="w-px h-full bg-gray-300"></div>
                                </div>
                                <div class="pb-8">
                                    <h4 class="text-lg font-semibold text-gray-800">Week 5-6: Leadership & Strategy</h4>
                                    <p class="text-gray-600 mt-2">
                                        Developing leadership skills and creating winning business strategies.
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex flex-col items-center mr-4">
                                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">4</div>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800">Week 7-8: Capstone Project</h4>
                                    <p class="text-gray-600 mt-2">
                                        Apply all learned concepts to a real-world business challenge.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="#courses" class="text-blue-600 hover:text-blue-800 font-medium">← Back to all courses</a>
            </div>
        </div>

        

       
    </div>
</section>
  </section>
@endsection
