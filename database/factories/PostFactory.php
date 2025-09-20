<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  protected $model = Post::class;

  public function definition(): array
  {
    $title = $this->faker->sentence();

    return [
      'title' => $title,
      'slug' => \Illuminate\Support\Str::slug($title),
      'content' => $this->faker->paragraphs(10, true),
      'category_id' => Category::inRandomOrder()->first()->id,
      'user_id' => User::inRandomOrder()->first()->id,
      'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
    ];
  }

  public function configure(): PostFactory
  {
    return $this->afterCreating(function (Post $post): void {
      $this->addMediaToPost($post);
    });
  }

  protected function addMediaToPost(Post $post): void
  {
    $imageSources = [
      'https://picsum.photos/3000?random=1',
      'https://picsum.photos/3000?random=2',
      'https://picsum.photos/3000?random=3',
      'https://picsum.photos/3000?random=4',
    ];

    try {
      $imageUrl = $this->faker->randomElement($imageSources);

      $post->addMediaFromUrl($imageUrl)
        ->toMediaCollection('default');

    } catch (\Exception $e) {
      logger()->error('Failed to add media (Fallback will apply): ' . $e->getMessage());
    }
  }
}