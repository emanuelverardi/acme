<!doctype html>
<html lang="en">
@include('includes.head')
<body>
@include('includes.header-controlpanel')
<div class="container-fluid">
    <div class="row">
    @include('includes.innernav')
    @yield('content')
    </div>
</div>
@include('includes.footer')
@include('includes.footer-scripts')
</body>
</html>

