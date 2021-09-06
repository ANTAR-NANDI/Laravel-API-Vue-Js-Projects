<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
         'name' => $faker->name('male'|'female'),
          'price' => $faker->numberBetween($min = 2000, $max = 3000),
        //  'image' => $faker->image('public/storages/images',640,480, null, false),
        // 'image' => $faker->image('images',400,300),
        'image'=>'https://source.unsplash.com/random',
        'details' => $faker->address
        
    ];
});
