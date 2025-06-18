<!-- Professional Single Row Navigation Bar -->
<header class="sticky top-0 border-b border-white z-50 shadow-md bg-primary">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20 lg:h-28">

      <!-- Logo -->
      <div class="flex-shrink-0 w-1/4">
        <a href="{{ route('home.index') }}">
          @php
            $siteInfo = DB::table('site_information')->first();
          @endphp
          <img class="h-20 lg:h-28 w-auto" src="{{ asset($siteInfo->logo) }}" alt="{{ $siteInfo->name }}" loading="lazy">
        </a>
      </div>

      <!-- Navigation Links -->
      <nav class="hidden lg:flex justify-center w-2/4">
        <ul class="flex space-x-6 items-center text-[12px] font-medium uppercase tracking-wider text-white">
          <!-- Where to Study Dropdown -->
          <li class="relative group">
            <button class="flex items-center hover:text-gray-200 transition">
              WHERE TO STUDY
              <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute left-0 mt-2 w-64 bg-[#FFC55A] rounded-md shadow-lg  ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-10">
              <div>
                @php
                  $wheretoStudies = DB::table('where_to_studies')->get();
                @endphp
                @foreach ($wheretoStudies as $study)
                  <a href="{{ route('where.to.study', $study->id) }}" class="block px-4 py-3  text-sm text-gray-900 hover:bg-gray-100 border-b border-gray-100">
                    {{ $study->name }}
                  </a>
                @endforeach
              </div>
            </div>
          </li>

          <li><a href="{{ route('premium-courses') }}" class="hover:text-gray-200 transition">Premium Courses</a></li>
          <li><a href="{{ route('who_we_are') }}" class="hover:text-gray-200 transition">Who We Are</a></li>
          <li><a href="{{ route('all.blogs') }}" class="hover:text-gray-200 transition">Blogs</a></li>
          <li><a href="{{ route('webinner.view') }}" class="hover:text-gray-200 transition">Webinars</a></li>
        </ul>
      </nav>

      <!-- Action Buttons -->
      <div class="hidden lg:flex justify-end w-1/4 space-x-4">
        <a href="{{ route('consultation.step1') }}" class="border border-white px-2 py-1 rounded-md text-[12px] font-medium text-white hover:bg-white hover:text-primary transition">
          Book Consultation
        </a>
        <a href="{{ route('apply.now') }}" class="px-2 py-1  text-[12px] bg-red hover:bg-red-700 text-white font-medium rounded-md transition">
          Apply Now
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="lg:hidden flex items-center space-x-4">
         <a href="{{ route('consultation.step1') }}" class="border border-white px-2 py-2 rounded-md text-[10px] font-medium text-white hover:bg-white hover:text-primary transition">
          Book Consultation
        </a>
        <a href="{{ route('apply.now') }}" class="px-2 py-2 bg-red hover:bg-red-700 text-white text-[10px] font-bold rounded-md transition">
          Apply Now
        </a>
        <button class=" bg-[#FFC55A] p-1 text-primary rounded-md  focus:outline-none" aria-label="Toggle menu" id="mobile-menu-button">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

 
  <!-- Mobile Menu -->
  <div class="lg:hidden hidden bg-primary" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <div class="relative">
        <button class="w-full text-left text-white px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" id="mobile-dropdown-button">
          Where to Study
          <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="hidden pl-4 bg-[#FFC55A] rounded-md text-black" id="mobile-dropdown">
          @foreach ($wheretoStudies as $study)
            <a href="{{ route('where.to.study', $study->id) }}" class="block px-4 py-3 font-semibold text-sm text-gray-700 hover:bg-gray-100 border-b border-gray-100">
              {{ $study->name }}
            </a>
          @endforeach
        </div>
      </div>
      
      <a href="{{ route('premium-courses') }}" class="block px-3 py-2 text-white hover:bg-primary-dark rounded-md text-base font-medium">
        Premium Courses
      </a>
      
      <a href="{{ route('who_we_are') }}" class="block px-3 py-2 text-white hover:bg-primary-dark rounded-md text-base font-medium">
        Who We Are
      </a>
      
      <a href="{{ route('all.blogs') }}" class="block px-3 py-2 text-white hover:bg-primary-dark rounded-md text-base font-medium">
        Blogs
      </a>
      
      <a href="{{ route('webinner.view') }}" class="block px-3 py-2 text-white hover:bg-primary-dark rounded-md text-base font-medium">
        Webinars
      </a>
      
      
    </div>
  </div>
</header>

<script>
  // Mobile menu toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });

  // Mobile dropdown toggle
  document.getElementById('mobile-dropdown-button').addEventListener('click', function() {
    const dropdown = document.getElementById('mobile-dropdown');
    dropdown.classList.toggle('hidden');
  });
</script>