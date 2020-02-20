<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
        'image' => 'product.png',
        'price' => rand(0,999),
        'bzu' => $faker->text(150),
        'energy' => $faker->text(150),
        'composition' => $faker->text(150),
        'category_id' => rand(1,20),
        'min_order'=> rand(1,3),
        'implementation_period'=> rand(1,3),
        'packaging' => rand(1,3)


    ];
});
