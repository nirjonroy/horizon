@extends('frontend.app')

@section('content')
<style>
    header {
      position: fixed;
      z-index: 1000;
      width: 100%;
      background-color: white;
      transition: background-color 0.3s ease;
    }

    header.scroll {
      background-color: rgb(255, 243, 243);
    }
  </style>
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f6f6ff;
      min-width: 250px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      z-index: 1000;
      border-radius: 5px;
    }

    .dropdown:hover .dropdown-content {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
  </style>

<section class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Left Side Card -->
          <div class="bg-gradient-to-r from-blue-900 to-red-600 text-white p-6 mt-12 lg:mt-0 rounded-lg flex flex-col items-start">
              <h2 class="text-2xl font-semibold mb-4">Appointment for Consultation</h2>
              <div class="flex items-center justify-center gap-2 mb-2">
                  <i class="fa-solid fa-clock"></i>
                  <p class="text-lg">30 Mins</p>
              </div>
              <div class="flex items-center justify-center gap-2">
                  <i class="fa-solid fa-calendar-days"></i>
                  <p class="text-lg font-medium">{{ \Carbon\Carbon::now()->format('D, M d, Y') }}</p>
              </div>
          </div>

          <!-- Right Side -->
          <div>
              <h2 class="text-xl font-semibold mb-4 underline">Select Date & Time</h2>
              <form method="POST" action="{{ route('consultation.step2') }}">
                  @csrf
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <!-- Calendar Section -->
                      <div>
                          <label for="date" class="block text-sm font-medium text-gray-700">Pick a Date</label>
                          <input
                              type="date"
                              id="date"
                              name="date"
                              class="mt-2 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500"
                              min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                              required
                          />
                      </div>
                      <!-- Time Schedule Section -->
                      <div>
                          <p class="text-sm font-medium text-gray-700 mb-2">Available Times</p>
                          <div class="space-y-2">
                              @foreach($timeSlots as $time)
                              <button
                              type="button"
                              onclick="selectTime('{{ $time }}')"
                              data-time="{{ $time }}"
                              class="time-button w-full bg-blue-900 text-white py-2 rounded-lg hover:bg-blue-600"
                          >
                              {{ $time }}
                          </button>
                          
                              @endforeach
                              <input type="text" id="selectedTime" name="time" required />
                          </div>
                      </div>
                  </div>
                  <!-- Time Zone Selection -->
                  <div class="mt-4">
                      <label for="timezone" class="block text-sm font-medium text-gray-700">Select Time Zone</label>
                      <select
                          id="timezone"
                          name="timezone"
                          class="mt-2 w-full border rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500"
                          required
                      >
                          <option value="utc-5">UTC-5: Eastern Time (US & Canada)</option>
                          <option value="utc-6">UTC-6: Central Time (US & Canada)</option>
                          <option value="utc-7">UTC-7: Mountain Time (US & Canada)</option>
                          <option value="utc-8">UTC-8: Pacific Time (US & Canada)</option>
                      </select>
                  </div>
                  <div class="flex justify-end">
                      <button
                          type="submit"
                          class="lg:text-base text-sm bg-[#FF0000] text-white mt-4 px-3 py-2 rounded-md font-bold"
                      >
                          Continue
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>
<script>
  function selectTime(time) {
    document.getElementById('selectedTime').value = time;
    // Add active class for visual feedback
    document.querySelectorAll('.time-button').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`[data-time="${time}"]`).classList.add('active');
}

</script>
@endsection