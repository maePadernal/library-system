<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $posts = Post::factory()->count(5)->create();

        // Add comments under each post
        foreach ($posts as $post) {
            Comment::factory()
                ->count(3) // number of comments per post
                ->create([
                    'post_id' => $post->id,
                ]);
        }
    }
}
