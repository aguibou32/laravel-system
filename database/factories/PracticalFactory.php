<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Practical;
use Faker\Generator as Faker;

$factory->define(Practical::class, function (Faker $faker) {
    return [
        //
        'practical_name' => "practical 01",
        'due_date' => now(),
        'total' => 100,
        'practical_filename' => "practical_01",
        'solution_filename' => "solution_01",
        'module_id' => 1
    ];
});

