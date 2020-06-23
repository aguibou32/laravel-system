<?php

use Illuminate\Support\Facades\Route;

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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    
    // Route::get('/about', function() {
    //     return view('pages.about');
    // });
    
    // The web page routes 
Route::get('/', 'PagesController@welcome')->name('pages.welcome');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/team', 'PagesController@team')->name('pages.ourteam');


// Routes for adding a course on the website
Route::resource('courses', 'WebsiteCoursesController'); // This maps all the ressources functions to its actual routes (create, update, delete)
   

// Routes for the application
Route::resource('application', 'ApplicationsController');

// Routes for the modules
Route::resource('module', 'ModulesController');

// Notices route
Route::resource('notices', 'ModuleNoticesController');

// practicals routes
Route::resource('practicals', 'PracticalsController');

Route::resource('students', 'StudentsController');

Route::resource('users', 'UsersController');

Route::resource('callback', 'RequestCallBackController')->middleware('auth');;

Route::resource('add_student_to_course', 'AddStudentToModule');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

