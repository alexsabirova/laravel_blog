<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Category::factory(3)->create();
        $tags = Tag::factory(10)->create();
        $posts = Post::factory(10)->create();

        foreach ($posts as $post) {
            $tagsIds = $tags->random(3)->pluck('id');
            $post->tags()->attach($tagsIds);
        }
    }
}
