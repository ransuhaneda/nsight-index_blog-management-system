@props([
  'user',
])

<div
  {{ $attributes }}
  x-data="{
    following: {{ $user->isFollowedBy(auth()->user()) ? 'true' : 'false' }},
    followersCount: {{ $user->followers()->count() }},
    followingCount: {{ $user->following()->count() }},
    follow() {
      axios
        .post('/follow/{{ $user->username_unique_id }}', {
          _token: '{{ csrf_token() }}',
        })
        .then((res) => {
          this.following = ! this.following
          this.followersCount = res.data.followersCount
        })
        .catch((err) => {
          console.error(err)
        })
    },
  }"
>
  {{ $slot }}
</div>
