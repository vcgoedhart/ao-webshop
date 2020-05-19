<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Schilderijen",
            'description' => "Hou jij van kunst?!",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => "Vazen",
            'description' => "Vind jij vazen kapot gooien leuk? Koop hier een prachtige vaas.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => "Eten",
            'description' => "Heb je trek? Koop hier uw overheerlijke lekkernijen.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => "Petten",
            'description' => "Ben jij een vampier en je hou niet van de zon? Kom!",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => "Tafels",
            'description' => "Wil je graat een tafel gebruiken je dagelijks gebruik? Hier!",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
