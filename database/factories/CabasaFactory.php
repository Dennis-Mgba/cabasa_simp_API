<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Cabasa::class, function (Faker $faker) {
    return [
        "hallName" => $faker->text(5),
        "capacity" => $faker->text(5),
        "reason" => $faker->text(30),
        "status" => $faker->text(5)
        // "name" => $faker->text(30),
        // "email" => $faker->unique()->safeEmail,
        // "password" => 'db/.og/at2.uheWG/igi',
    ];
});
