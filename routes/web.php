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
    return view('welcome');
});

Route::get('/', 'TeachersController@index');
Route::get('create', 'TeachersController@create');
Route::post('store', 'TeachersController@store');
Route::get('show/{teacher}', 'TeachersController@show');
Route::delete('show/{teacher}/delete', 'TeachersController@destroy');
Route::get('edit/{teacher}', 'TeachersController@edit');
Route::patch('edit/{teacher}/update', 'TeachersController@update');
Route::get('createSubjectForTeacher/{teacher}', 'TeachersController@createSubjectForTeacher');

Route::get('indexSubject', 'SubjectController@index');
Route::get('/showSubject/{subject}', 'SubjectController@show');
Route::get('createSubject', 'SubjectController@create');
Route::post('storeSubject', 'SubjectController@store');
Route::get('/editSubject/{subject}', 'SubjectController@edit');
Route::patch('update/{subject}', 'SubjectController@update');
Route::delete('/showSubject/{subject}/delete', 'SubjectController@destroySubject');



