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

//Route::get('/{app}', function () {
//    return view('quiz/index');
//})->where('app', '.*');

Route::get('/ino', 'InoController@index');

Route::get('register', 'QuizController@register');

Route::get('login', 'QuizController@login');

Route::get('quiz', 'QuizController@index');

Route::get('ajax/quiz', 'Ajax\QuizController@getQuizAll');
