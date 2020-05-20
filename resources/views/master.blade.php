<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include("layout.metadata")
    <title>@if (isset($title)) {{ $title }} @endif | Crash Team Racing Draft</title>
    <link rel="stylesheet" media="all" href="{{ mix('/css/app.css') }}">
    @yield('styles')
</head>
<body class="{{ $bodyAdditionalClasses ?? '' }}">
    @include('layout.navbar')
    @yield('content')
    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
