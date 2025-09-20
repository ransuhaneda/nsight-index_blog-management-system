@props([
  'post',
  'timezone',
])

<time datetime="{{ $post->created_at }}">
  {{ $post->created_at->setTimezone($timezone)->format('M d, Y g:i A') }}
</time>
