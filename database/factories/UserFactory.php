<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(\App\Students::class, function (Faker $faker) {
    return [
        "name" => $faker->unique()->name,
        "age" => $faker->randomFloat(0, 18, 25),
        "address" => $faker->address,
        "telephone" => $faker->phoneNumber
    ];
});
