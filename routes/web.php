<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function () {
//    //return 'Hello World';
//    return view('view');
//});
//Route::get('/basis', function () {
//    return 'Hello Basids';
//});
//Route::get('/',  function () {
//    return resource_path('views');
//});

//Route::get('/', 'StudentController@test');

Route::get('/', 'StudentController@home');
Route::get('/about', 'StudentController@about');
Route::get('/contact', 'StudentController@helloWorld');
Route::post('/new-student', 'StudentController@saveStudent');
Route::get('/edit-student/{id}', 'StudentController@editStudent');
Route::post('/update-student', 'StudentController@updateStudent');
Route::get('/delete-student/{id}', 'StudentController@deleteStudent');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
