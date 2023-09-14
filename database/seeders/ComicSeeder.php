<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Moldel
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function     run(): void
    {
        $comics = config('comic');

        // per non far ripetere il seeder
        Comic::truncate();

        foreach ($comics as $comicIndex) {
            $comic = new Comic();
            $comic->src = $comicIndex['thumb'];
            $comic->title = $comicIndex['title'];
            $comic->series = $comicIndex['series'];
            $comic->price = $comicIndex['price'];
            $comic->sale_date = $comicIndex['sale_date'];
            $comic->save();
        }
    }
}
