<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Profile\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'bio' => $faker->realText(),
        'birthdate' => $faker->date(),
        'country' => $faker->country,
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
        'website' => $faker->url,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
