@if (session('status') === 'success-update')
  <div class="position-fixed bottom-0 end-0">
    <p
      x-data="{ show: true }"
      x-show="show"
      x-transition
      x-init="setTimeout(() => (show = false), 2000)"
      class="alert alert-success"
      aria-live="assertive"
    >
      Edits has been saved
    </p>
  </div>
@endif
