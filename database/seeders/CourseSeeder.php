<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => "Level up sur League of Legends",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Doublelift",
            'image' => "doublelift.png",
            'price' => "129.99",
            'category_id' => 1
        ]);

        DB::table('courses')->insert([
            'name' => "Maîtrise les moves de Fortnite",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Benjyfishy",
            'image' => "benjyfishy.png",
            'price' => "35.99",
            'category_id' => 1
        ]);

        DB::table('courses')->insert([
            'name' => "Deviens coach pour une équipe e-sport",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Snip3down",
            'image' => "snip3down.png",
            'price' => "79.99",
            'category_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => "Deviens le meilleur livestreamer",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Ken Kanaki",
            'image' => "kenkaneki.png",
            'price' => "49.99",
            'category_id' => 3
        ]);

        DB::table('courses')->insert([
            'name' => "Apprends tout sur la santé e-sport ",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Corejj",
            'image' => "corejj.png",
            'price' => "25.99",
            'category_id' => 4
        ]);


        /*
        |--------------------------------------------------------------------------
        | More data for pagination
        |--------------------------------------------------------------------------
        */
        DB::table('courses')->insert([
            'name' => "Level up sur League of Legends",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Doublelift",
            'image' => "doublelift.png",
            'price' => "129.99",
            'category_id' => 1
        ]);

        DB::table('courses')->insert([
            'name' => "Maîtrise les moves de Fortnite",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Benjyfishy",
            'image' => "benjyfishy.png",
            'price' => "35.99",
            'category_id' => 1
        ]);

        DB::table('courses')->insert([
            'name' => "Deviens coach pour une équipe e-sport",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Snip3down",
            'image' => "snip3down.png",
            'price' => "79.99",
            'category_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => "Deviens le meilleur livestreamer",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Ken Kanaki",
            'image' => "kenkaneki.png",
            'price' => "49.99",
            'category_id' => 3
        ]);

        DB::table('courses')->insert([
            'name' => "Apprends tout sur la santé e-sport ",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Corejj",
            'image' => "corejj.png",
            'price' => "25.99",
            'category_id' => 4
        ]);

        DB::table('courses')->insert([
            'name' => "Level up sur League of Legends",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Doublelift",
            'image' => "doublelift.png",
            'price' => "129.99",
            'category_id' => 1
        ]);

        DB::table('courses')->insert([
            'name' => "Maîtrise les moves de Fortnite",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Benjyfishy",
            'image' => "benjyfishy.png",
            'price' => "35.99",
            'category_id' => 1
        ]);

        DB::table('courses')->insert([
            'name' => "Deviens coach pour une équipe e-sport",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Snip3down",
            'image' => "snip3down.png",
            'price' => "79.99",
            'category_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => "Deviens le meilleur livestreamer",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Ken Kanaki",
            'image' => "kenkaneki.png",
            'price' => "49.99",
            'category_id' => 3
        ]);

        DB::table('courses')->insert([
            'name' => "Apprends tout sur la santé e-sport ",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quae similique quibusdam minus ipsa nam architecto, debitis numquam, suscipit voluptatibus cum hic amet inventore autem tempore aperiam ab, illum dolorum quisquam voluptatem voluptatum fugit non asperiores! Quis, tempore! Nesciunt, distinctio!",
            'author' => "Corejj",
            'image' => "corejj.png",
            'price' => "25.99",
            'category_id' => 4
        ]);
    }
}
