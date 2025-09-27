<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta Information -->
    <meta
      name="description"
      content="Build, manage, and scale your Laravel blog with powerful multi-role authentication, intuitive CRUD features, and streamlined media management. Perfect for creators and teams seeking a robust blog solution."
      data-rh="true"
    />
    <meta
      property="og:description"
      content="Launch your Laravel-powered blog with advanced user roles, easy content management, and reliable media handling. The ideal platform for modern bloggers and multi-author teams."
    />
    <meta
      property="og:image"
      content="{{ asset('assets/favicon/opengraph-image.png') }}"
    />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:site_name" content="Nsight Index" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_us" />
    <meta property="og:url" content="https://nsightindex.384721.xyz/" />
    <meta property="og:title" content="Nsight Index" />

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

    {{--
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
      />
    --}}

    {{-- Uncomment After Bootstrap migration then remove tailwind integrations --}}
    @vite(['resources/css/bootstrap-5/styles.scss', 'resources/js/bootstrap-5/main.js'])

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-family-sans-serif antialiased">
    <x-navigation />

    @isset($header)
      <header>
        {{ $header }}
      </header>
    @endisset

    <main>
      {{ $slot }}
    </main>

    @stack('scripts')

    {{--
      <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
      ></script>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
      crossorigin="anonymous"
      ></script>
    --}}
  </body>
</html>
