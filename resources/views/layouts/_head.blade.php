<head>
    @include('layouts/_meta')

    <title>@yield('title')</title>

    @include('layouts/_link')

    <!-- Custom CSS -->
    @stack('css')
</head>