@extends('frontend.app')

@section('content')

<section>
    <div class="bg-gray-100 ">
      <!-- Author: FormBold Team -->
      <!-- Learn More: https://formbold.com -->
      <div class="formbold-form-wrapper">
        <img src="https://t4.ftcdn.net/jpg/00/27/89/91/360_F_27899168_MFvJWGLtGlIJw2xBJO1jCHsbQJmr9qFM.jpg">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('apply.form')}}" method="POST">
            @csrf
          <div class="formbold-input-group">
            <label for="name" class="font-bold formbold-form-label"> Given name(s) </label>
            <input
              type="text"
              name="first_name"
              id="name"
              placeholder="Enter your name"
              class="formbold-form-input"
            />
          </div>
          <div class="formbold-input-group">
            <label for="name" class="font-bold  formbold-form-label"> Surname/family name(s) </label>
            <input
              type="text"
              name="surname"
              id="name"
              placeholder="Enter your Surname"
              class="formbold-form-input"
            />
          </div>

          <div class="formbold-input-group font-bold">
            <label for="email" class="formbold-form-label"> Email </label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter your email"
              class="formbold-form-input"
            />
          </div>



          <div class="formbold-input-group">
            <label class="font-bold formbold-form-label">Nationality</label>
            <input type="text" name="nationality" id="nationality" class="formbold-form-input">
            <!--<select class="form-select country" id="primaryNationality" aria-label="Default select example" onchange="updateNationality()">-->
            <!--    <option selected>Select Nationality</option>-->
            <!--</select>-->
        </div>

          <div class="formbold-input-radio-wrapper">
            <label for="ans" class="font-bold formbold-form-label">
              Do you hold any other nationalities?
            </label>

            <div class="formbold-radio-flex">
              <div class="formbold-radio-group">
                <label class="formbold-radio-label">
                  <input
                    class="formbold-input-radio"
                    type="radio"
                    name="ans"
                    id="ans"
                  />
                  Yes
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>

              <div class="formbold-radio-group">
                <label class="formbold-radio-label">
                  <input
                    class="formbold-input-radio"
                    type="radio"
                    name="ans"
                    id="ans"
                  />
                  No
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>

              <div class="formbold-input-group">
                <label class="font-bold formbold-form-label">
                    Nationality
                </label>
                <input type="text" name="nationality" id="nationality" class="formbold-form-input">
                <!--<select class="form-select country" aria-label="Default select example" onchange="">-->
                <!--    <option selected>Select Nationality</option>-->
                <!--</select>-->
                <input type="text" name="nationality_other" id="nationality_other" placeholder="Other Nationality">
            </div>

            </div>
          </div>

          <h1 class="text-2xl font-bold my-10">Course and Degree</h1>

          <div class="formbold-input-radio-wrapper">
            <label for="ans" class="font-bold formbold-form-label">
              Level of study
            </label>

            <div class="formbold-radio-flex">
              <div class="formbold-radio-group">
                <label class="formbold-radio-label">
                  <input
                    class="formbold-input-radio"
                    type="radio"
                    name="course_and_degree"
                    id="ans"
                    value="Undergraduate"
                  />
                  Undergraduate (pathway to a bachelor’s degree)
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>

              <div class="formbold-radio-group">
                <label class="formbold-radio-label">
                  <input
                    class="formbold-input-radio"
                    type="radio"
                    name="course_and_degree"
                    id="ans"
                    value="Postgraduate"

                  />
                  Postgraduate (pathway to a master’s degree)
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>
              <div class="formbold-input-group">
                <label class="formbold-form-label font-bold">
                  Subject of Interest
                </label>

                <select class="formbold-form-select" name="subject_of_interest" id="occupation">
                  <option >Please Select</option>
                  <option value="Arts and Design">Arts and Design</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Medical">Medical</option>
                  <option value="Business/Commerce">Business</option>

                </select>
              </div>
              <div class="formbold-input-group">
                <label class="formbold-form-label font-bold">
                  Select University
                </label>
                @php
                    $universities = DB::table('where_to_studies')->where('is_done', 1)->get();
                @endphp
                <select class="formbold-form-select" name="course_name" id="occupation">
                  <option >Please Select</option>
                  @foreach ($universities as $item)
                  <option value="{{$item->name}}">{{$item->name}}</option>
                  @endforeach

                  

                </select>
              </div>
              <div class="formbold-input-group">
                <label class="formbold-form-label font-bold">
                  Pathway course preferred start date
                </label>

                <select class="formbold-form-select" name="preferred_session" id="occupation">
                  <option >Please Select</option>
                  <option value="Autumn ( September - November )">Autumn ( September - November ) </option>
                  <option value="Spring ( January - April )">Spring ( January - April ) </option>
                  <option value="Summer ( May - July )">Summer ( May - July ) </option>

                </select>
              </div>
          <div>
            <label for="message" class="formbold-form-label">
              Any comments or suggestions
            </label>
            <textarea
              rows="6"
              name="comments"
              id="message"
              placeholder="Type here..."
              class="formbold-form-input"
            ></textarea>
          </div>

          <button class="formbold-btn">Submit</button>
        </form>
      </div>
    </div>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: 'Inter', sans-serif;
      }
      .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 48px;
      }

      .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 570px;
        width: 100%;
        background: white;
        padding: 40px;
      }

      .formbold-form-img {
        margin-bottom: 45px;
      }

      .formbold-input-group {
        margin-bottom: 18px;
      }

      .formbold-form-select {
        width: 100%;
        padding: 12px 22px;
        border-radius: 5px;
        border: 1px solid #dde3ec;
        background: #ffffff;
        font-size: 16px;
        color: #536387;
        outline: none;
        resize: none;
      }

      .formbold-input-radio-wrapper {
        margin-bottom: 25px;
      }
      .formbold-radio-flex {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }
      .formbold-radio-label {
        font-size: 14px;
        line-height: 24px;
        color: #07074d;
        position: relative;
        padding-left: 25px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .formbold-input-radio {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }
      .formbold-radio-checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #ffffff;
        border: 1px solid #dde3ec;
        border-radius: 50%;
      }
      .formbold-radio-label
        .formbold-input-radio:checked
        ~ .formbold-radio-checkmark {
        background-color: #6a64f1;
      }
      .formbold-radio-checkmark:after {
        content: '';
        position: absolute;
        display: none;
      }

      .formbold-radio-label
        .formbold-input-radio:checked
        ~ .formbold-radio-checkmark:after {
        display: block;
      }

      .formbold-radio-label .formbold-radio-checkmark:after {
        top: 50%;
        left: 50%;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ffffff;
        transform: translate(-50%, -50%);
      }

      .formbold-form-input {
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #dde3ec;
        background: #ffffff;
        font-weight: 500;
        font-size: 16px;
        color: #07074d;
        outline: none;
        resize: none;
      }
      .formbold-form-input::placeholder {
        color: #536387;
      }
      .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
      }
      .formbold-form-label {
        color: #07074d;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
      }

      .formbold-btn {
        text-align: center;
        width: 100%;
        font-size: 16px;
        border-radius: 5px;
        padding: 14px 25px;
        border: none;
        font-weight: 500;
        background-color: #07074d;
        color: white;
        cursor: pointer;
        margin-top: 25px;
      }
      .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
      }
    </style>
   </section>


   <script>
    var config = {
        cUrl: 'https://api.countrystatecity.in/v1/countries',
        ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA=='
    };

    function loadCountries(selectElementId) {
        let apiEndPoint = config.cUrl;
        let countrySelect = document.getElementById(selectElementId);

        console.log('Loading countries for:', selectElementId); // Debugging line

        fetch(apiEndPoint, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                console.log('Data received:', data); // Debugging line
                data.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.iso2;
                    option.textContent = country.name;
                    countrySelect.appendChild(option);
                });
                console.log('Countries loaded for:', selectElementId); // Debugging line
            })
            .catch(error => console.error('Error loading countries:', error));
    }

    window.onload = function() {
        loadCountries('primaryNationality');
        loadCountries('secondaryNationality');
    };

    function updateNationality() {
        var primarySelect = document.getElementById('primaryNationality');
        var secondarySelect = document.getElementById('secondaryNationality');
        var nationalityInput = document.getElementById('nationality');
        var otherNationalityInput = document.getElementById('nationality_other');

        var primarySelectedOption = primarySelect.options[primarySelect.selectedIndex].text;
        var secondarySelectedOption = secondarySelect.options[secondarySelect.selectedIndex].text;

        nationalityInput.value = primarySelectedOption;

        if (secondarySelectedOption === "Other Nationality") {
            nationalityInput.value = otherNationalityInput.value;
        } else {
            otherNationalityInput.value = secondarySelectedOption;
        }

        console.log('Primary Nationality Updated:', primarySelectedOption); // Debugging line
        console.log('Secondary Nationality Updated:', secondarySelectedOption); // Debugging line
    }
</script>



@endsection
