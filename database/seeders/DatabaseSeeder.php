<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $categories = [
      'Technology',
      'Health',
      'Politics',
      'Social Media',
      'Creative',
      'Sports',
      'Science'
    ];

    foreach ($categories as $category) {
      Category::firstOrCreate(['name' => $category]);
    }

    User::factory()->create([
      'name' => 'Super Admin',
      'username' => 'superadmin',
      'email' => 'admin@example.com',
      'email_verified_at' => now(),
      'bio' => 'Can access /telescope for monitoring',
      'timezone' => 'UTC',
      'password' => 'admin123'
    ]);

    User::factory()->create([
      'name' => 'User1',
      'email' => 'user1@example.com',
      'bio' => 'A normal Bio for user 1'
    ]);

    $this->call(PostSeeder::class);
  }
}
