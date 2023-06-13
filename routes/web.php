<?php

use App\Events\Message;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UxController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StackController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ModernController;
use App\Http\Controllers\PythonController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PasswordController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [WelcomeController::class, 'index']);

//Show register
Route::get('/users/signup', [UserController::class, 'create']);


//Show courses in main page
Route::get('/', [CourseController::class, 'show']);

//checkout
Route::post('/checkout/{id}', [CourseController::class, 'checkout'])->name('checkout');
Route::get('/success', [CourseController::class, 'success'])->name('checkout.success');
Route::get('/cancel', [CourseController::class, 'cancel'])->name('checkout.cancel');

//create new user
Route::post('/signup', [UserController::class, 'store']);

//signin controller
Route::get('/signin', [SigninController::class, 'create'])->name('signin');

//signup controller
Route::get('/signup', [SignupController::class, 'create']);

//Log user out
Route::post('/logout', [SignupController::class, 'logout']);

//Log in User
Route::post('/users/authenticate', [SigninController::class, 'authenticate']);

//Profile controller
Route::get('/profile', [ProfileController::class, 'create']);

Route::post('/profile', [ProfileController::class, 'updatePassword'])->name('update-password');

//Send message
Route::post('/', [ContactController::class, 'contactsubmit'])->name('contactsubmit');

// display the chat view
Route::middleware('auth')->get('/chat', function () {
    return view('chat');
})->name('chat');

Route::middleware('auth')->post('send-message', function (Request $request) {
    event(new Message($request->input('username'), $request->input('message')));
    return ['success' => true];
})->name('send-message');

 



//Admin part
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    //Courses part
    Route::get('courses/showArchive', [CourseController::class, 'showArchive']);
    Route::delete('courses/deleteArchive/{id}', [CourseController::class, 'destroyArchive']);
    Route::post('courses/restore/{id}', [CourseController::class, 'restore']);
    Route::resource('courses', CourseController::class);
    //Mentors part
    Route::delete('mentors/deleteImage/{id}', [MentorsController::class, 'destroyImage']);
    Route::get('mentors/archive', [MentorsController::class, 'archive']);
    Route::delete('mentors/deleteArchive/{id}', [MentorsController::class, 'destroyArchive']);
    Route::post('mentors/restore/{id}', [MentorsController::class, 'restore']);
    Route::resource('mentors', MentorsController::class);
});



//Slug for the courses
Route::get('/{slug}', [StackController::class, 'show']); 

//Show categories
Route::get('/category/{slugg}', [CategoryController::class, 'show']);


