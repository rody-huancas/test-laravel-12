<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $post = new Post();

        // $post->title = 'Post 1';
        // $post->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.';
        // $post->category = 'categoria 1';
        // $post->published_at = now();

        // $post->save();

        Post::factory(100)->create();
    }
}
