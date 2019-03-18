<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        //
        "user_id"=>rand(1,20),
        'category_id'=>rand(1,10),
        'title'=>$faker->title,
        'body'=>$faker->sentence,
        'img'=>$faker->imageUrl(),
        'tags'=>json_encode([1,2,3,4,6])
    ];
});
