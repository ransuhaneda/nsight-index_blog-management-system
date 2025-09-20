<div class="d-flex col flex-column gap-lg-4 gap-3">
  <header class="d-flex flex-column gap-1">
    <h2 class="fs-4 fw-medium text-dark">Profile Information</h2>

    <p class="text-secondary text-sm">
      Update your account's profile information and email address.
    </p>
  </header>

  <form
    method="post"
    action="{{ route('profile.update') }}"
    enctype="multipart/form-data"
    class="d-flex flex-lg-row flex-column gap-3"
  >
    @csrf
    @method('patch')

    <div class="d-flex col flex-column gap-2">
      <!-- avatar -->
      <div class="d-flex flex-lg-row flex-column gap-3">
        <x-user-avatar :user="$user" size="h-20 w-20" />
        <div class="d-flex flex-column justify-content-center">
          <x-input-label
            class="small text-body-secondary cursor-pointer"
            for="image"
            :value="__('Avatar')"
          />
          <x-text-input
            class="d-block w-100 border-secondary bg-light text-body cursor-pointer rounded border p-1 focus:outline-0"
            id="image"
            type="file"
            name="image"
          />
          <x-input-error :messages="$errors->get('image')" class="" />
        </div>
      </div>

      <div>
        <x-input-label
          class="small text-body-secondary cursor-pointer"
          for="name"
          :value="__('Name')"
        />
        <x-text-input
          id="name"
          name="name"
          type="text"
          class="w-100 d-block"
          :value="old('name', $user->name)"
          required
          autofocus
          autocomplete="name"
        />
        <x-input-error class="" :messages="$errors->get('name')" />
      </div>

      <div>
        <x-input-label
          class="small text-body-secondary cursor-pointer"
          for="username"
          :value="__('Username')"
        />
        <x-text-input
          id="username"
          name="username"
          type="text"
          class="w-100 d-block"
          :value="old('username', $user->username)"
          required
          autofocus
          autocomplete="username"
        />
        <x-input-error class="" :messages="$errors->get('username')" />
      </div>

      <!-- Email -->
      <div>
        <x-input-label
          class="small text-body-secondary cursor-pointer"
          for="email"
          :value="__('Email')"
        />
        <x-text-input
          id="email"
          name="email"
          type="email"
          class="w-100 d-block"
          :value="old('email', $user->email)"
          required
          autocomplete="username"
        />
        <x-input-error class="" :messages="$errors->get('email')" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
          <div>
            <p class="small text-body">
              Your email address is
              <span class="text-danger">unverified</span>
              .
              <button
                form="send-verification"
                class="small text-body-secondary text-decoration-underline hover:text-body focus:ring-primary m-0 rounded focus:outline-0 focus:ring-2 focus:ring-offset-2"
              >
                Click here to re-send the verification email.
              </button>
            </p>

            @if (session('status') === 'verification-link-sent')
              <p class="small font-weight-medium text-success">
                A new verification link has been sent to your email address.
              </p>
            @endif
          </div>
        @endif
      </div>
    </div>

    <div class="d-flex col flex-column gap-2">
      <!-- Bio -->
      <div>
        <x-input-label
          class="small text-body-secondary cursor-pointer"
          for="bio"
          :value="__('Bio')"
        />
        <x-input-textarea
          id="bio"
          style="height: 130px"
          class="d-block w-100"
          type="text"
          name="bio"
        >
          {{ old('bio', $user->bio) }}
        </x-input-textarea>
        <x-input-error :messages="$errors->get('content')" class="" />
      </div>

      <!-- Timezone -->
      <div class="">
        <x-input-label
          class="small text-body-secondary cursor-pointer"
          for="timezone"
          :value="__('Timezone')"
        />
        <select
          name="timezone"
          id="timezone"
          class="w-100 d-block border-secondary focus:border-primary focus:ring-primary rounded shadow-sm"
          required
        >
          <option value="">Select Your Timezone</option>
          @foreach ($timezones as $region => $list)
            @if (! empty($region) && is_array($list))
              <optgroup label="{{ $region }}">
                @foreach ($list as $key => $city)
                  <option
                    value="{{ $key }}"
                    @selected(old('timezone', $user->timezone) == $key)
                  >
                    {{ $city }} ({{ $key }})
                  </option>
                @endforeach
              </optgroup>
            @else
              <option
                value="{{ $region }}"
                @selected(old('timezone', $user->timezone) == $region)
              >
                {{ $region }}
              </option>
            @endif
          @endforeach
        </select>

        <x-input-error :messages="$errors->get('timezone')" />
        <p class="small text-body-tertiary mt-2">
          This ensures dates and times are displayed correctly for you.
        </p>
      </div>

      <!-- Save Btn -->
      <div class="d-flex align-items-center gap-4">
        <x-primary-button>Save</x-primary-button>

        <x-status.update-status />
      </div>
    </div>
  </form>

  <form
    id="send-verification"
    method="post"
    action="{{ route('verification.send') }}"
  >
    @csrf
  </form>
</div>
