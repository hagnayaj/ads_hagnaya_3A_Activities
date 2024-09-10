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
    $student->email = 'john.doe@newmail.com';
    $student->age = 23;
    $student->save();
    return 'Student Updated!';   
});


Route::get('students/delete', function(){
    $student = student::where('email', 'john.doe@newmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

Route::get('/course/create', function(){
    $course = new Course();
    $course->course_name = 'Introduction to Database';
    $course->save();
    return 'Course Created!';
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/course/{id}/students', function($id){
    $course = Course::find($id);
    return $course-.students;
});
