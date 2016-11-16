<!DOCTYPE html>
<html lang="en">
    <head>
        @include('templates.head')

        <!-- Stylesheets -->
        @yield('stylesheets')
    </head>

    <body>
    <!-- Navigation -->
    @include('templates.nav')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('templates.footer')

    <!-- Scripts -->
    @include('templates.scripts')
    @yield('scripts')

    </body>
</html>
