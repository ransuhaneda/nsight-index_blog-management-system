<template x-teleport="body">
  <div
    x-show="showVerifyPrompt"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    style="display: none"
  >
    <div
      class="position-relative border-dark px-lg-6 mx-lg-0 mx-3 w-full overflow-hidden border bg-white px-3 py-4 sm:max-w-md sm:rounded-lg"
    >
      <button
        @click="showVerifyPrompt = false"
        class="position-absolute end-0 top-0 p-1"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 24 24"
          width="24"
          height="24"
        >
          <path
            d="m11.9997 10.5865 4.9498-4.9498 1.4142 1.4142-4.9498 4.9498 4.9498 4.9497-1.4142 1.4142-4.9498-4.9497L7.05 18.3646l-1.4143-1.4142 4.9498-4.9497-4.9498-4.9498L7.05 5.6367l4.9497 4.9498Z"
          />
        </svg>
      </button>

      <div class="mb-4 text-sm text-gray-600">
        Thanks for signing up! Before getting started, could you verify your
        email address by clicking on the link we just emailed to you? If you
        didn't receive the email, we will gladly send you another.
      </div>

      @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600">
          A new verification link has been sent to the email address you
          provided during registration.
        </div>
      @endif

      <div
        class="d-flex align-items-center justify-content-between flex-lg-row flex-column mt-4 gap-2"
      >
        <form method="POST" action="{{ route('verification.send') }}">
          @csrf

          <div>
            <x-primary-button>Resend Verification Email</x-primary-button>
          </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <button
            type="submit"
            class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          >
            Log Out
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
