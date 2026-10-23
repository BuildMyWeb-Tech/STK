
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUpcomingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Past_eventController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/upcoming_Events', [UserController::class, 'upcoming_events'])->name('upcoming');
Route::get('/past_events', [UserController::class, 'past_events'])->name('past');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/commitee', [UserController::class, 'commitee'])->name('commitee');
Route::get('/memberships', [UserController::class, 'memberships'])->name('memberships');
Route::get('/gallery/{records}', [UserController::class, 'gallery'])->name('gallery');
Route::get('/sponsorships', [UserController::class, 'sponsorships'])->name('sponsorships');

Route::get('/contacts', [UserController::class, 'contacts'])->name('contacts');
Route::post('/Addcontact', [UserController::class, 'addContact'])->name('addcontact');

Route::get('/registration/{id}', [UserController::class, 'registration'])->name('event-register');
Route::post('/addRegister', [UserController::class, 'addRegistration'])->name('event_add_register');
Route::get('/registration_success', [UserController::class, 'registration_success'])->name('registration_success');

// feedback
Route::get('/feedback/{id}', [UserController::class, 'feedback'])->name('feedback_user');
Route::post('/addFeedback', [UserController::class, 'addFeedback'])->name('add_feedback');
Route::get('/feedback_success', [UserController::class, 'feedback_success'])->name('feedback_success');

// testmonials
Route::get('/testmonials', [UserController::class, 'testmonials'])->name('test_monials');
Route::post('/addTestmonial', [UserController::class, 'addTestmonial'])->name('add_testmonial');

// auth
Route::get('register', [AuthController::class, "index"])->name("register")->middleware('guest');
Route::post('register/store', [AuthController::class, "store"])->name("register-store");
Route::get('/login', [AuthController::class, "login"])->name("login")->middleware('guest');
Route::get('login/show', [AuthController::class, "login_fetch"])->name("login-show");
Route::get('logout', [AuthController::class, "logout"])->name("logout");

Route::middleware('auth', AuthAdmin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');

    // upcoming_events
    Route::get('/admin/upcoming_events', [AdminUpcomingController::class, 'index'])->name('upcoming-home');
    Route::get('/admin/upcoming_events/create', [AdminUpcomingController::class, 'create'])->name('upcoming-create');
    Route::post('/admin/upcoming_events/store', [AdminUpcomingController::class, 'store'])->name('upcoming-store');
    Route::get('/admin/upcoming_events/edit/{id}', [AdminUpcomingController::class, 'edit'])->name('upcoming-edit');
    Route::post('/admin/upcoming_events/update/{id}', [AdminUpcomingController::class, 'update'])->name('upcoming-update');
    Route::get('/admin/upcoming_events/delete/{id}', [AdminUpcomingController::class, 'destroy'])->name('upcoming-delete');

    // past Event
Route::get('/admin/past_event', [Past_eventController::class, 'index'])->name('past_event');
Route::get('/admin/past_event/create', [Past_eventController::class, 'create'])->name('past_event_create');
Route::post('/admin/past_event/store', [Past_eventController::class, 'store'])->name('past_event_store');
Route::get('/admin/past_event/edit/{id}', [Past_eventController::class, 'edit'])->name('past_event_edit');
Route::post('/admin/past_event/update/{id}', [Past_eventController::class, 'update'])->name('past_event_update');
Route::get('/admin/past_event/delete/{id}', [Past_eventController::class, 'destroy'])->name('past_event_delete');


    // Banner
    Route::get('/admin/banner', [BannerController::class, 'index'])->name('banner');
    Route::get('/admin/banner_create', [BannerController::class, 'create'])->name('banner_create');
    Route::post('/admin/banner/store', [BannerController::class, 'store'])->name('banner_store');
    Route::get('/admin/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner_edit');
    Route::post('/admin/banner/update/{id}', [BannerController::class, 'update'])->name('banner_update');
    Route::delete('/admin/banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner_deletes');

    Route::get('/admin/registration', [AdminController::class, 'registration'])->name('registration');
    Route::get("/admin/registration/{id}", [AdminController::class, 'DeleteRegistration'])->name('registration-delete');
    Route::get('/admin/payment', [AdminController::class, 'payment'])->name('payment');

    // feedback
    Route::get('/admin/feedback', [AdminController::class, 'feedback'])->name('feedback');
    // Route::get('/admin/feedback_approve/{id}', [AdminController::class, 'feedback_approve'])->name('feedback_approve');
    Route::get('/admin/feedback_delete/{id}', [AdminController::class, 'feedback_delete'])->name('feedback_reject');

    // testmonials
    Route::get('/admin/testmonials', [AdminController::class, 'testmonials'])->name('admin-testmonials');
    Route::get('/admin/testmonials_approve/{id}', [AdminController::class, 'testmonials_approve'])->name('admin-testmonials_approve');
    Route::get('/admin/testmonials_delete/{id}', [AdminController::class, 'testmonials_delete'])->name('admin-testmonials_delete');

    // contact
    Route::get('/admin/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/admin/contact_delete/{id}', [AdminController::class, 'contact_delete'])->name('contact_delete');
    Route::get('/admin/contact_respond/{id}', [AdminController::class, 'contact_respond'])->name('contact_respond');

    Route::get('/download-registrations', [AdminController::class, 'downloadRegistrations'])->name('download-registrations');
    Route::get('/download-feedback', [AdminController::class, 'downloadFeedback'])->name('download-feedback');
    
});

Route::get('/storage/{path}', function (string $path) {
    $fullPath = storage_path('app/public/' . $path);
    if (!file_exists($fullPath)) {
        abort(404);
    }
    return response()->file($fullPath);
})->where('path', '.*');
