<!--Footer-->
<section>
    @php
    $siteInfo = DB::table('site_information')->first();
    $wheretoStudies = DB::table('where_to_studies')->get();
    @endphp
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset($siteInfo->logo) }}" as="image" fetchpriority="high">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <footer class="bg-primary text-white">
        <!-- Main Footer Content -->
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-16">
                
                <!-- Company Info - Completely Stable Column -->
                <div class="space-y-6 min-h-[320px] flex flex-col">
                    <div class="h-32 w-32 mx-auto md:mx-0 flex-none">
                        <img 
                            src="{{ asset($siteInfo->logo) }}" 
                            alt="Horizons Unlimited" 
                            class="h-full w-full object-contain"
                            width="128" 
                            height="128"
                            loading="eager"
                            fetchpriority="high"
                            onload="this.style.opacity = 1"
                            style="opacity: 0; transition: opacity 0.3s ease"
                        >
                    </div>
                    
                    <!-- Text with reserved space and font stability -->
                    <p class="text-gray-400 leading-relaxed min-h-[72px] max-w-[300px] mx-auto md:mx-0 flex-none"
                       style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif">
                        <span class="opacity-0 animate-fadeIn">Empowering students to connect with top universities and premium education opportunities worldwide.</span>
                    </p>
                    
                    <!-- Social Media -->
                    <div class="flex space-x-4 mt-auto">
                        <a href="https://www.facebook.com/thehorizonsunlimited" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" width="20" height="20">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/thehorizonsunlimited" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" width="20" height="20">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links - Stable Column -->
                <div class="min-h-[320px] flex flex-col">
                    <h3 class="text-lg font-semibold tracking-wider text-white uppercase mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{route('who_we_are')}}" class="text-gray-400 hover:text-white transition-colors duration-300 block py-1">About Us</a></li>
                        <li><a href="{{route('premium-courses')}}" class="text-gray-400 hover:text-white transition-colors duration-300 block py-1">Premium Courses</a></li>
                        <li><a href="{{route('consultation.step1')}}" class="text-gray-400 hover:text-white transition-colors duration-300 block py-1">Book Consultation</a></li>
                        <li><a href="{{route('apply.now')}}" class="text-gray-400 hover:text-white transition-colors duration-300 block py-1">Apply Now</a></li>
                        <li><a href="{{route('all.blogs')}}" class="text-gray-400 hover:text-white transition-colors duration-300 block py-1">Blogs</a></li>
                    </ul>
                </div>

                <!-- Universities - Stable Column -->
                <div class="min-h-[320px] flex flex-col">
                    <h3 class="text-lg font-semibold tracking-wider text-white uppercase mb-6">Universities</h3>
                    <ul class="space-y-3">
                        @foreach ($wheretoStudies as $study)    
                        <li><a href="{{ route('where.to.study', $study->id) }}" class="text-gray-400 hover:text-white transition-colors duration-300 block py-1">{{ $study->name }}</a></li>
                        @endforeach  
                    </ul>
                </div>

                <!-- Contact Info - Stable Column -->
                <div class="min-h-[320px] flex flex-col">
                    <h3 class="text-lg font-semibold tracking-wider text-white uppercase mb-6">Contact Us</h3>
                    <address class="not-italic text-gray-400 space-y-4">
                        <p class="flex items-start">
                            <svg width="20" height="20" fill="none" stroke="currentColor" class="flex-shrink-0 mt-1 mr-3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>123 Education Ave, Suite 100<br>Boston, MA 02110</span>
                        </p>
                        <p class="flex items-center">
                            <svg width="20" height="20" fill="none" stroke="currentColor" class="flex-shrink-0 mr-3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Imadhaj@horizonsunlimited.com
                        </p>
                        <p class="flex items-center">
                            <svg width="20" height="20" fill="none" stroke="currentColor" class="flex-shrink-0 mr-3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            (833) 33-STUDY
                        </p>
                    </address>
                </div>
            </div>
        </div>

        <!-- Copyright & Legal -->
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-6 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-gray-500 text-center md:text-left mb-2 md:mb-0">
                        &copy; 2025 Horizons Unlimited. All rights reserved.
                    </p>
                    <div class="flex flex-wrap justify-center gap-x-6 gap-y-2">
                        <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors duration-300">Privacy Policy</a>
                        <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors duration-300">Terms of Service</a>
                        <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors duration-300">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>

<style>
    /* Critical CSS for layout stability */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    .animate-fadeIn {
        animation: fadeIn 0.5s ease-out forwards;
        animation-delay: 0.1s;
    }
    footer a, footer button {
        transform: translateZ(0); /* Force hardware acceleration */
    }
</style>

<!-- Load non-critical scripts with defer -->
<script src="{{ asset('frontend/js/navbarToggle.js') }}" defer></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/index.js') }}" defer></script>
<script src="{{ asset('frontend/js/slider.js') }}" defer></script>
<script src="{{ asset('frontend/js/faq.js') }}" defer></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js" defer crossorigin="anonymous"></script>

<!-- Inline critical JS -->
  <script>
  window.addEventListener('load', function () {
    document.querySelector(".content").classList.remove("hidden");
    document.querySelector(".preloader").classList.add("hidden");

    // Stop the rotation animation
    cancelAnimationFrame(animationFrameId);
  });

  const loader = document.getElementById("loader");
  let rotation = 0;
  const rotationSpeed = 3;
  let animationFrameId;

  function rotateLogo() {
    rotation += rotationSpeed;
    loader.style.transform = `rotate(${rotation}deg)`;
    animationFrameId = requestAnimationFrame(rotateLogo);
  }

  rotateLogo();
</script>
  
 

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
      window.onload = function() {
          @if(session('success'))
              Swal.fire({
                  icon: 'success',
                  title: '{{ session('success') }}',
                  showConfirmButton: false,
                  timer: 1500
              });
          @endif
      }
  </script>
  
<!-- Tawk.to Script with optimized loading -->
<script>
window.addEventListener('load', function() {
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6835c4b07d0337190c221477/1is90gkpa';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
}, { once: true });
</script>