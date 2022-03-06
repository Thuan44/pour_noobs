<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'id' => 1,
            'name' => "Gaming",
            'description' => "Apprenez-tous les secrets des pro-gamers",
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => "Coaching",
            'description' => "Apprenez-tous les secrets des managers d'équipes e-sport",
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => "Live Streaming",
            'description' => "Apprenez-tous les secrets des streamers",
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => "Santé e-sport",
            'description' => "Apprenez-tous les secrets des professionnels de la santé spécialisés dans l'e-sport",
        ]);
    }
}
