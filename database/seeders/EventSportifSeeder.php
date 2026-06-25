<?php

namespace Database\Seeders;

use App\Models\EventSportif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSportifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        EventSportif::create([
            'name' => 'Tournoi Karaté',
            'description' => 'Compétition nationale',
        ]);

        EventSportif::create([
            'name' => 'Championnat Boxe',
            'description' => 'Finale régionale',
        ]);

        EventSportif::create([
            'name' => 'Open Judo',
            'description' => 'Tournoi international',
        ]);

    }
}
