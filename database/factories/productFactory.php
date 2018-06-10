<?php

use Faker\Generator as Faker;
use App\product;

$factory->define(product::class, function (Faker $faker) {
    return [
    	'client_id'=>$faker->randomDigit(1,20),
        'name'=>$faker->sentence(4),
		'stock'=>$faker->randomDigit(1,20),
		'precio'=>$faker->randomDigit(1,20),

       
    ];
});
