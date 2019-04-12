<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [

        'name'=>$faker->text(7),
        'description'=>$faker->text(100),
        'price'=>$faker->numberBetween($min = 10, $max = 900),
    ];
});
