<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\ContentFactory;
use Illuminate\Database\Seeder;

use App\Models\Content;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Content::factory(33)->create()->each(function ($content) {
            $numReviews = random_int(5, 30);

            Review::factory()
                ->count($numReviews)
                ->good()
                ->for($content)
                ->create();
        });

        Content::factory(33)->create()->each(function ($content) {
            $numReviews = random_int(5, 30);

            Review::factory()
                ->count($numReviews)
                ->average()
                ->for($content)
                ->create();
        });

        Content::factory(34)->create()->each(function ($content) {
            $numReviews = random_int(5, 30);

            Review::factory()
                ->count($numReviews)
                ->bad()
                ->for($content)
                ->create();
        });
    }
}
