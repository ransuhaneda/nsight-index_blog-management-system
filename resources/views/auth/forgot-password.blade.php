<x-app-layout>
  <div
    class="flex min-h-screen flex-col items-center pt-6 sm:justify-center sm:pt-0"
  >
    <div
      class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg"
    >
      <div class="mb-4 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address
        and we will email you a password reset link that will allow you to
        choose a new one.
      </div>

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input
            id="email"
            class="mt-1 block w-full"
            type="email"
            name="email"
            :value="old('email')"
            required
            autofocus
          />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center justify-end">
          <x-primary-button>Email Password Reset Link</x-primary-button>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
