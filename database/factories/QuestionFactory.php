<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\QuestionsController;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    // $slug = new QuestionsController;
    // $slug->exctractSlug
    $title = $faker->sentence;
    $slug = app('App\Http\Controllers\QuestionsController')->extractSlug($title);
    return [
        'user_id' => factory(\App\User::class),
        'title' => $title,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph,
        'slug' => $slug,
    ];
});
