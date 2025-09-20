@props([
  'posts',
])

<div
  class="d-flex flex-column align-items-center justify-content-center container-fluid p-0"
>
  <div class="row d-flex mx-lg-2 gap-3">
    @forelse ($posts as $post)
      <x-post-item :post="$post"></x-post-item>
    @empty
      <p class="p-0 text-gray-300">No Post Found</p>
    @endforelse
  </div>
</div>

<div class="container-fluid px-3">
  {{ $posts->onEachSide(1)->links('vendor.pagination.tailwind') }}
</div>
