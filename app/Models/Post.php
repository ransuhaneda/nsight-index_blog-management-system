<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model implements HasMedia
{
  use HasFactory;
  use InteractsWithMedia;
  use HasSlug;

  protected $fillable = [
    // 'image',
    'title',
    'slug',
    'content',
    'category_id',
    'user_id',
    'published_at'
  ];

  protected function casts(): array
  {
    return [
      'published_at' => 'datetime',
    ];
  }

  public function registerMediaConversions(?Media $media = null): void
  {
    $this
      ->addMediaConversion('preview')
      ->width(400);

    $this
      ->addMediaConversion('large')
      ->width(1200);
  }

  public function registerMediaCollections(): void
  {
    $this->addMediaCollection('default')
      ->singleFile();
  }

  public function imageUrl($conversionName = '')
  {
    $media = $this->getFirstMedia();
    if (!$media) {
      return null;
    }
    if ($media->hasGeneratedConversion($conversionName)) {
      return $media->getUrl($conversionName);
    }
    return $media->getUrl();
  }

  public function getSlugOptions(): SlugOptions
  {
    return SlugOptions::create()
      ->generateSlugsFrom('title')
      ->saveSlugsTo('slug');
  }



  // public function imageUrl($conversionName = ''): string
  // {
  //   // if (!$this->image) {
  //   //   return 'https://picsum.photos/400';
  //   // } elseif (Storage::exists($this->image)) {
  //   //   return Storage::url($this->image);
  //   // }

  //   // return $this->getFirstMedia()->getUrl('preview');


  //   $media = $this->getFirstMedia();

  //   if ($media) {
  //     try {
  //       $previewUrl = $media->getUrl($conversionName);

  //       if ($previewUrl) {
  //         return $previewUrl;
  //       }
  //     } catch (\Exception $e) {
  //       return $media->getUrl();
  //     }
  //   }

  //   if ($this->image && Storage::exists($this->image)) {
  //     return Storage::url($this->image);
  //   }

  //   return 'https://placehold.net/400x400.png';
  // }

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function likes(): HasMany
  {
    return $this->hasMany(Like::class);
  }

  public function comments(): HasMany
  {
    return $this->hasMany(Comment::class);
  }

  public function readTime($wordsPerMinute = 260): float|int
  {
    $wordcount = str_word_count(strip_tags($this->content));
    $minutes = ceil($wordcount / $wordsPerMinute);

    return max(1, $minutes);
  }
}
