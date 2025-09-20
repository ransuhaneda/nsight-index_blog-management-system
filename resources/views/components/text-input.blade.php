@props(['disabled' => false])

<input
  @disabled($disabled)
  {{ $attributes->merge(['class' => 'form-control border-secondary focus:border-dark focus:ring-dark rounded shadow-sm']) }}
/>
