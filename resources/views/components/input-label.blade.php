@props([
  'value',
])

<label
  {{ $attributes->merge(['class' => 'form-label d-block fw-medium small text-body']) }}
>
  {{ $value ?? $slot }}
</label>
