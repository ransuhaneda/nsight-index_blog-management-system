@php
  $activeClasses =
    'active d-inline-block text-decoration-none rounded-3 bg-dark text-light px-4 py-2 font-semibold';
  $inactiveClasses =
    'd-inline-block fw-normal text-decoration-none text-dark rounded-3 px-4 py-2 transition-colors duration-200 hover:bg-gray-100 hover:text-gray-900';
@endphp

<div
  class="d-flex rounded-3 border-dark bg-light flex-row flex-wrap gap-2 border border-black p-2"
>
  <ul
    class="d-flex justify-content-between align-items-center m-0 flex-row flex-wrap gap-1 p-0"
  >
    @auth
      <li>
        <a
          href="{{ route('myPosts') }}"
          class="{{ Route::currentRouteNamed('myPosts') ? $activeClasses : $inactiveClasses }}"
        >
          My Posts
        </a>
      </li>
    @endauth

    <li>
      <a
        href="{{ route('post.allPosts') }}"
        class="{{ Route::currentRouteNamed('post.allPosts') ? $activeClasses : $inactiveClasses }}"
      >
        Discover
      </a>
    </li>
    @auth
      <li>
        <a
          href="{{ route('post.byFollowing') }}"
          class="{{ Route::currentRouteNamed('post.byFollowing') ? $activeClasses : $inactiveClasses }}"
        >
          Following
        </a>
      </li>
    @endauth

    <button
      class="btn dropdown-toggle m-0"
      type="button"
      data-bs-toggle="dropdown"
      aria-expanded="false"
    >
      Categories
    </button>

    <ul class="dropdown-menu text-secondary mx-auto text-center text-sm">
      @forelse ($categories as $category)
        <li class="dropdown-item">
          <a
            href="{{ route('post.byCategory', $category) }}"
            class="{{ Route::currentRouteNamed('post.byCategory') && request('category')->id === $category->id ? $activeClasses : $inactiveClasses }}"
          >
            {{ $category->name }}
          </a>
        </li>
      @empty
        {{ $slot }}
      @endforelse
    </ul>
  </ul>
</div>
