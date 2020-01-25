<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tournament;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Tournament::class, function (Faker $faker) {


    return [
        'name' => Str::random(10),
    ];
});
