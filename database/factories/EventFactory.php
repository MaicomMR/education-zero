<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;
use App\User;

$factory->define(Event::class, function (Faker $faker, $params) {
    return [
            'title' => $faker->name,
            'creator_id' => $params['creator_id'] ?? factory(User::class)->create()->id,
            'location' => $faker->name,
            'description' => $faker->name,
            'price' => rand(1,10),
            'how_many_participants' => rand(1,10),
            'minimum_participants' => rand(1,10),
            'event_date' => '10/10/10'
    ];
});
