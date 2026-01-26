<?php

namespace Database\Seeders;

use App\Models\Character;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Direkt létrehozás Modell osztály segítségével (E-ORM)
        //Ki kell tölteni minden adatot, ami kötelező az DB részéről.
        Character::create([
            "name" => "Jinx",
            "level" => 18,
            "health" => 2543.23,
            "ballanced" => true,
            "description" => "One of the best styled ADC ever."
        ]);

        //Fél-Direkt létrehozás factory osztály segítségével
        //Amit nem adsz meg, azt magától véletlenszerűen kitölti
        Character::factory()->create([
            "name" => "Jhin"
        ]);

        //Factory teljesen véletlenszerűen generált
        Character::factory(10)->create();

        //Modell használata, insert paranccsal
        Character::insert([
            [
                "name" => "Seraphine",
                "level" => 7,
                "health" => 1412.73,
                "ballanced" => true,
                "description" => "One of the best supports.",
                "created_at" => now(), //Insert parancs nem kezeli
                "updated_at" => now() //Insert parancs nem kezeli
            ],
             [
                "name" => "Amumu",
                "level" => 16,
                "health" => 4523.00,
                "ballanced" => false,
                "description" => "He is a sad jungle.",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);

        //Adatbázis kezelő osztály használata, nem kell modell osztály
        //Insert parancs, egyidejűleg több karakter
        DB::table("characters")->insert([
            [
                "name" => "Annie",
                "level" => 14,
                "health" => 3543.23,
                "ballanced" => true,
                "description" => "One of the worst supports.",
                "created_at" => now(), //Insert parancs nem kezeli
                "updated_at" => now() //Insert parancs nem kezeli
            ],
             [
                "name" => "Tresh",
                "level" => 12,
                "health" => 4523.00,
                "ballanced" => false,
                "description" => "He is not Trash.",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
