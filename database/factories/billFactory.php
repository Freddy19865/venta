<?php

use Faker\Generator as Faker;
use App\bill;

$factory->define(bill::class, function (Faker $faker) {
    return [ 
    	'client_id'=>$faker->randomDigit(1,20),
        'total'=>$faker->randomDigit(1,20),
    ];
});
