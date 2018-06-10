<?php

use Faker\Generator as Faker;
use App\client;

$factory->define(client::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(4),
    ];
});
