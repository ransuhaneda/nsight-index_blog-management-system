<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

  public function index(): View
  {
    $comments = Comment::with([
      'user' => function ($query) {
        $query->select('id', 'name', 'avatar');
      }
    ])->orderBy('published_at', 'desc');

    return view('comment.comment-section', [
      'comments' => $comments
    ]);
  }

  public function store(Request $request): RedirectResponse
  {
    $validated = $request->validate([
      'comment' => 'required|string|max:1000',
    ]);

    // dump($comment);

    $comment = new Comment();
    $comment->content = $validated['comment'];
    $comment->user_id = auth()->id();
    $comment->post_id = $request->post_id;

    $comment->save();

    return back()->with('status', 'Comment posted successfully!');
  }

  public function destroy(Comment $comment)
  {
    if ($comment->user_id !== Auth::id()) {
      abort(403, 'Unauthorized action.');
    }

    $comment->delete();

    return back()->with('status', 'success-delete');
  }
}
