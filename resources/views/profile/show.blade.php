<x-app-layout>
  <div class="pb-8 pt-8">
    <div class="container-fluid px-sm-6 px-lg-8 mx-auto max-w-7xl gap-6 px-3">
      <div class="d-flex flex-column-reverse flex-lg-row row gap-lg-0 gap-4">
        {{-- Post Section --}}
        <main class="col-12 col-lg-9 d-flex flex-column gap-4">
          <x-posts-container :posts="$posts" />
        </main>

        {{-- User Side Section --}}
        <aside class="col p-lg-2 border-start p-0">
          <div class="bg-dark-subtle p-2">
            <x-follow-ctr
              class="d-flex flex-lg-column flex-sm-row flex-column gap-3"
              :user="$user"
            >
              <img
                src="{{ $user->imageUrl('avatar') }}"
                alt="{{ $user->name }}"
                class="img-fluid object-fit-cover w-50 rounded-lg"
              />

              <div class="d-flex flex-column gap-3">
                <h2 class="fs-2 fw-medium m-0">
                  {{ $user->name }}
                </h2>
                <p class="fs-6 fw-regular">{{ $user->bio }}</p>

                {{-- Bottom Section --}}
                <div
                  class="d-flex flex-column justify-content-center bg-body-secondary text-body gap-3 p-2"
                >
                  {{-- Follower Count --}}
                  <div class="d-flex gap-3">
                    <p class="">
                      <span x-text="followersCount"></span>
                      followers
                    </p>
                    <p class="">
                      <span x-text="followingCount"></span>
                      following
                    </p>
                  </div>
                  {{-- Comment/Post Count --}}
                  <div class="d-flex align-items-center gap-2">
                    <span class="d-flex gap-1">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path
                          d="M20 22H4c-.5523 0-1-.4477-1-1V3c0-.5523.4477-1 1-1h16c.5523 0 1 .4477 1 1v18c0 .5523-.4477 1-1 1Zm-1-2V4H5v16h14ZM7 6h4v4H7V6Zm0 6h10v2H7v-2Zm0 4h10v2H7v-2Zm6-9h4v2h-4V7Z"
                        />
                      </svg>
                      <p class="">{{ $posts->total() }}</p>
                    </span>
                    <span class="d-flex gap-1">
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
                      <p class="">3</p>
                    </span>
                  </div>
                </div>

                @auth
                  @if (auth()->user() && auth()->user()->id !== $user->id)
                    <div class="">
                      <button
                        @click="follow()"
                        x-text="following ? 'Unfollow' : 'Follow'"
                        :class="following ? 'bg-danger' : 'bg-black'"
                        class="rounded px-4 py-2 text-white"
                      ></button>
                    </div>
                  @else
                    <div class="">
                      <button
                        onclick="window.location.href='{{ route('profile.edit') }}';"
                        class="bg-dark rounded px-4 py-2 text-white"
                      >
                        Edit Profile
                      </button>
                    </div>
                  @endif
                @else
                  <span x-data="{ showLoginPrompt: false }">
                    <button
                      @click="showLoginPrompt = true"
                      class="bg-primary rounded px-4 py-2 text-white"
                      aria-label="Login to follow this user"
                    >
                      Follow
                    </button>
                    <x-login-prompt-modal />
                  </span>
                @endauth
              </div>
            </x-follow-ctr>
          </div>
        </aside>
      </div>
    </div>
  </div>
</x-app-layout>
