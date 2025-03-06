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


//#1
// Database Connection from env file
// # DB_DATABASE=your_database_name

//#2
// Create Route , Controller , Model and Migration
// # php artisan make:model student -mcr

//#3
// Define the Database Schema in Migration File
// # Schema::create('students', function (Blueprint $table) {
// # $table->id();
// # $table->string('name');
// # $table->string('email');
// # $table->string('phone');
// # $table->timestamps();
// # });
// After defining the schema, run the migration:
// # php artisan migrate

//#4
// Define Routes
// use App\Http\Controllers\StudentController;
// Route::resource('students', StudentController::class);

// #5
// Implement CRUD Methods in the Controller

// #6
// Create Views (Optional but recommended)
// index.blade.php , create.blade.php

// -----------------------------------------------------


// Summary of Key Steps:
// #1 Database Configuration: Set up your .env file.
// #2 Create Model, Migration, and Controller: Use php artisan make:model Student -mcr.
// #3 Migrate Database: Run php artisan migrate.
// #4 Define Routes: Add the resource route in web.php.
// #5 Implement Controller Logic: Add CRUD methods in the StudentController.
// #6 Create Views: Create Blade views to handle the UI for CRUD operations.


// -----------------------------------------------------





Route::resource('students', StudentController::class );