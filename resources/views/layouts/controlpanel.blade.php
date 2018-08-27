<!doctype html>
<html lang="en">
@include('controlpanel.includes.head')
<body>
@include('controlpanel.includes.header')
<div id="app" class="container-fluid">
    <div class="row">
    @include('controlpanel.includes.innernav')
    @yield('content')
    </div>
</div>
@include('controlpanel.includes.footer')
@include('controlpanel.includes.footer-scripts')
</body>
</html>

