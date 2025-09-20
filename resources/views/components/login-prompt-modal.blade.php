<template x-teleport="body">
  <div
    x-show="showLoginPrompt"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    style="display: none"
  >
    <div class="mx-4 max-w-sm rounded-lg bg-white p-6">
      <h3 class="mb-4 text-lg font-semibold">Login Required</h3>
      <p class="mb-4">Please login to like this post.</p>
      <div class="flex justify-end gap-2">
        <button
          @click="showLoginPrompt = false"
          class="rounded border border-gray-300 px-4 py-2"
        >
          Cancel
        </button>
        <button
          onclick="window.location.href='{{ route('login') }}'"
          class="rounded bg-neutral-800 px-4 py-2 text-white"
        >
          Login
        </button>
      </div>
    </div>
  </div>
</template>
