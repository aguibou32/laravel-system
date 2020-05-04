<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Module;
use Faker\Generator as Faker;

$factory->define(Module::class, function (Faker $faker) {

    // $notes = $faker->randomElement(['Lecture 1', 'Lecture 2', 'Lecture 3']);
    
    return [
        //
        'module_name' => "Computer Sciences 01",
        'module_code' => "CSC01A1",
        'module_duration' => "3 months",
        'module_description' => $faker->paragraph,
        'module_image' => $faker->text
        // 'notes' => $notes
    ];
});
      