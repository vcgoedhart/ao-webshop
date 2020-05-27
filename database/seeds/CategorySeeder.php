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
        $category = new \App\Category([
            'name' => "Schilderijen",
            'description' => "Hou jij van kunst?!"
        ]);

        $category->save();

        $category = new \App\Category([
            'name' => "Vazen",
            'description' => "Een vaas past wel in mijn huis."
        ]);

        $category->save();

        $category = new \App\Category([
            'name' => "Petten",
            'description' => "Last van zon?"
        ]);

        $category->save();

        $category = new \App\Category([
            'name' => "Tafels",
            'description' => "Gebruik een tafel om spullen op te zetten."
        ]);

        $category->save();

        $category = new \App\Category([
            'name' => "Eten",
            'description' => "Yum!"
        ]);

        $category->save();
    }
}
