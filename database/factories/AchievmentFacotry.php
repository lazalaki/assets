<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Achievment;
use App\User;
use Faker\Generator as Faker;

$factory->define(Achievment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'achievment' => $faker->sentence(),
    ];
});
