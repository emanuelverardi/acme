<!doctype html>
<html lang="en">
@include('controlpanel.includes.head')
<body>
@include('controlpanel.includes.header')
<div class="container-fluid">
    <div class="row">
    @include('controlpanel.includes.innernav')
    @yield('content')
    </div>
</div>
@include('controlpanel.includes.footer')
@include('controlpanel.includes.footer-scripts')
</body>
</html>

