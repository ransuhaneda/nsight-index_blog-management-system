<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{ asset('assets/favicon/apple-touch-icon.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="{{ asset('assets/favicon/favicon-96x96.png') }}"
    />
    <link
      rel="shortcut icon"
      href="{{ asset('assets/favicon/favicon.ico') }}"
    />
    <link
      rel="manifest"
      href="{{ asset('assets/favicon/site.webmanifest') }}"
    />
    <meta name="theme-color" content="#262626" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap -->
    {{-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans bg-grey-400 text-gray-900 antialiased">
    <x-navigation />

    <div
      class="flex min-h-screen flex-col items-center pt-6 sm:justify-center sm:pt-0"
    >
      <div
        class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg"
      >
        {{ $slot }}
      </div>
    </div>

    @stack('scripts')
    {{-- <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script> --}}
  </body>
</html>
