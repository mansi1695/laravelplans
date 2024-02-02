<?php

use Concept\LaravelPlans\Models\Plan;
use Concept\LaravelPlans\Tests\Models\User;
use Concept\LaravelPlans\Models\PlanSubscription;

$factory->define(PlanSubscription::class, function (Faker\Generator $faker) {
    return [
        'subscribable_id' => factory(User::class)->create()->id,
        'subscribable_type' => User::class,
        'plan_id' => factory(Plan::class)->create()->id,
        'name' => $faker->word
    ];
});
