<form action="{{ route('comment.store') }}" method="post">
  @csrf
  <input type="hidden" name="post_id" value="{{ $post->id }}" />

  <div class="border-secondary bg-secondary w-full rounded-lg border">
    <div class="rounded-top-3 bg-light px-4 py-2">
      <label for="comment" class="sr-only">Your comment</label>
      <textarea
        id="comment"
        name="comment"
        rows="4"
        class="bg-light text-secondary w-100 small border-0 px-0"
        placeholder="Write a comment..."
        required
      ></textarea>
    </div>
    <div
      class="d-flex align-items-center justify-content-between border-dark border-t px-3 py-2"
    >
      <button
        type="submit"
        class="d-inline-flex align-items-center bg-dark small fw-medium rounded-3 text-light px-4 py-2 text-center"
      >
        Post comment
      </button>
    </div>
  </div>
</form>
<p class="small text-secondary m-0">
  Remember, contributions to this topic should follow our
  <a href="#" class="underline">Community Guidelines</a>
  .
</p>
