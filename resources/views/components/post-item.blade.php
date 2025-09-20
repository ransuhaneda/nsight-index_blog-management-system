<div class="col-lg-3 flex-fill p-0">
  <div class="bg-light rounded-top-3 position-relative border border-black">
    {{-- Card Image --}}
    <a
      href="{{
        route('post.show', [
          'username' => $post->user->username,
          'post' => $post->slug,
        ])
      }}"
    >
      <img
        class="img-fluid w-100 object-fit-cover rounded-top-2"
        style="height: 250px; min-height: 250px"
        src="{{ $post->imageUrl('preview') }}"
        alt="{{ $post->title }}"
        loading="lazy"
      />
    </a>

    {{-- Category badge --}}
    @if ($post->imageUrl())
      <a
        href="{{ route('post.byCategory', $post->category) }}"
        class="rounded-pill bg-dark position-absolute end-0 top-0 z-0 m-3 px-3 py-2"
      >
        <p class="small text-light text-decoration-none m-0">
          {{ $post->category->name }}
        </p>
      </a>
    @endif

    {{-- Card Body --}}
    <div class="d-flex flex-column justify-content-between gap-3 p-3">
      <div class="card-body d-flex flex-column gap-3">
        {{-- Post title section --}}
        <div class="d-flex flex-column gap-3">
          <a
            class="text-decoration-none"
            href="{{
              route('post.show', [
                'username' => $post->user->username,
                'post' => $post->slug,
              ])
            }}"
          >
            <h5
              class="fs-3 m-0 font-bold tracking-tight text-gray-900 hover:text-indigo-600"
              style="
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                min-height: 70px;
                max-height: 70px;
              "
            >
              {{ $post->title }}
            </h5>
          </a>
          {{-- Post content section --}}
          <p
            class="m-0 font-light text-gray-700"
            style="
              display: -webkit-box;
              -webkit-line-clamp: 3;
              -webkit-box-orient: vertical;
              overflow: hidden;
              min-height: 72px;
              max-height: 72px;
            "
          >
            {{ $post->content }}
          </p>

          {{-- Read More section --}}
          <span class="d-none d-lg-flex">
            <a
              href="{{
                route('post.show', [
                  'username' => $post->user->username,
                  'post' => $post->slug,
                ])
              }}"
              class="text-decoration-none d-inline-flex align-items-center rounded-3 bg-dark fs-6 fw-medium text-light px-3 py-2 text-center"
            >
              Read more
              <svg
                class="ms-2 h-3.5 w-3.5 rtl:rotate-180"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 10"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M1 5h12m0 0L9 1m4 4L9 9"
                />
              </svg>
            </a>
          </span>
        </div>

        <div
          class="d-flex align-items-center justify-content-between flex-wrap gap-3 text-gray-700"
        >
          {{-- Like/Comment section --}}
          <div
            class="d-flex flex-sm-row align-items-start align-items-sm-center justify-content-center flex-column gap-2"
          >
            <div class="d-flex gap-2">
              <x-like-button :post="$post" />
              <x-comment-button :post="$post" />
            </div>
          </div>

          {{-- Avatar section --}}
          @if (! Route::is('profile.show'))
            <div class="d-flex align-items-center flex-row gap-2">
              <x-user-avatar :user="$post->user" size="h-9 w-9" />
              <div class="d-flex flex-column fw-medium text-dark text-sm">
                <a
                  href="{{ route('profile.show', $post->user) }}"
                  class="text-decoration-none text-dark fw-bold hover:underline"
                >
                  {{ $post->user->name }}
                </a>
                <div class="fw-light d-flex gap-1">
                  <span>{{ $post->published_at->format('M d, Y') }}</span>
                  <span>({{ $post->published_at->diffForHumans() }})</span>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
