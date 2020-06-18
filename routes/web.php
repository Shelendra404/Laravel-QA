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

Route::get('/about', function () {
    return view('about', [
        'questions' => App\Question::latest()->take(3)->get(),
    ]);
});

Route::get('/questions/{question}', 'QuestionsController@show');

Route::get('/questions', 'QuestionsController@index');
// Route::get('/', function () {
//     $name = request('name');
//     return view('user', ['name' => $name]);
// });

Route::get('/users/{user}', 'UsersController@show');
