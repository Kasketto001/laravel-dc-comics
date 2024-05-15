<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('db.comics');

        foreach ($comics as $comic) {

            $item = new Comic();
            $item->title = $comic['title'];
            $item->description = $comic['description'];
            $item->thumb = $comic['thumb'];
            $item->price = $comic['price'];
            $item->sale_date = $comic['sale_date'];
            $item->type = $comic['type'];
            $item->save();

        }
    }
}
