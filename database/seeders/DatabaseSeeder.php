<?php

namespace Database\Seeders;

use App\Models\Athlete;
use App\Models\Categorie;
use App\Models\EventSportif;
use App\Models\User;
use Dom\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*$this->call([
            EventSportifSeeder::class,
        ]);*/


        User::factory(3)->create()->each(function ($user) {

        // Each user has events
        EventSportif::factory(2)->create([
            'user_id' => $user->id
        ])->each(function ($event) use ($user) {



            // Categories in event
            Categorie::factory(3)->create([
                'event_sportif_id' => $event->id
            ])->each(function ($category) use ($user) {

                // Athletes in category
                Athlete::factory(4)->create([
                    'categorie_id' => $category->id,
                    'gender' => $category->gender,
                ]);

            });

        });

    });


    }
}
