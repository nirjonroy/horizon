<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\siteInformationController;
use App\Http\Controllers\backend\whereToStudyController;
use App\Http\Controllers\backend\internationalStudentLifeController;
use App\Http\Controllers\backend\aboutController;
use App\Http\Controllers\backend\feesCategoryController;
use App\Http\Controllers\backend\onlineFeeController;
use App\Http\Controllers\backend\studentInformationController;
use App\Http\Controllers\backend\sliderController;
use App\Http\Controllers\backend\contactFormController;
use App\Http\Controllers\backend\blogController;
use App\Http\Controllers\backend\userController;
use App\Http\Controllers\backend\ConsultationController;
use App\Http\Controllers\frontend\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/register', function() {
//     return redirect('/');
// })->name('register')->middleware('auth');


Route::get('/', [homeController::class, 'index'])->name('home.index');
Route::get('apply-now', [homeController::class, 'apply_now'])->name('apply.now');
Route::post('apply-now-form', [homeController::class, 'apply_now_form'])->name('apply.form');
Route::post('contact-form-form', [homeController::class, 'contact_form'])->name('contact.form');
Route::get('who-we-are', [homeController::class, 'about_us'])->name('who_we_are');
Route::get('where-to-study/{id}', [homeController::class, 'whereToStudy'])->name('where.to.study');
Route::get('online-study-options', [homeController::class, 'onlineStudyOption'])->name('online.study.option');
Route::get('international-student-life/{id}', [homeController::class, 'student_life'])->name('international.student.life');
Route::get('find-how-to-apply', [homeController::class, 'how_to_apply'])->name('how.to.apply');
Route::get('fees-and-cost', [homeController::class, 'fees_cost'])->name('fees.cost');
Route::get('entry-requirement', [homeController::class, 'entry_requirement'])->name('entry.req');
Route::get('application-process', [homeController::class, 'application_process'])->name('application.process');
Route::get('accommodation', [homeController::class, 'accommodation'])->name('accommodation');
Route::get('support-for-study-abroad', [homeController::class, 'support_study_abroad'])->name('support.study.abroad');
Route::get('support-career-preparation', [homeController::class, 'career_preparation'])->name('support.career.preparation');
Route::get('contact-us', [homeController::class, 'contact_us'])->name('contact.us');
Route::get('clear-cache', [homeController::class, 'clear_cache'])->name('clear.cache');
Route::get('blog-details/{id}', [homeController::class, 'blog_details'])->name('blog.details');
Route::get('consultation-book', [homeController::class, 'consultation_book'])->name('consultation.book');

