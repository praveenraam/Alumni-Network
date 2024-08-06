<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AlumniLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Controllers\JobOpeningController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventStudentController;
use App\Http\Controllers\PostReportsController;
use App\Models\Alumni;
use App\Models\JobOpening;
use App\Models\PostReports;
use App\Models\Student;
use Google\Service\Classroom\StudentContext;

Route::get('/admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::get('/login', [AlumniLoginController::class, 'showLoginForm'])->name('alumni.login');
Route::post('/alumni/login', [AlumniLoginController::class, 'login']);
Route::post('/alumni/logout', [AlumniLoginController::class, 'logout'])->name('alumni.logout');

Route::get('/auth/google', [StudentLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [StudentLoginController::class, 'handleGoogleCallback']);

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::middleware(['auth:admin'])->group(function () {
    //Index for Admin
    Route::get('/admin', [AdminLoginController::class, 'index']);

    // Admin view, create for all alumni 
    Route::get('/admin/alumni', [AlumniController::class, 'ViewList'])->name('admin.alumni.index');
    Route::get('/admin/alumni/create', [AlumniController::class, 'create'])->name('admin.alumni.create');
    Route::post('/admin/alumni/store', [AlumniController::class, 'store'])->name('admin.alumni.store');

    // Admin view sepatate Alumni profile
    Route::get('/admin/alumni/profile/{id}', [AlumniController::class, 'profile']);
    // Deleting alumni User
    Route::delete('/admin/alumni/{id}', [AlumniController::class, 'deleteAlumni'])->name('admin.alumni.delete');


    // Admin everybody's details and seperate profiles : students
    Route::get('/admin/students', [StudentController::class, 'ViewList']);
    Route::get('/admin/students/profile/{id}', [StudentController::class, 'profile']);

    // View Jobs
    Route::get('admin/jobs', [JobOpeningController::class, 'viewJobsAdmin']);
    Route::delete('admin/job/{id}', [JobOpeningController::class, 'destroy'])->name('jobOpeningsAdmin.destroy');

    // Create event
    Route::get('admin/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('admin/events/store', [EventController::class, 'store'])->name('events.store');
    // View events  
    Route::get('admin/events', [EventController::class, 'AdminIndex'])->name('admin.events.index');
    // Viewing the list of students registered
    Route::get('/admin/events/{eventId}/registration', [EventStudentController::class, 'showRegistrations'])->name('admin.events.registered-students');
    // Deleting events
    Route::delete('admin/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

    // View Reports
    Route::get('admin/Reports/Post', [PostReportsController::class, 'indexForAdmin'])->name('admin.reports.post');
    // Delete Action for Admin
    Route::delete('/admin/posts/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
});

Route::middleware(['auth:alumni'])->group(function () {
    // Index for Alumni
    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
    // Create Post
    Route::post('alumni/post/store', [PostController::class, 'store'])->name('posts.store');
    // Reporting POST's
    Route::post('alumni/{postID}/{alumniID}', [PostReportsController::class, 'reportByAlumni'])->name('post_reports.reportByAlumni');

    // View everybody's details and seperate profiles : alumni
    Route::get('/alumni/alumni', [AlumniController::class, 'ViewList']);
    Route::get('/alumni/alumni/profile/{id}', [AlumniController::class, 'profile'])->name('alumni.profile');

    //View own profile
    Route::get('/alumni/myprofile', [AlumniController::class, 'ownProfile'])->name('alumni.ownProfile');

    // Update details
    Route::get('/alumni/settings', [AlumniController::class, 'settings'])->name('alumni.settings');
    Route::post('/alumni/settings/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');

    //View everybody's details and Students profile
    Route::get('/alumni/students', [StudentController::class, 'ViewList']);
    Route::get('/alumni/students/profile/{id}', [StudentController::class, 'profile']);

    //View jobs 
    Route::get('/alumni/jobs', [JobOpeningController::class, 'viewJobsAlumni'])->name('jobOpenings.index');
    Route::get('/alumni/jobs/form', [JobOpeningController::class, 'form']);
    Route::post('/alumni/insert', [JobOpeningController::class, 'store'])->name('jobOpenings.insert');
    Route::delete('alumni/job/{id}', [JobOpeningController::class, 'destroy'])->name('jobOpeningsAlumni.destroy');

    // View Events
    Route::get('alumni/events', [EventController::class, 'AlumniIndex'])->name('events.index');
    // alumni choosing event as co-ordinator
    Route::post('alumni/coordinator', [EventController::class, 'setCoOrdinator'])->name('event.co-ordinate');
    // Viewing registered Students
    Route::get('/alumni/events/{eventId}/registration', [EventStudentController::class, 'showRegistrations'])->name('alumni.events.registered-students');
});

Route::middleware(['auth:student'])->group(function () {
    // Index for Student
    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
    // Reporting the POST's
    Route::post('student/{postID}/{studentID}', [PostReportsController::class, 'reportByStudent'])->name('post_reports.reportByStudent');

    // View seperate profile
    Route::get('/student/students/profile/{id}', [StudentController::class, 'profile'])->name('student.profile');

    // Update details
    Route::get('/student/settings', [StudentController::class, 'settings'])->name('student.settings');
    Route::post('/student/settings/update', [StudentController::class, 'update'])->name('student.update');

    // View everybody's details and seperate profiles : alumni
    Route::get('student/alumni', [AlumniController::class, 'ViewList']);
    Route::get('/student/alumni/profile/{id}', [AlumniController::class, 'profile']);

    // View Student profile
    Route::get('/student/students/profile/{id}', [StudentController::class, 'profile']);

    // View own profile
    Route::get('/student/myprofile', [StudentController::class, 'ownProfile']);

    //View Jobs
    Route::get('student/jobs', [JobOpeningController::class, 'viewJobs']);

    // View events
    Route::get('student/events', [EventController::class, 'listEventsForStudents'])->name('student.events');
    Route::post('student/events/{eventId}/register', [EventStudentController::class, 'registerStudent'])->name('events.register');
});
