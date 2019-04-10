<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [

        'name'=>$faker->text(50),
        'description'=>$faker->text(100),
        'price'=>$faker->number,
    



        
    ];
});
