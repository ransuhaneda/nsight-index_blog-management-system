<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class PublicProfileController extends Controller
{
  public function show(User $user): View
  {
    $query = $user->posts()
      ->where('published_at', '<=', now())
      ->with((['user.media', 'media']))
      ->withCount('likes')
      ->latest();

    $posts = $query->paginate(6);

    return view('profile.show', [
      'user' => $user,
      'posts' => $posts
    ]);
  }
}
