<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'title' => $faker->title(),
        'author' => $faker->name(),
        'image' => $faker->imageUrl(),
        'big_title' => $faker->jobTitle,
        'sub_title' => $faker->jobTitle,
        'description' => $faker->paragraph
    ];
});
