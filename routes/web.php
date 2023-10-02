<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CollegeAuthController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CourseDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CollegeDashboardController;

Auth::routes();

// Admin authentication routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.loginFrom');
    Route::get('/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.registerFrom');
    Route::post('/register', [AdminAuthController::class, 'register'])->name('admin.register');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
// College authentication routes
Route::prefix('college')->group(function () {
    Route::get('/login', [CollegeAuthController::class, 'showLoginForm'])->name('college.loginFrom');
    Route::get('/register', [CollegeAuthController::class, 'showRegisterForm'])->name('college.registerFrom');
    Route::post('/register', [CollegeAuthController::class, 'register'])->name('college.register');
    Route::post('/login', [CollegeAuthController::class, 'login'])->name('college.login');
    Route::get('/logout', [CollegeAuthController::class, 'logout'])->name('college.logout');
});
// Student authentication routes
Route::prefix('student')->group(function () {
    Route::get('/login', [StudentAuthController::class, 'showLoginForm'])->name('student.loginFrom');
    Route::get('/register', [StudentAuthController::class, 'showRegisterForm'])->name('student.registerFrom');
    Route::post('/register', [StudentAuthController::class, 'register'])->name('student.register');
    Route::post('/login', [StudentAuthController::class, 'login'])->name('student.login');
    Route::get('/logout', [StudentAuthController::class, 'logout'])->name('student.logout');
});

//open link
Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/recommend', function () {
    return view('home.recommend');
});
Route::get('/college', [CollegeController::class, 'showForStudent'])->name('college.showForStudent');

Route::get('/aboutus', function () {
    return view('home.aboutus');
});
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/college-signup', function () {
    return view('auth.college-register');
});
Route::get('/view/colleges', function () {
    return view('home.viewCourse');
});
Route::get('/view/courses/colleges', function () {
    return view('home.viewCourseCollege');
});
Route::get('/view/course-detail', function () {
    return view('home.viewCollegeCourseDetail');
});
Route::get('/inquiry', function () {
    return view('home.inquiry');
})->name('inquiry.home');


//inquiry routes
Route::get('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/inquiry/show', [InquiryController::class, 'show'])->name('inquiry.show');
Route::get('/inquiry/edit/{id}', [InquiryController::class, 'edit'])->name('inquiry.edit');
Route::put('/inquiry/update/{id}', [InquiryController::class, 'update'])->name('inquiry.update');
Route::get('/inquiry/delete/{id}', [InquiryController::class, 'destroy'])->name('inquiry.destroy');



Route::get('/view/colleges', function () {
    return view('home.viewCourse');
});

Route::get('/courses', function () {
    return view('home.courses');
});

Route::get('/courses', [CourseController::class, 'showForStudent'])->name('course.showForStudent');
Route::get('/view/course/description/{id}', [CourseController::class, 'getByIdforStudent'])->name('course.getByIdforStudent');
Route::get('/view/course/description/college/{id}', [CourseDetailController::class, 'getCollegeByCourseId'])->name('course.getCollegeByCourseId');

Route::get('/college/detail/course/description/{id}', [CourseDetailController::class, 'getById'])->name('coursedetail.getById');


Route::post('/register/student', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/show', [StudentController::class, 'show'])->name('students.show');
Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/college/create', [CollegeController::class, 'create'])->name('college.create');
Route::post('/college/store', [CollegeController::class, 'store'])->name('college.store');
Route::get('/college/show', [CollegeController::class, 'show'])->name('college.show');
Route::get('/college/course/view/{id}', [CollegeController::class, 'getById'])->name('college.getById');



Route::get('/collegesignupshow', function(){
    return view('home.collegeSignUP');
});



//CourseDetail
Route::get('/coursedetail', function(){
    return view('home.coursedetail');
});
Route::get('/college/create/course-detail', [CourseDetailController::class, 'courseDetailCreateForm'])->name('coursedetail.courseDetailCreateForm');
Route::post('/coursedetail/store', [CourseDetailController::class, 'store'])->name('coursedetail.store');
Route::get('/coursedetail/show', [CourseDetailController::class, 'show'])->name('coursedetail.show');
Route::get('/coursedetail/delete/{id}', [CourseDetailController::class, 'destroy'])->name('coursedetail.destroy');
Route::get('/coursedetail/edit/{id}',[CourseDetailController::class,'edit']);
Route::post('/coursedetail/update/{id}', [CourseDetailController::class, 'update'])->name('coursedetail.update');




Route::get('/admin/student/show', function(){
    return view('admin.studentshow');
});
Route::get('/admin/course/show', function(){
    return view('admin.courseshow');
});


//contact routes
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/update-status/{id}', [ContactController::class, 'updateStatus'])->name('contact.updateStatus');
Route::get('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'count'])->name('adminController.count');
    Route::get('/admin/edit-profile', function(){
        return view('admin.editProfile');
    });
    Route::get('/admin/course-detail/show', [CourseDetailController::class, 'show'])->name('coursedetail.show');
    Route::get('/admin/contact/show', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/admin/college/show', [CollegeController::class, 'show'])->name('college.show');
    Route::get('/admin/student/show', [StudentController::class, 'show'])->name('students.show');
    Route::get('/admin/course/show', [CourseController::class, 'show'])->name('course.show');
    Route::get('/admin/course/view/{id}', [CourseController::class, 'getById'])->name('course.getById');
    Route::get('/admin/inquiry/show', [InquiryController::class, 'showForAdmin'])->name('inquiry.showForAdmin');
    Route::get('/admin/inquiry/edit/{id}', [InquiryController::class, 'editForAdmin'])->name('admin.inquiryedit');
    Route::get('/admin/student/detail/{id}', [StudentController::class, 'getByIdForAdmin'])->name('students.getByIdForAdmin');
    Route::get('/admin/college/detail/{id}', [CollegeController::class, 'getByIdForAdmin'])->name('college.getByIdForAdmin');

});


Route::middleware(['auth:student'])->group(function () {
});



Route::middleware(['auth:college'])->group(function () {
    Route::get('/college/dashboard', [CollegeDashboardController::class, 'count'])->name('college.dashboard');
    Route::get('/college/edit-profile', function(){
        return view('college.edit');
    });
    Route::get('/college/view-inquiry', [InquiryController::class, 'showForCollege'])->name('college.inquiryshow');
    Route::get('/college/inquiry/edit/{id}', [InquiryController::class, 'editForCollege'])->name('college.inquiryedit');
    Route::get('/college/course-detail', [CourseDetailController::class, 'showForCollege'])->name('college.coursedetail.show');
    Route::get('/college/coursedetail/edit/{id}', [CourseDetailController::class, 'editCourseDetail'])->name('coursedetail.editCourseDetail');
    Route::put('/coursedetail/update/{id}', [CourseDetailController::class, 'updateForCollege'])->name('college-coursedetail.update');

});

Route::get('/college/detail/{id}', [CollegeController::class, 'getByIdForStudent'])->name('college.getByIdForStudent');
Route::get('/college/inquiry/givedate', function(){
    return view('college.inquirygivedate');
});

Route::get('/college/course/view', function(){
    return view('college.viewcollegedes');
});

