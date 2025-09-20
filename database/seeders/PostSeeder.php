<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
  public function run(): void
  {
    // Create 100 posts - the media will be added automatically via the factory
    Post::factory(30)->create();
  }
}