<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1,19),
        'name'=> $title,
        'slug'=> Str::slug($title,"-"),
        'body'=> $faker->text(500),
    ];
});
