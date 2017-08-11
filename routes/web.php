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

Route::get('/', function () {
    return view('');
});
//Route::get('/students/all', function () {
//    return view('/students/all');
//});

Route::get('/students', 'StudentController@getAll');
Route::get('/students/add', 'StudentController@addStudent');
Route::get('/students/delete/{student}', 'StudentController@deleteStudent');
Route::get('/students/update/{student}', 'StudentController@updateStudent');
Route::post('/students/insert/', 'StudentController@insertStudent');
Route::get('/students/restore/{id}', 'StudentController@restoreStudent');

//Route::get('/students/delete/{ - نفس الموديل student}', 'StudentController@deleteStudent');
