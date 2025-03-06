<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});


// CRUD Step

// Database Connection from env file
// # DB_CONNECTION=mysql


// Create Route , Controller , Model and Migration
// # php artisan make:model student -mcr



// push migration to database
// # php artisan migrate

// Create Route
// # Route::resource('students', 'StudentController');
// Make sure add namespace for controller in web.php file
// # use App\Http\Controllers\StudentController;
// Route::resource('students', StudentController::class ); 



//







Route::resource('students', StudentController::class );