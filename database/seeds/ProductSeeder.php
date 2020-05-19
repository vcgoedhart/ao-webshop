<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ------------------------------------------ // 1

        DB::table('products')->insert([
            'name' => "Mona Lisa",
            'description' => "Klassieker. Prachtige jonge dame.",
            'price' => rand(100, 500),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Ben",
            'description' => "Twijfelachtige creaties.",
            'price' => rand(100, 500),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Vinnoe",
            'description' => "Ik heb mijn oor nog steeds.",
            'price' => rand(1, 2),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Damian",
            'description' => "Niet aangeraden. Zeer unieke manier van kunst ;)",
            'price' => rand(1000, 5000),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Rogier",
            'description' => "Gamer.",
            'price' => rand(1, 5),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ------------------------------------------ // 2

        DB::table('products')->insert([
            'name' => "Rode Vaas",
            'description' => "De meest aantrekkelijkste kleur die er is.",
            'price' => rand(10, 20),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Blauwe Vaas",
            'description' => "Blauw is een kinder kleur.",
            'price' => rand(10, 20),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Groene vaas",
            'description' => "Gras is groen en deze is vaas ook.",
            'price' => rand(10, 20),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Aparte vaas",
            'description' => "Deze vaas is bijzonder.",
            'price' => rand(10, 20),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Unieke vaas",
            'description' => "Niemand koopt hem.",
            'price' => rand(10, 20),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // ------------------------------------------ // 3

        DB::table('products')->insert([
            'name' => "Kreeft",
            'description' => "Wie eet er nou kreeft.",
            'price' => rand(1, 10),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Tomaat",
            'description' => "Goed voor je hart.",
            'price' => rand(1, 10),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Rijst",
            'description' => "Van rijst groeit je haar terug.",
            'price' => rand(1, 10),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Pizza",
            'description' => "Hmmm. Lekker pizza!",
            'price' => rand(1, 10),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Broccoli",
            'description' => "Brocoooli.",
            'price' => rand(1, 10),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // ------------------------------------------ // 4

        DB::table('products')->insert([
            'name' => "HUF",
            'description' => "Dit is een coole pet.",
            'price' => rand(10, 50),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Nike",
            'description' => "Dit merk is zeer algemeen.",
            'price' => rand(10, 50),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "North Face",
            'description' => "Mensen die veel geld hebben kopen dit.",
            'price' => rand(10, 50),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Calvin Klein",
            'description' => "Mensen die merk dragen kopen dit!",
            'price' => rand(10, 50),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "DEUS",
            'description' => ".",
            'price' => rand(10, 50),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // ------------------------------------------ // 5

        DB::table('products')->insert([
            'name' => "Moderne tafel",
            'description' => "Dit doe je in je eigen huis.",
            'price' => rand(200, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Tafel uit 1969",
            'description' => "Uhhhhhh. Iets.",
            'price' => rand(200, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Plastic Tafel",
            'description' => "Voor kleine kinderen.",
            'price' => rand(200, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "Industriële tafel",
            'description' => "Past goed in je fabriek.",
            'price' => rand(200, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => "De tafel",
            'description' => "Dit is je standaard tafel.",
            'price' => rand(200, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
