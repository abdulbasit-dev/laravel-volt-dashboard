<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ env('APP_ICON') }}" sizes="180x180">
    <link rel="icon" href="{{ env('APP_ICON') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ env('APP_ICON') }}" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="{{ env('APP_ICON') }}" color="#563d7c">
    <link rel="icon" href="{{ env('APP_ICON') }}">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }} | @yield("title")</title>

    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts

</body>

</html>