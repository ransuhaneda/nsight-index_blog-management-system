<div class="d-flex align-items-center">
  <button
    class="text-grey-300 hover:text-neutral-600"
    onclick="window.location.href='{{
      route('post.show', [
        'username' => $post->user->username,
        'post' => $post->slug,
      ])
    }}';"
  >
    <div class="flex flex-row gap-2">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="currentColor"
        viewBox="0 0 24 24"
        height="24"
        width="24"
      >
        <path
          d="M10 3h4c4.4183 0 8 3.5817 8 8s-3.5817 8-8 8v3.5c-5-2-12-5-12-11.5 0-4.4183 3.5817-8 8-8Zm2 14h2c3.3137 0 6-2.6863 6-6s-2.6863-6-6-6h-4c-3.3137 0-6 2.6863-6 6 0 3.61 2.462 5.9656 8 8.4798V17Z"
        />
      </svg>

      <div class="d-flex gap-2">
        <span>{{ $post->comments->count() }}</span>
        <span class="d-none d-xl-flex">Comments</span>
      </div>
    </div>
  </button>
</div>
