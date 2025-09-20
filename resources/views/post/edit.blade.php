<x-app-layout>
  <div class="py-4">
    <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
      <h1 class="text-3xl">
        Update post:
        <strong class="font-bold">{{ $post->title }}</strong>
      </h1>
      <div class="overflow-hidden bg-white p-8 shadow-sm sm:rounded-lg">
        <form
          class="flex flex-col flex-wrap gap-6"
          action="{{ route('post.update', $post->id) }}"
          method="post"
          enctype="multipart/form-data"
        >
          @csrf
          @method('put')

          <!-- Title -->
          <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input
              id="title"
              class="block w-full"
              type="text"
              name="title"
              :value="old('title', $post->title)"
              autofocus
            />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
          </div>

          <!-- Content -->
          <div>
            <x-input-label for="content" :value="__('Content')" />
            <x-input-textarea
              id="content"
              class="block w-full"
              style="height: 150px"
              type="text"
              name="content"
            >
              {{ old('content', $post->content) }}
            </x-input-textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
          </div>

          <!-- Categories -->
          <div>
            <x-input-label for="category_id" :value="__('Category')" />
            <select
              id="category_id"
              name="category_id"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-neutral-500 focus:ring-neutral-500"
            >
              <option value="">Select a category</option>
              @foreach ($categories as $category)
                <option
                  value="{{ $category->id }}"
                  @selected(old('category_id', $post->category_id) == $category->id)
                >
                  {{ $category->name }}
                </option>
              @endforeach
            </select>
            <x-input-error
              :messages="$errors->get('category_id')"
              class="mt-2"
            />
          </div>

          <!-- Schedule At -->
          <div>
            <x-input-label
              for="published_at_local"
              :value="__('Republish Post at')"
            />
            <x-text-input
              id="published_at_local"
              class="block w-full"
              type="datetime-local"
              name="published_at_local"
              :value="old('published_at_local', $post->published_at ? $post->published_at->setTimezone(auth()->user()->timezone)->format('Y-m-d\TH:i') : $defaultDateTime)"
              autofocus
            />
            <x-input-error
              :messages="$errors->get('published_at_local')"
              class="mt-2"
            />
          </div>

          <!-- Image Upload -->
          <div>
            <p>Upload file</p>
            <x-text-input
              class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none"
              id="image"
              type="file"
              name="image"
            />
            <x-input-label
              class="cursor-pointer text-sm text-gray-500"
              for="image"
              :value="__('SVG, PNG, JPG or GIF (MAX. 800x400px).')"
            />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
          </div>
          @if ($post->imageUrl())
            <img
              src="{{ $post->imageUrl() }}"
              alt="{{ $post->title }}"
              class="w-full"
            />
          @endif

          <x-primary-button class="self-start">Submit</x-primary-button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
