@props([
  'post',
])

@auth
  <div
    class="d-flex align-items-center"
    x-cloak
    x-data="{
      isVerified: {{ auth()->user()->hasVerifiedEmail() ? 'true' : 'false' }},
      showVerifyPrompt: false,
      hasLiked: {{ auth()->user()->hasLiked($post) ? 'true' : 'false' }},
      likesCount: {{ $post->likes()->count() }},
      isLoading: false,

      like() {
        if (! this.isVerified) {
          this.showVerifyPrompt = true
          return
        }

        this.isLoading = true
        axios
          .post('/like/{{ addslashes($post->id) }}', {
            _token: '{{ csrf_token() }}',
          })
          .then((res) => {
            this.hasLiked = ! this.hasLiked
            this.likesCount = res.data.likesCount
          })
          .catch((err) => {
            console.error(err)
          })
          .finally(() => {
            this.isLoading = false
          })
      },
    }"
  >
    <button
      @click="like()"
      class="text-dark hover:text-neutral-600"
      :disabled="isLoading"
      :class="{ 'opacity-75 cursor-not-allowed': isLoading}"
    >
      <span class="d-flex align-items-center gap-2">
        <template x-if="isLoading">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            class="h-6 w-6 animate-spin"
            viewBox="0 0 24 24"
          >
            <circle
              cx="12"
              cy="12"
              r="10"
              stroke="currentColor"
              stroke-width="4"
              class="opacity-25"
            />
            <path
              fill="currentColor"
              d="M4 12a8 8 0 0 1 8-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 0 1 4 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              class="opacity-75"
            />
          </svg>
        </template>

        <template x-if="!hasLiked && !isLoading">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
            height="24"
            width="24"
          >
            <path
              d="M14.5998 8.0003H21c1.1046 0 2 .8955 2 2v2.1044c0 .2612-.0512.5199-.1506.7615l-3.0944 7.5149a1 1 0 0 1-.9247.6192H2c-.5523 0-1-.4477-1-1v-10c0-.5523.4477-1 1-1h3.4818a1 1 0 0 0 .817-.4233L11.7522.8514a.5.5 0 0 1 .6321-.159l1.8141.9071c1.0516.5258 1.5947 1.7134 1.3047 2.8529l-.9033 3.548ZM7 10.5878v8.4125h11.1606L21 12.1047v-2.1044h-6.4002c-1.3047 0-2.26-1.229-1.9382-2.4934l.9033-3.548a.5.5 0 0 0-.261-.5705l-.6611-.3306-4.71 6.6726A2.9982 2.9982 0 0 1 7 10.5878Zm-2 .4125H3v8h2v-8Z"
            />
          </svg>
        </template>

        <template x-if="hasLiked && !isLoading">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
            height="24"
            width="24"
          >
            <path
              d="M2 9h3v12H2c-.5523 0-1-.4477-1-1V10c0-.5523.4477-1 1-1Zm5.2929-1.293 6.4005-6.4004a.5.5 0 0 1 .6535-.0464l.8526.6394a1.5 1.5 0 0 1 .5536 1.57L14.5998 8H21c1.1046 0 2 .8954 2 2v2.1043c0 .2613-.0512.52-.1506.7615l-3.0944 7.5149a1.0001 1.0001 0 0 1-.9247.6193H8c-.5523 0-1-.4477-1-1V8.4142a1 1 0 0 1 .2929-.7071Z"
            />
          </svg>
        </template>

        <div class="d-flex flex-row flex-nowrap gap-2">
          <span x-text="likesCount"></span>
          <span class="d-none d-xl-flex">Likes</span>
        </div>
      </span>
    </button>

    <div x-show="showVerifyPrompt" x-cloak>
      <x-verification-prompt-modal />
    </div>
  </div>
@endauth

@guest
  <div x-data="{ showLoginPrompt: false }" class="d-flex align-items-center">
    <button
      @click="showLoginPrompt = true"
      class="text-dark hover:text-neutral-600"
      aria-label="Login to like this post"
    >
      <span class="d-flex align-items-center gap-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 24 24"
          height="24"
          width="24"
        >
          <path
            d="M14.5998 8.0003H21c1.1046 0 2 .8955 2 2v2.1044c0 .2612-.0512.5199-.1506.7615l-3.0944 7.5149a1 1 0 0 1-.9247.6192H2c-.5523 0-1-.4477-1-1v-10c0-.5523.4477-1 1-1h3.4818a1 1 0 0 0 .817-.4233L11.7522.8514a.5.5 0 0 1 .6321-.159l1.8141.9071c1.0516.5258 1.5947 1.7134 1.3047 2.8529l-.9033 3.548ZM7 10.5878v8.4125h11.1606L21 12.1047v-2.1044h-6.4002c-1.3047 0-2.26-1.229-1.9382-2.4934l.9033-3.548a.5.5 0 0 0-.261-.5705l-.6611-.3306-4.71 6.6726A2.9982 2.9982 0 0 1 7 10.5878Zm-2 .4125H3v8h2v-8Z"
          />
        </svg>

        <div class="d-flex flex-row flex-nowrap gap-2">
          <span>{{ $post->likes_count }}</span>
          <span class="d-none d-xl-flex">Likes</span>
        </div>
      </span>
    </button>

    <x-login-prompt-modal />
  </div>
@endguest
