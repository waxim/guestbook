<?php

use Faker\Generator as Faker;

$factory->define(App\Guestbook::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'message' => $faker->paragraph(rand(1, 3), true)
    ];
});
