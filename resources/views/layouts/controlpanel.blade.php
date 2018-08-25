<!doctype html>
<html lang="en">
@include('includes.head')
<body>
@include('controlpanel.includes.header-cp')
<div class="container-fluid">
    <div class="row">
    @include('controlpanel.includes.innernav')
    @yield('content')
    </div>
</div>
@include('includes.footer')
@include('includes.footer-scripts')
</body>
</html>

