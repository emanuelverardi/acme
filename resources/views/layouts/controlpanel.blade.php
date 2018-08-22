<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body>
    <div id="app">

        @include('includes.header-controlpanel')

        <main class="py-4">
            @yield('content')
        </main>

        @include('includes.footer')
        @include('includes.footer-scripts')
    </div>
</body>
</html>
