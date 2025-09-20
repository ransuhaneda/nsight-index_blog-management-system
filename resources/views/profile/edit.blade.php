<x-app-layout>
  <div class="d-flex justify-content-center flex-col mx-auto gap-3 gap-sm-5 p-2 p-lg-5">
    <section class="container d-flex justify-content-start mx-auto gap-6">
    @include('profile.partials.update-profile-information-form')
    </section>
    
    <section class="d-flex flex-column justify-content-start mx-auto gap-6">
        @include('profile.partials.update-password-form')
        @include('profile.partials.delete-user-form')
    </section>
    </div>
  </div>
</x-app-layout>
