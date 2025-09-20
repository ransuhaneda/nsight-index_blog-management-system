@props([
  'user',
  'size' => 'h-12 w-12',
])

@if ($user->imageUrl())
  <img
    src="{{ $user->imageUrl('avatar') }}"
    alt="{{ $user->name }}"
    class="{{ $size }} rounded-full"
  />
@else
  <img
    src="https://placehold.net/avatar.png"
    alt="Dummy Avatar"
    class="{{ $size }} rounded-full"
  />
@endif
