<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\False_;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        // Tao Faker gom Email, Name.... gia
        'name' =>$faker->sentence(3),
        'description' => $faker->paragraph(4),
        'completed' => false


    ];
});
