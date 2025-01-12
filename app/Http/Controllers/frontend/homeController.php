<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\whereToStudy;
use App\Models\studentInformation;
use App\Models\Blog;
use App\Models\siteInformation;
use App\Models\feesCategory;
use App\Models\contactForm;
use App\Models\onlineFee;
use App\Models\Booking;
use App\Models\internationalStudentLife;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\TimeZone;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationMail;

class homeController extends Controller
{
    public function index(){
        $slider = slider::where('status', 1)->latest()->first();
        $whereToStudies = whereToStudy::where('status', 1)->latest()->get();
        $blogs = Blog::where('homePage', 1)->latest()->limit(6)->get();
         $cover = Blog::where('homePage', 1)
                ->where('cover', 1)
                ->latest()
                ->first();
         $info = siteInformation::first();

                // dd($cover);
        // dd( $whereToStudies );
        return view('frontend.home', compact('slider', 'whereToStudies', 'blogs', 'cover', 'info'));
    }
    public function apply_now(){
        return view('frontend.apply_now_page');
    }

    public function about_us(){
        return view('frontend.about_us');
    }
    public function apply_now_form(Request $request){
         // Validation rules
    $rules = [
        'first_name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'nationality' => '',
        'course_and_degree' => 'required|string|max:255',
        'subject_of_interest' => 'required|string|max:255',
        'course_name' => 'required|string|max:255',
        'preferred_session' => 'required|string|max:255',
        'comments' => 'nullable|string',
    ];

    // Custom error messages
    $messages = [
        'required' => 'The :attribute field is required.',
        'email' => 'The :attribute must be a valid email address.',
        // Add more custom error messages as needed
    ];

    // Validate the request data
    $validatedData = $request->validate($rules, $messages);

    // Create a new instance of the StudentInformation model
    $studentInformation = new studentInformation();

    // Fill the model with validated form data
    $studentInformation->fill($validatedData);

    // Save the model to the database
    $studentInformation->save();

    // Optionally, you can return a response or redirect the user

    return redirect()->back()->with('success', 'Student information saved successfully');
    }

