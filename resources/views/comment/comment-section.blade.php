<section class="container mx-auto px-4 py-6">
  <!-- Header with comment count -->
  <header class="mb-5">
    <h2 class="h5 fw-semibold text-dark mb-3">
      Comments ({{ $comments->count() }})
    </h2>

    <x-status.delete-status />

    @include('comment.partials.comment-form')
  </header>

  <!-- Comments List -->
  <div class="space-y-5">
    @forelse ($comments as $comment)
      <div class="border-bottom mb-4 pb-4">
        <!-- Comment Header -->
        <div class="d-flex align-items-start mb-2 gap-3">
          <!-- User Avatar -->

          <img
            src="{{ $comment->user->imageUrl('avatar') }}"
            alt="{{ $comment->user->name ?? 'Deleted User' }}"
            class="rounded-circle"
            width="40"
            height="40"
          />

          <div class="flex-grow-1">
            <div class="d-flex align-items-center gap-2">
              <p class="fw-medium text-dark mb-0">
                <a
                  href="{{ route('profile.show', $comment->user) }}"
                  class="text-decoration-none text-dark underline"
                >
                  {{ $comment->user->name ?? 'Deleted User' }}
                </a>
              </p>
              @if ($comment->user_id === $post->user_id)
                <span class="bg-dark text-light small rounded-pill px-2 py-1">
                  Author
                </span>
              @endif
            </div>
            <p class="text-secondary small">
              {{ $comment->created_at->diffForHumans() }}
            </p>
          </div>

          <!-- Dropdown Menu (optional) -->
          @auth
            @if (auth()->id() === $comment->user_id)
              <div class="relative" x-data="{ open: false }">
                <button
                  @click="open = !open"
                  class="p-1 text-gray-400 hover:text-gray-600"
                >
                  <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"
                    />
                  </svg>
                </button>

                <div
                  x-show="open"
                  @click.away="open = false"
                  class="absolute right-0 z-10 mt-2 w-32 rounded-md border border-gray-200 bg-white py-1 shadow-lg"
                  style="display: none"
                >
                  <button
                    class="text-dark block w-full px-4 py-2 text-left text-sm hover:bg-gray-100"
                  >
                    Edit
                  </button>

                  <form
                    action="{{ route('comment.destroy', $comment) }}"
                    method="POST"
                  >
                    @csrf
                    @method('DELETE')
                    <button
                      type="submit"
                      class="block w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-gray-100"
                      onclick="return confirm('Are you sure you want to delete this comment?')"
                    >
                      Delete
                    </button>
                  </form>
                </div>
              </div>
            @endif
          @endauth
        </div>

        <!-- Comment Content -->
        <div class="text-dark mb-2">
          {!! nl2br(e($comment->content)) !!}
        </div>

        <!-- Comment Actions -->
        <div class="d-flex gap-3">
          <button
            class="flex items-center gap-1 text-sm text-gray-500 hover:text-gray-700"
          >
            <svg
              class="h-4 w-4"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905a3.61 3.61 0 01-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"
              />
            </svg>
            <span>Like</span>
          </button>

          <button
            class="flex items-center gap-1 text-sm text-gray-500 hover:text-gray-700"
          >
            <svg
              class="h-4 w-4"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
              />
            </svg>
            <span>Reply</span>
          </button>
        </div>
      </div>
    @empty
      <!-- Empty State -->
      <div class="py-5 text-center">
        <svg
          class="mx-auto mb-4 h-16 w-16 text-gray-300"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1"
            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
          />
        </svg>
        <p class="text-muted">No responses yet</p>
        <p class="text-muted">Be the first to share your thoughts!</p>
      </div>
    @endforelse
  </div>
</section>
