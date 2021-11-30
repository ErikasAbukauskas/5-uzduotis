<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;

use App\Type;

use App\Owner;


use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [

        'title' => $faker->name(225),
        'description' => $faker->sentence(),
        'start_date' => $faker->date('Y_m_d'),
        'end_date' => $faker->date('Y_m_d'),
        'logo' => $faker->image(),

        'type_id' => factory(Type::class)->create()->id,
        'owner_id' => factory(Owner::class)->create()->id
    ];

});
