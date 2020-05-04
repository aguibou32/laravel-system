<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {

    $student_number = $faker->randomElement(['218027347', '218023744', '218445934']);
    $ranking_code = $faker->randomElement(["R033", "R332", "R331"]);
    
    return [
        //
        'student_number' => $student_number,
        'ranking_code' => $ranking_code,
        'module_id' => 1
    ];
});
