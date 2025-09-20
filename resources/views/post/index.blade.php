<x-app-layout>
  <div class="mt-4">
    <div class="d-flex flex-column align-items-center gap-4 p-3">
      <x-category-tabs>No Categories Found</x-category-tabs>

      <x-posts-container :posts="$posts" />

      <x-status.delete-status />
    </div>
  </div>
</x-app-layout>
