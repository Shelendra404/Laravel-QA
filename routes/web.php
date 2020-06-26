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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about', [
//         'questions' => App\Question::latest()->take(3)->get(),
//     ]);
// });

Route::get('/questions', 'QuestionsController@index')->name('questions.index');
Route::post('/questions', 'QuestionsController@store');
Route::get('/questions/create', 'QuestionsController@create');
Route::get('/questions/{question}', 'QuestionsController@show')->name('questions.show');
Route::get('/questions/{question}/edit', 'QuestionsController@edit');
Route::put('/questions/{question}', 'QuestionsController@update');

//Route::get('/users/{user}', 'UsersController@show');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/profile', 'HomeController@index')->name('profile')->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout');
