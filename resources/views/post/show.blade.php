<x-app-layout>
  <div class="py-4">
    <div class="mx-auto max-w-4xl">
      <article class="overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg">
        <div class="flex flex-col gap-4">
          <h1 class="text-2xl font-bold">{{ $post->title }}</h1>

          {{-- Avatar Section --}}
          <div class="flex gap-4">
            <x-user-avatar :user="$post->user" size="h-12 w-12" />

            <div>
              <x-follow-ctr :user="$post->user" class="flex gap-2">
                <a
                  href="{{ route('profile.show', $post->user) }}"
                  class="text-decoration-none font-bold hover:underline"
                >
                  {{ $post->user->name }}
                </a>
                &middot;

                @auth
                  <button
                    @click="follow()"
                    x-text="following ? 'Unfollow' : 'Follow'"
                    :class="following ? 'text-red-600' : 'text-emerald-600' "
                  ></button>
                @else
                  <span x-data="{ showLoginPrompt: false }">
                    <button
                      @click="showLoginPrompt = true"
                      class="text-emerald-600"
                      aria-label="Login to follow this user"
                    >
                      Follow
                    </button>

                    <x-login-prompt-modal />
                  </span>
                @endauth
              </x-follow-ctr>

              <div class="flex gap-2 text-sm text-gray-500">
                <span>{{ $post->readTime() }} min</span>
                &middot;
                <span>{{ $post->published_at->format('M d, Y') }}</span>
                {{-- <x-time-display :post="$post" :timezone="$timezone" /> --}}
              </div>
            </div>
          </div>

          {{-- Edit Delete Posts --}}
          @if ($post->user_id === Auth::id())
            <div class="flex items-center gap-2 border-y border-gray-200 py-2">
              <x-primary-button href="{{ route('post.edit', $post) }}">
                Edit Post
              </x-primary-button>

              {{-- Delete Btn --}}
              <x-danger-button
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-post-deletion')"
              >
                Delete Post
              </x-danger-button>
            </div>
            {{-- Delete Confirm Modal --}}
            <x-modal name="confirm-post-deletion" focusable>
              <form
                method="post"
                action="{{ route('post.destroy', $post) }}"
                class="p-6"
              >
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                  Are you sure you want to delete this post?
                </h2>

                <div class="mt-6 flex justify-end">
                  <x-secondary-button x-on:click="$dispatch('close')">
                    Cancel
                  </x-secondary-button>

                  <x-danger-button class="ms-3">Delete Post</x-danger-button>
                </div>
              </form>
            </x-modal>
          @endif

          <x-like-button :post="$post" />

          {{-- Content Section --}}
          <div class="flex flex-col gap-3">
            <img
              src="{{ $post->imageUrl('large') }}"
              alt="{{ $post->title }}"
              class=""
            />
            {{ $post->content }}
          </div>

          {{-- Category Tags section --}}
          <div class="mt-3">
            <span class="rounded-2xl bg-neutral-200 px-4 py-2 text-sm">
              {{ $post->category->name }}
            </span>
          </div>

          <x-like-button :post="$post" />
        </div>
      </article>
      @include('comment.comment-section')
    </div>
  </div>
</x-app-layout>
