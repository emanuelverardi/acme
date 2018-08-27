<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('user-response.includes.head')

<body>
    <div id="app">

        @include('user-response.includes.header')

        <main class="py-4 container">
            @yield('content')
        </main>

        @include('user-response.includes.footer')
        @include('user-response.includes.footer-scripts')
    </div>
</body>
</html>
