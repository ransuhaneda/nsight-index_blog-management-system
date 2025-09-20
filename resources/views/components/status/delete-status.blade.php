@if (session('status') === 'success-delete')
  <div class="alert alert-success position-fixed top-50 start-50">
    <p
      x-data="{ show: true }"
      x-show="show"
      x-transition
      x-init="setTimeout(() => (show = false), 2000)"
      class="alert alert-success"
      aria-live="assertive"
    >
      Successful Delete
    </p>
  </div>
@endif
