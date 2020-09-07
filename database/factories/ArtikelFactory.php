<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {

    return [
        'judul' => $faker->sentence,
        'penulis' => $faker->name,
        'konten' => $faker->paragraph($nbSentences = 5),
        'image' => 'artikel_images/'.$faker->image($dir=storage_path('app/public/artikel_images'), $width=400, $height = 400, 'cats', false)
    ];
});
