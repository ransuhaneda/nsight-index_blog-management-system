<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements MustVerifyEmail, HasMedia
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable, InteractsWithMedia;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'name',
    'username',
    'username_unique_id',
    'image',
    'bio',
    'timezone',
    'email',
    'password',
  ];

  public function getDisplayUsernameAttribute(): string
  {
    return "{$this->username}-{$this->username_unique_id}";
  }
  public function setUsernameAttribute($value)
  {
    $this->attributes['username'] = Str::lower(str_replace(' ', '', $value));
  }

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var list<string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  public function registerMediaConversions(?Media $media = null): void
  {
    $this
      ->addMediaConversion('avatar')
      ->width(128)
      ->crop(128, 128);
  }

  public function registerMediaCollection(): void
  {
    $this->addMediaCollection('avatar')->singleFile();
  }

  // public function imageUrl()
  // {
  //   $media = $this->getFirstMedia('avatar');
  //   if (!$media) {
  //     return null;
  //   }
  //   if ($media->hasGeneratedConversion('avatar')) {
  //     return $media->getUrl('avatar');
  //   }
  //   return $media->getUrl();
  // }

  public function imageUrl($conversionName = ''): string
  {
    // if (!$this->image) {
    //   return 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2015%2F10%2F05%2F22%2F37%2Fblank-profile-picture-973460__340.png&f=1&nofb=1&ipt=18624751808fd7c609c3d4884eea22678c5e4031ef0c84c07517d645af34b4e4';
    // }

    // return Storage::url($this->image);

    $media = $this->getFirstMedia('avatar');

    if ($media) {
      try {
        $previewUrl = $media->getUrl($conversionName);

        if ($media->hasGeneratedConversion($conversionName)) {
          return $previewUrl;
        }
      } catch (\Exception $e) {
        return $media->getUrl('avatar');
      }
    }

    return 'https://placehold.net/avatar.png';
  }

  public function posts()
  {
    return $this->hasMany(Post::class);
  }

  public function following()
  {
    return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
  }

  public function followers()
  {
    return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
  }

  public function isFollowedBy(?User $user): bool
  {
    if (!$user) {
      return false;
    }
    return $this->followers()->where('follower_id', $user->id)->exists();
  }

  public function hasLiked(Post $post): bool
  {
    return $post->likes()->where('user_id', $this->id)->exists();
  }
}
