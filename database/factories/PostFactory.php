<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->paragraph(1);

    return [
        'uri' => Str::slug($title),
        'title' => $title,
        'subtitle' => $faker->paragraph(1),
        'content' => $faker->paragraph(10),
        'author_id' => 1
    ];
});
