<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
	return [
		'title' => $faker->sentence,
		'video_path' => $faker->url,
		'description' => $faker->text,
		'published_at' => Carbon::now()
	];
});