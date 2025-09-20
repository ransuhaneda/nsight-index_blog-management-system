<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $query = Post::with(['user.media', 'media'])
      ->where('published_at', '<=', now())
      ->withCount('likes')
      ->latest();

    $posts = $query->paginate(6);

    return view('post.index', [
      'posts' => $posts,
    ]);
  }

  public function categoryPosts(Category $category): View
  {
    $query = $category->posts()
      ->where('published_at', '<=', now())
      ->with((['user.media', 'media']))
      ->withCount('likes')
      ->latest();

    $posts = $query->paginate(6);


    return view('post.index', [
      'posts' => $posts,
    ]);
  }

  public function followingPosts(): View
  {
    // \DB::listen(function ($query) {
    //   \Log::info($query->sql);
    // });

    $user = auth()->user();
    $query = Post::with(['user.media', 'media'])
      ->where('published_at', '<=', now())
      ->withCount('likes')
      ->latest();

    if ($user) {
      $ids = $user->following()->pluck('users.id');

      if ($ids->isNotEmpty()) {
        $query->whereIn('user_id', $ids);
      } else {
        $query->whereRaw('1 = 0');
      }
    }

    $posts = $query->paginate(6);

    return view('post.index', [
      'posts' => $posts,

    ]);
  }

  public function myPosts(): View
  {
    $user = auth()->user();
    $query = $user->posts()
      ->with(['user', 'media'])
      ->withCount('likes')
      ->latest();

    $posts = $query->paginate(6);

    return view('post.index', [
      'posts' => $posts,
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $username, Post $post): View
  {
    $post->load('comments');

    return view('post.show', [
      'post' => $post,
      'comments' => $post->comments
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    $post = new Post();
    $categories = Category::get();
    $userTimezone = auth()->user()->timezone ?? config('app.timezone');
    $currentDateTime = now()->setTimezone($userTimezone)->format('Y-m-d\TH:i');

    return view('post.create', [
      'post' => $post,
      'categories' => $categories,
      'defaultDateTime' => $currentDateTime,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(PostCreateRequest $request): RedirectResponse
  {

    // $data['slug'] = Str::slug($data['title']);

    // $image = $data['image'];
    // unset($data['image']);
    // $imagePath = $image->store('posts', 'public');
    // $data['image'] = $imagePath;

    // dump('Raw input:', $request->all());

    $data = $request->validated();
    // dump('Validated data:', $data);

    $data['published_at'] = now()->format('Y-m-d H:i:s');

    if ($request->has('published_at_local') && !empty($request->published_at_local)) {
      $userTimezone = auth()->user()->timezone ?? config('app.timezone');

      $userDateTime = Carbon::createFromFormat(
        'Y-m-d\TH:i',
        $request->published_at_local,
        $userTimezone
      );

      $userDateTime->second(now()->second);

      $data['published_at'] = $userDateTime
        ->setTimezone('UTC')
        ->format('Y-m-d H:i:s');
    }


    $data['user_id'] = Auth::id();
    // dump('Data before create:', $data);

    $post = Post::create($data);
    // dd('Saved post:', $post->toArray());

    $post->addMediaFromRequest('image')
      ->toMediaCollection();

    return redirect()->route('myPosts');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post): View
  {
    if ($post->user_id !== Auth::id()) {
      abort(403, 'Unauthorized action.');
    }

    $categories = Category::get();

    return view('post.edit', [
      'post' => $post,
      'categories' => $categories
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(PostUpdateRequest $request, Post $post): RedirectResponse
  {
    if ($post->user_id !== Auth::id()) {
      abort(403, 'Unauthorized action.');
    }

    $data = $request->validated();

    // if ($post->published_at) {
    //   $userTimezone = auth()->user()->timezone ?? config('app.timezone');

    //   $post->published_at = Carbon::parse($post->published_at)
    //     ->setTimezone($userTimezone)
    //     ->format('Y-m-d\TH:i');
    // }

    if ($request->has('published_at_local') && !empty($request->published_at_local)) {
      $userTimezone = auth()->user()->timezone ?? config('app.timezone');

      $userDateTime = Carbon::createFromFormat(
        'Y-m-d\TH:i',
        $request->published_at_local,
        $userTimezone
      );

      $userDateTime->second(now()->second);

      $data['published_at'] = $userDateTime
        ->setTimezone('UTC')
        ->format('Y-m-d H:i:s');
    }


    $post->update($data);

    if ($data['image'] ?? false) {
      $post->addMediaFromRequest('image')
        ->toMediaCollection();
    }

    return redirect()->route('myPosts');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Post $post): RedirectResponse
  {

    if ($post->user_id !== Auth::id()) {
      abort(403, 'Unauthorized action.');
    }

    $post->delete();

    return redirect()->route('myPosts')->with('status', 'success-delete');
  }
}
