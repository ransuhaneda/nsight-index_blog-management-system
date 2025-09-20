@props([
  'user',
])

<nav
  x-data="{ open: false }"
  class="border-b border-neutral-900 bg-neutral-200"
>
  <!-- Primary Navigation Menu -->
  <div
    class="mx-auto flex max-w-[1440px] flex-row items-center justify-between px-4 sm:px-6"
  >
    <!-- Logo -->
    <a href="{{ route('dashboard') }}">
      <img
        src="{{ asset('assets/logo.svg') }}"
        class="text-decoration-none block h-6 w-auto fill-current text-gray-800"
        alt="nsight index logo"
      />


    <div class="flex h-16 justify-between">
      <div class="d-flex align-items-center justify-content-between gap-2">
      <!-- New Post Button -->
        <a href="{{ route('post.create') }}" class="d-none d-sm-inline-block">
          <x-primary-button>New Insight</x-primary-button>
        </a>
        <a href="{{ route('post.create') }}" class="d-sm-none">
          <x-primary-button>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
              width="24"
              height="24"
            >
              <path
                d="M9 4c1.1046 0 2 .8954 2 2v6.8271c-.8942-.6898-2.034-1.0966-3.3356-1.3135l-.3288 1.9728c1.3806.2301 2.2618.6664 2.8046 1.2544C10.67 15.3147 11 16.167 11 17.5c0 1.3807-1.1193 2.5-2.5 2.5S6 18.8807 6 17.5v-.3507c.43.1433.8763.2606 1.3356.3371l.3288-1.9728c-.743-.1238-1.4892-.3992-2.2353-.7537C4.5816 14.3573 4 13.499 4 12.5c0-.8347.2076-1.4915.5587-1.9743.3457-.4753.8832-.8554 1.6838-1.0556L7 9.2808V6c0-1.1046.8954-2 2-2Zm3-.6458C11.2671 2.5238 10.1947 2 9 2 6.7909 2 5 3.7909 5 6v1.7742c-.851.3422-1.5486.8736-2.0587 1.5751C2.2923 10.2415 2 11.3347 2 12.5c0 1.5652.7957 2.9367 2 3.7422V17.5C4 19.9853 6.0147 22 8.5 22c1.4136 0 2.675-.6518 3.5-1.6713C12.825 21.3482 14.0864 22 15.5 22c2.4853 0 4.5-2.0147 4.5-4.5v-1.2578c1.2044-.8055 2-2.177 2-3.7422 0-1.1653-.2924-2.2585-.9413-3.1507-.5101-.7014-1.2076-1.2329-2.0587-1.575V6c0-2.2091-1.7909-4-4-4-1.1947 0-2.2671.5238-3 1.3542Zm6 13.7951V17.5c0 1.3807-1.1193 2.5-2.5 2.5S13 18.8807 13 17.5c0-1.333.33-2.1853.8598-2.7592.5428-.588 1.424-1.0243 2.8046-1.2544l-.3288-1.9728c-1.3016.2169-2.4414.6237-3.3356 1.3135V6c0-1.1046.8954-2 2-2s2 .8954 2 2v3.2808l.7575.1893c.8006.2002 1.3381.5803 1.6838 1.0556.3511.4828.5587 1.1396.5587 1.9743 0 .999-.5816 1.8573-1.4291 2.2599-.7461.3545-1.4924.6299-2.2353.7537l.3288 1.9728c.4593-.0765.9055-.1938 1.3356-.3371Z"
              />
            </svg>
          </x-primary-button>
        </a>

        <!-- Hamburger -->
        <div class="flex items-center sm:hidden">
          <button
            @click="open = ! open"
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
          >
            <svg
              class="h-6 w-6"
              stroke="currentColor"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                :class="{'hidden': open, 'inline-flex': ! open }"
                class="inline-flex"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
              <path
                :class="{'hidden': ! open, 'inline-flex': open }"
                class="hidden"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>

        @guest
           <!-- Settings Dropdown -->
          <div class="hidden sm:flex sm:items-center">
            <ul class="d-flex flex-row align-items-center gap-2 justify-content-center m-0 p-0">
              <li class="bg-dark px-3 py-2 rounded-lg">
                <a
                  href="{{ route('register') }}"
                  class="text-light text-decoration-none"
                >
                  Create an account
                </a>
              </li>
              <li class="px-3 py-2 rounded-lg">
                <a
                  href="{{ route('login') }}"
                  class="text-dark text-decoration-none"
                >
                  Login
                </a>
              </li>
            </ul>
          </div>
        @endguest

        @auth
          <!-- Settings Dropdown -->
          <div class="hidden sm:flex sm:items-center">
            <x-dropdown align="right" width="48">
              <x-slot name="trigger">
                <button
                  class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
                >
                  <div class="fs-6">
                    <p class="fw-medium m-0">{{ Auth::user()->name }}</p>
                  </div>
                  <div class="ms-1">
                    <svg
                      class="h-4 w-4 fill-current"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                </button>
              </x-slot>

              <x-slot name="content">
                <x-dropdown-link href="{{ route('profile.show', auth()->user()->username) }}">
                  Profile
                </x-dropdown-link>
                <x-dropdown-link :href="route('myPosts')">
                  My Posts
                </x-dropdown-link>
                <x-dropdown-link :href="route('profile.edit')">
                  Settings
                </x-dropdown-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-dropdown-link
                    :href="route('logout')"
                    onclick="event.preventDefault();
                                                  this.closest('form').submit();"
                  >
                    Log Out
                  </x-dropdown-link>
                </form>
              </x-slot>
            </x-dropdown>
          </div>
        @endauth

      </div>
    </div>
  </div>

  @auth
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
      <!-- Responsive Settings Options -->
      <div class="border-t border-gray-200 pb-1 pt-4">
        <div class="px-4">
          <div class="text-base font-medium text-gray-800">
            {{ Auth::user()->name }}
          </div>
          <div class="text-sm font-medium text-gray-500">
            {{ Auth::user()->email }}
          </div>
        </div>

        <div class="mt-3 space-y-1">
          <x-responsive-nav-link :href="route('profile.edit')">
            Profile
          </x-responsive-nav-link>

          <x-responsive-nav-link :href="route('myPosts')">
            My Posts
          </x-responsive-nav-link>

          <x-responsive-nav-link :href="route('profile.edit')">
            Settings
          </x-responsive-nav-link>

          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link
              :href="route('logout')"
              onclick="event.preventDefault();
                                        this.closest('form').submit();"
            >
              Log Out
            </x-responsive-nav-link>
          </form>
      </div>
    </div>
  @endauth


  @guest
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="mt-3 space-y-1">
          <x-responsive-nav-link :href="route('login')">
            Login
          </x-responsive-nav-link>

          <x-responsive-nav-link :href="route('register')">
            Register
          </x-responsive-nav-link>

          
      </div>
    </div>
  @endguest
</nav>
