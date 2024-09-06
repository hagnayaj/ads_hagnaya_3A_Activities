<?php

use Illuminate\Support\Facades\Route;
Route::get('/student/create', function ()  {
    $student = new student();
    $student->first_name = 'john';
    $student->last_name = 'Doe';
    $student->email = 'john@example.com';
    $student->age = '22';
    $student->save();
    return 'Student Created!';
});


Route::get('/student', function () {
    $student = student::all();
    return $student;
});

Route::get('/student/update', function () {
    $student = student::where('email', 'johndoe@example.com')->first();
    $student->email = 'john.doe@newmail.com'
    
})


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
