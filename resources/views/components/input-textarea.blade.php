@props(['disabled' => false])

<textarea
  @disabled($disabled)
  {{ $attributes->merge(['class' => 'border-secondary focus:border-dark focus:ring-dark rounded']) }}
>
{{ $slot }}</textarea
>
