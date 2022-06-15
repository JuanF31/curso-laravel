<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i = 0; $i < 20; $i++){
            $categories = Category::inRandomOrder()->first();
            $title = Str::random(20);

            Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos recusandae dolor voluptatibus ipsam dolores! Nemo, inventore nobis earum non suscipit officiis nisi error veritatis in iure ab exercitationem cumque fuga.</p>",
                'category_id' => $categories->id, 
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
                'posted' => 'yes', 
                'image' => "image-post-$i.png"
            ]);
        }

        // $categories = Category::all();
        // foreach ($categories as $key => $value) {
        //     for ($i = 0; $i < 20; $i++) { 
        //         Post::create(
        //             [
        //                 'title' => "Titulo $i",
        //                 'slug' => "titulo-$i",
        //                 'content' => "Contenido del post $i",
        //                 'category_id' => $key, 
        //                 'description' => "Descripcion del post $i", 
        //                 'posted' => 'not', 
        //                 'image' => "image-post-$i.png"
        //             ]
        //         );
        //     }
        // }
    }
}
