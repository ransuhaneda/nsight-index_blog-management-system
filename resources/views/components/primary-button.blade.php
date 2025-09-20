@props(['href' => null])
@php
  $spanClasses =
    'text-decoration-none relative rounded-md bg-neutral-800 px-3 py-2 text-white transition-all duration-75 ease-in group-hover:bg-transparent';
@endphp

@if ($href)
  <a
    href="{{ $href }}"
    {{ $attributes->merge(['type' => 'submit', 'class' => 'text-decoration-none flex items-center justify-start overflow-hidden font-medium rounded-lg group bg-gradient-to-br from-neutral-400 to-neutral-600 group-hover:from-neutral-500 group-hover:to-neutral-700 hover:text-white focus:ring-2 focus:outline-none focus:ring-neutral-300']) }}
  >
    <span class="{{ $spanClasses }}">
      {{ $slot }}
    </span>
  </a>
@else
  <button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-start overflow-hidden font-medium rounded-lg group bg-gradient-to-br from-neutral-400 to-neutral-600 group-hover:from-neutral-500 group-hover:to-neutral-700 hover:text-white focus:ring-2 focus:outline-none focus:ring-neutral-300']) }}
  >
    <span class="{{ $spanClasses }}">
      {{ $slot }}
    </span>
  </button>
@endif
