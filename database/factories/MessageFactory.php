<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
      'content' => $faker->realText(200,3)
    ];
});
