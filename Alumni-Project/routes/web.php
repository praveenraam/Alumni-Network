<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AlumniLoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Controllers\DemoapiController;
use App\Http\Controllers\JobOpeningController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventStudentController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostReportsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MentorshipController;
use App\Models\Alumni;
use App\Models\ForgotPasswordRequest;
use App\Models\JobOpening;
use App\Models\PostReports;
use App\Models\Student;
use Google\Service\Classroom\StudentContext;

Route::get('/admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::get('/login', [AlumniLoginController::class, 'showLoginForm'])->name('alumni.login');
Route::post('/alumni/login', [AlumniLoginController::class, 'login']);
Route::post('/alumni/logout', [AlumniLoginController::class, 'logout'])->name('alumni.logout');
Route::get('/forgot-password',[ForgotPasswordController::class,'create'])->name('forgotpassword.page');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('forgot-password.store');


Route::get('/auth/google', [StudentLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [StudentLoginController::class, 'handleGoogleCallback']);

Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/403', function () {
    return response()->view('errors.403', [], 403);
})->name('403');
Route::get('/500', function () {
    return response()->view('errors.500', [], );
})->name('403');
Route::get('/503', function () {
    return response()->view('errors.503', [], 403);
})->name('503');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::middleware(['auth:admin'])->group(function () {
    //Index for Admin
    Route::get('/admin', [AdminLoginController::class, 'index']);

    // Admin view, create for all alumni 
    Route::get('/admin/alumni', [AlumniController::class, 'ViewList'])->name('admin.alumni.index');
    Route::get('/admin/alumni/create', [AlumniController::class, 'create'])->name('admin.alumni.create');
    Route::post('/admin/alumni/store', [AlumniController::class, 'store'])->name('admin.alumni.store');
    // Search
    Route::get('admin/alumni/search', [AlumniController::class, 'Adminsearch'])->name('admin.alumni.search');


    // Admin view sepatate Alumni profile
    Route::get('/admin/alumni/profile/{id}', [AlumniController::class, 'profile'])->name('admin.alumni.profile');
    // View Posts
    Route::get('/admin/alumni/profile/post/{id}', [PostController::class, 'showProfile'])->name('alumni.profile');

    // Deleting alumni User
    Route::delete('/admin/alumni/{id}', [AlumniController::class, 'deleteAlumni'])->name('admin.alumni.delete');


    // Admin everybody's details and seperate profiles : students
    Route::get('/admin/students', [StudentController::class, 'ViewList']);
    Route::get('/admin/students/profile/{id}', [StudentController::class, 'profile'])->name('admin.students.profile');;
    // Search Student
    Route::get('admin/student/search', [StudentController::class, 'AdminSearch'])->name('admin.student.search');

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

    // View tasks
    Route::get('/admin/tasks', [TaskController::class, 'showAdminTasks'])->name('tasks.admin');
    //Delete tasks
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

    // Forum
    Route::get('/admin/forum',[]);

    // View Password reset requests
    Route::get('/admin/forgot-password-requests', [ForgotPasswordController::class, 'index'])->name('admin.forgot-password-requests');
    Route::patch('/admin/change-password/{roll_number}', [ForgotPasswordController::class, 'changePassword'])->name('admin.change-password');
    Route::patch('/admin/ignore-request/{id}',[ForgotPasswordController::class,'ignoreRequest'])->name('admin.ignore-request');
});

Route::middleware(['auth:alumni'])->group(function () {
    // Index for Alumni
    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
    // Create Post
    Route::post('alumni/post/store', [PostController::class, 'store'])->name('posts.store');
    // Reporting POST's
    Route::post('alumni/{postID}/{alumniID}', [PostReportsController::class, 'reportByAlumni'])->name('post_reports.reportByAlumni');

    // View everybody's details and seperate profiles : alumni
    Route::get('/alumni/alumni', [AlumniController::class, 'ViewListAlumni']);
    Route::get('/alumni/alumni/profile/{id}', [AlumniController::class, 'profile'])->name('alumni.profile');
    // Search Alumni
    Route::get('alumni/alumni/search', [AlumniController::class, 'AlumniSearch'])->name('alumni.alumni.search');


    //View Post 
    Route::get('/alumni/alumni/profile/post/{id}', [PostController::class, 'showProfile'])->name('alumni.profile');

    //View own profile
    Route::get('/alumni/myprofile', [AlumniController::class, 'ownProfile'])->name('alumni.ownProfile');

    // Update details
    Route::get('/alumni/settings', [AlumniController::class, 'settings'])->name('alumni.settings');
    Route::post('/alumni/settings/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');

    //View everybody's details and Students profile
    Route::get('/alumni/students', [StudentController::class, 'ViewList']);
    Route::get('/alumni/students/profile/{id}', [StudentController::class, 'profile'])->name('alumni.students.profile');
    // Search Student in the List
    Route::get('alumni/student/search', [StudentController::class, 'AlumniSearch'])->name('alumni.student.search');

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

    // Tasks for students
    Route::get('alumni/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('alumni/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('alumni/tasks', [TaskController::class, 'index'])->name('tasks.index');
    // Delete Task
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');


    // View Forum
    Route::get('/alumni/forum',[ForumController::class,'viewQuestions']);
    Route::get('/alumni/forum/answer/{id}',[ForumController::class,'viewAnswers'])->name('question.answers');
    Route::post('/alumni/forum/{id}/answer', [ForumController::class, 'storeAnswer'])->name('answers.store');

    // Change password
    Route::get('/alumni/change-password',[AlumniLoginController::class,'showChangePasswordForm'])->name('alumni.change-password.form');
    Route::post('/alumni/change-password', [AlumniLoginController::class,'updatePassword'])->name('alumni.change-password.update');
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
    Route::get('student/alumni', [AlumniController::class, 'ViewListStudent']);
    Route::get('/student/alumni/profile/{id}', [AlumniController::class, 'profile'])->name('student.alumni.profile');
    Route::get('student/alumni/search', [AlumniController::class, 'StudentSearch'])->name('student.alumni.search');

    // View Post
    Route::get('/student/alumni/profile/post/{id}', [PostController::class, 'showProfile'])->name('alumni.profile');

    // View Student profile
    Route::get('/student/students/profile/{id}', [StudentController::class, 'profile']);

    // View own profile
    Route::get('/student/myprofile', [StudentController::class, 'ownProfile']);

    //View Jobs
    Route::get('student/jobs', [JobOpeningController::class, 'viewJobs']);

    // View events
    Route::get('student/events', [EventController::class, 'listEventsForStudents'])->name('student.events');
    Route::post('student/events/{eventId}/register', [EventStudentController::class, 'registerStudent'])->name('events.register');

    // Mentor Availability
    Route::get('student/availablementors', [AlumniController::class, 'availableMentors'])->name('available-mentors');
    Route::post('student/assign-mentor', [MentorshipController::class, 'assign'])->name('mentorship.assign');
    // View Tasks
    Route::get('student/student-tasks', [TaskController::class, 'showStudentTasks'])->name('student.tasks');

    // Forum
    Route::get('/student/forum', [ForumController::class, 'viewQuestions'])->name('forum.index');
    Route::get('/student/forum/add', [ForumController::class, 'createQuestion']);
    Route::post('/student/forum/add/post', [ForumController::class, 'storeQuestion'])->name('questions.store');
    Route::get('/student/forum/answer/{id}',[ForumController::class,'viewAnswers']);

});

// Logout route
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');