Route::get('/book-consultation', [homeController::class, 'showStep1'])->name('consultation.step1');
Route::get('book-consultation/personal-info', [HomeController::class, 'showStep2'])->name('consultation.step2');
Route::post('/book-consultation/personal-infos', [HomeController::class, 'submitBooking'])->name('consultation.personal-info');
Route::get('/confirmation', [homeController::class, 'confirmation'])->name('consultation.confirmation');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/register', function() {
    return redirect('/');
});
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');
    // site informations
    Route::get('/site-information', [siteInformationController::class, 'index'])->name('siteinfo.index');
    Route::get('/site-edit/{id}', [siteInformationController::class, 'edit'])->name('siteinfo.edit');
    Route::post('/site-update/{id}', [siteInformationController::class, 'update'])->name('siteinfo.update');
    // where to study
    Route::get('/where-to-study-index', [whereToStudyController::class, 'index'])->name('whereToStudy.index');
    Route::get('/where-to-study-create', [whereToStudyController::class, 'create'])->name('whereToStudy.create');
    Route::get('/where-to-study-edit/{id}', [whereToStudyController::class, 'edit'])->name('whereToStudy.edit');
    Route::post('/where-to-study-store', [whereToStudyController::class, 'store'])->name('whereToStudy.store');
    Route::post('/where-to-study-update/{id}', [whereToStudyController::class, 'update'])->name('whereToStudy.update');
    Route::delete('/where-to-study/{id}', [whereToStudyController::class, 'destroy'])->name('whereToStudy.destroy');

    // international Student life
    Route::get('/international-student-life-index', [internationalStudentLifeController::class, 'index'])->name('internationalStdLife.index');
    Route::get('/international-student-life-create', [internationalStudentLifeController::class, 'create'])->name('studentlife.create');
    Route::get('/international-student-life-edit/{id}', [internationalStudentLifeController::class, 'edit'])->name('studentlife.edit');
    Route::post('/international-student-life-store', [internationalStudentLifeController::class, 'store'])->name('studentlife.store');
    Route::delete('/international-student-life-delete/{id}', [internationalStudentLifeController::class, 'destroy'])->name('studentlife.destroy');
    Route::post('/international-student-life-update/{id}', [internationalStudentLifeController::class, 'update'])->name('studentlife.update');

    Route::get('/about-us', [aboutController::class, 'index'])->name('about.index');
    Route::get('/about-us-edit', [aboutController::class, 'edit'])->name('about.edit');
    Route::post('/about-us-update', [aboutController::class, 'update'])->name('about-us.update');

    // fees Category
    Route::get('/fees-category-index', [feesCategoryController::class, 'index'])->name('fees.category.index');
    Route::get('/fees-category-create', [feesCategoryController::class, 'create'])->name('feesCategory.create');
    Route::post('/fees-category-store', [feesCategoryController::class, 'store'])->name('fees-category.store');
    Route::get('/fees-category-edit/{id}', [feesCategoryController::class, 'edit'])->name('feesCategory.edit');
    Route::delete('/fees-category-delete/{id}', [feesCategoryController::class, 'destroy'])->name('feesCategory.destroy');
    Route::post('/fees-category-update/{id}', [feesCategoryController::class, 'update'])->name('feesCategory.update');

    // online Course
    
     // fees Category
     Route::get('/fees-online-index', [onlineFeeController::class, 'index'])->name('fees.online.index');
     Route::get('/fees-online-create', [onlineFeeController::class, 'create'])->name('fees.online.create');
     Route::post('/fees-online-store', [onlineFeeController::class, 'store'])->name('fees.online.store');
     Route::get('/fees-online-edit/{id}', [onlineFeeController::class, 'edit'])->name('fees.online.edit');
     Route::delete('/fees-online-delete/{id}', [onlineFeeController::class, 'destroy'])->name('fees.online.destroy');
     Route::post('/fees-online-update/{id}', [onlineFeeController::class, 'update'])->name('fees.online.update');
     Route::get('/fees-online-recomanded/{id}', [onlineFeeController::class, 'recommand'])->name('fees.online.recomand');
     Route::get('/fees-online-not-recomanded/{id}', [onlineFeeController::class, 'not_recommand'])->name('fees.online.notRecomand');

    Route::get('/student-informations', [studentInformationController::class, 'index'])->name('studentInformation.index');
    Route::get('/student-informations-view/{id}', [studentInformationController::class, 'show'])->name('studentInformation.show');
    Route::get('/contact-informations', [contactFormController::class, 'index'])->name('contact.index');
    Route::get('/contact-view/{id}', [contactFormController::class, 'show'])->name('contact.view');

    Route::get('all-consultation', [ConsultationController::class, 'index'])->name('consultation.index');
    Route::get('/view-consultation/{id}', [ConsultationController::class, 'show'])->name('consultation.view');


    Route::get('/slider-index', [sliderController::class, 'index'])->name('slider.index');
    Route::get('/slider-create', [sliderController::class, 'create'])->name('slider.create');
    Route::post('/slider-store', [sliderController::class, 'store'])->name('slider.store');
    Route::get('/slider-edit/{id}', [sliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider-update/{id}', [sliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider-delete/{id}', [sliderController::class, 'destroy'])->name('slider.delete');

    Route::get('/blog-index', [blogController::class, 'index'])->name('blog.index');
    Route::get('/blog-create', [blogController::class, 'create'])->name('blog.create');
    Route::post('/blog-store', [blogController::class, 'store'])->name('blog.store');
    Route::get('/blog-edit/{id}', [blogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog-update/{id}', [blogController::class, 'update'])->name('blog.update');
    Route::delete('/blog-delete/{id}', [blogController::class, 'destroy'])->name('blog.delete');
    
    Route::get('user-registraion-page', [userController::class, 'show'])->name('backend.user.registration');
    Route::post('user-registraion-update/{id}', [userController::class, 'update'])->name('backend.user.update');




});



require __DIR__.'/auth.php';
