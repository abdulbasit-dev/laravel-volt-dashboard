<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">

  <link rel="manifest" href="/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
  <link rel="shortcut icon" href="/img/favicon/favicon.ico">

  <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

  <!-- Apex Charts -->
  {{-- <link type="text/css" href="{{ asset('assets/img/brand/dark.svg') }}" rel="stylesheet"> --}}

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Datepicker -->
  {{-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css"> --}}
  {{-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css"> --}}

  <!-- Fontawesome -->
  <link type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- Sweet Alert -->
  <link type="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

  <!-- Notyf -->
  {{-- <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet"> --}}

  {{-- Filepond --}}
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
  <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
  <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>


  <!-- Volt CSS -->
  <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">
  @livewireStyles

  <title>{{ config('app.name') }} | @yield('title')</title>
</head>

<body>

  {{-- Nav --}}
  @include('layouts.nav')
  {{-- SideNav --}}
  @include('layouts.sidenav')
  <main class="content">
    {{-- TopBar --}}
    <livewire:top-bar />
    @yield('content')
  </main>

  @livewireScripts

  <!-- Core -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="{{ asset('assets/js/on-screen.umd.min.js') }}"></script>

  <!-- Slider -->
  {{-- <script src="{{ asset('assets/js/nouislider.min.js') }}"></script> --}}

  <!-- Smooth scroll -->
  <script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>

  {{-- Filepond --}}
  <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
  <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
  <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
  <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
  <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
  <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
  <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
  <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

  <!-- Apex Charts -->
  {{-- <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script> --}}

  <!-- Charts -->
  {{-- <script src="{{ asset('assets/js/chartist.min.js') }}"></script> --}}
  {{-- <script src="{{ asset('assets/js/chartist-plugin-tooltip.min.js') }}"></script> --}}

  <!-- Datepicker -->
  {{-- <script
        src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js">
    </script> --}}

  <!-- Moment JS -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js">
    </script> --}}

  <!-- Notyf -->
  {{-- <script src="{{ asset('vendor/notyf/notyf.min.js') }}"></script> --}}

  <!-- Simplebar -->
  {{-- <script src="{{ asset('assets/js/simplebar.min.js') }}"></script> --}}

  <!-- Github buttons -->
  {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}

  <!-- Volt JS -->
  <script src="{{ asset('assets/js/volt.js') }}"></script>

  {{-- sweetalert2 --}}
  <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

  @stack('scripts')
  {{-- sweetalert2 message --}}
  @if (Session::has('message'))
    <script>
      Swal.fire({
        timer: "{{ Session::get('icon') === 'error' ? 12000 : 2000 }}",
        icon: "{{ Session::get('icon') }}",
        title: "{{ Session::get('title') }}",
        text: "{{ Session::get('message') }}",
      })
    </script>
  @endif

</body>

</html>