    public function contact_form(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => '',
        ]);

        // Create a new instance of the model and fill it with validated data
        $contactForm = new contactForm();
        $contactForm->fill($validatedData);

        // Save the model instance to the database
        $contactForm->save();
         // Send the email to the user (who submitted the form)
         Mail::to($validatedData['email'])->send(new ContactFormMail($validatedData));

         // Send the email to your email (roynirjon18@gmail.com)
         Mail::to('roynirjon18@gmail.com')->send(new ContactFormMail($validatedData));
 
        // Redirect back with a success message

        return redirect()->back()->with('success', 'Message Sent Successfully');
    }

    public function whereToStudy($id){
        
        
        $studies = whereToStudy::find($id);
        if($studies->is_done == 1){
             $blogs = Blog::where('where_to_study_id', $id)->latest()->limit(6)->get();
        $cover =  Blog::where('where_to_study_id', $id)
             ->where('cover', 1)
             ->latest()
             ->first();

        $categories = feesCategory::whereHas('onlineFees', function($query) use ($id) {
        $query->where('university_id', $id);
    })->with(['onlineFees' => function($query) use ($id) {
        $query->where('university_id', $id);
    }])->get();
         $latest_course = onlineFee::where('university_id', $id)
                                    ->where('recommend', 1)
                                    ->latest()->limit(4)->get();

            //  dd($cover);

        return view('frontend.where_to_study', compact('studies', 'blogs', 'cover', 'categories', 'latest_course'));
        }
        else{
            return view('frontend.commingsoon', compact('studies'));
        }
       
        
    }

    public function onlineStudyOption(){
        $study = whereToStudy::all();
        return view('frontend.online_study_options', compact('study'));
    }
    public function student_life($id){
        $lifes = internationalStudentLife::find($id);
        $blogs = Blog::where('life_style_id', $id)->latest()->limit(6)->get();
        $cover =  Blog::where('life_style_id', $id)
             ->where('cover', 1)
             ->latest()
             ->first();
        return view('frontend.life_style', compact('lifes', 'blogs', 'cover'));
    }
    public function how_to_apply(){
        return view('frontend.how_to_apply');
    }
    public function fees_cost(){
        return view('frontend.fees_cost');
    }
    public function entry_requirement(){
        return view('frontend.entry_requirement');
    }

    public function application_process(){
        return view('frontend.application_process');
    }

    public function accommodation(){
        return view('frontend.accommodation');
    }
    public function support_study_abroad(){
        return view('frontend.support_study_abroad');
    }

    public function career_preparation(){
        return view('frontend.career_preparation');
    }

    public function contact_us(){
        $info = siteInformation::first();
        return view('frontend.contact_us', compact('info'));
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function clear_cache()
    {
        \Artisan::call('cache:clear');
        \Artisan::call('route:clear');
        \Artisan::call('view:clear');
        \Artisan::call('config:clear');
        dd("Application all cached has been cleared!");
=======
>>>>>>> 4ac1f98 (Email Setup for  booking and consultation page)
    public function clear_cache(){
         \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');
    dd("Application all cached has been cleared!");
<<<<<<< HEAD
=======
>>>>>>> 7f5f6bc (Email Setup for  booking and consultation page)
    }
    
    public function all_blogs()
    {
        $blogs = Blog::latest()->paginate(30);
        return view('frontend.all_blogs', compact('blogs'));

>>>>>>> 4ac1f98 (Email Setup for  booking and consultation page)
    }
    
    public function all_blogs()
    {
        $blogs = Blog::latest()->paginate(30);
        return view('frontend.all_blogs', compact('blogs'));

    }

    public function blog_details($id){
        // dd($id);
        $blog = Blog::where('id', $id)->first();
        // dd($blog);
        return view('frontend.blog_details', compact('blog'));
    }

// public function getTimeZoneData()
// {
//     $apiKey = 'A8PRL7GQ6QVQ';
//     $response = Http::get("http://api.timezonedb.com/v2.1/list-time-zone", [
//         'key' => $apiKey,
//         'format' => 'json',
//     ]);

//     if ($response->successful()) {
//         $timeZones = $response->json()['zones'];
//         // Process and use $timeZones as needed
//     } else {
//         // Handle error
//     }
// }



public function consultation_book()
{

    
    

        return view('frontend.book_consultancy');
   
}




    public function showStep1()
    {
       // Cache for 1 day (adjust duration as needed)
    $timeZones = Cache::remember('time_zones', 86400, function () {
        return DB::table('time_zone')
            ->select('zone_name', 'gmt_offset')
            ->orderBy('zone_name', 'asc')
            ->get();
    });
        
        $timeSlots = $this->generateTimeSlots();
        return view('frontend.book_consultancy', compact('timeSlots', 'timeZones'));
    }
    
    private function generateTimeSlots($timezone = null)
{
    $startTime = Carbon::now($timezone); // Use the selected time zone
    $endTime = Carbon::now($timezone)->addHours(8);
    $interval = 30; 
    $timeSlots = [];

    while ($startTime->lte($endTime)) {
        $timeSlots[] = $startTime->format('h:i A');
        $startTime->addMinutes($interval);
    }

    return $timeSlots;
}

    
    public function showStep2(Request $request)
    {
        // Validate the query parameters
        $validated = $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
        ]);
    
        // Render the second step with the passed data
        return view('frontend.book_consultancy_step2', [
            'date' => $request->query('date'),
            'time' => $request->query('time'),
            'time_zone' => $request->query('time_zone'),
        ]);
    }
    

    
    public function submitBooking(Request $request)
    {
        // dd($request->all());
        // Validate all required fields
        $validatedData = $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'time_zone' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'additional_info' => 'nullable|string|max:1000',
            
        ]);
        // dd($validatedData);
        // Create a new instance of the Booking model and fill it with validated data
        $booking = new Booking();
        $booking->fill($validatedData);
    
        // Save the booking instance to the database
        $booking->save();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 4ac1f98 (Email Setup for  booking and consultation page)
        Mail::to($validatedData['email'])->send(new BookingConfirmationMail($validatedData));

        // Send email to your email (roynirjon18@gmail.com)
        Mail::to('roynirjon18@gmail.com')->send(new BookingConfirmationMail($validatedData));
<<<<<<< HEAD
=======
>>>>>>> 7f5f6bc (Email Setup for  booking and consultation page)
>>>>>>> 4ac1f98 (Email Setup for  booking and consultation page)

        // Redirect back with a success message
        return redirect()->route('consultation.confirmation')->with('success', 'Booking confirmed successfully!');
    }
    

    
    public function confirmation()
{

    

    // Retrieve the latest booking from the database
    $booking = Booking::latest()->first();

    if (!$booking) {
        // Redirect to Step 1 if no booking data is found
        return redirect()->route('consultation.step1')->with('error', 'No booking found.');
    }

    

    // Display confirmation page with booking details
    return view('frontend.consultation_confirmation', compact('booking'));
}

    

}
