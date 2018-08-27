<script src="{{ mix('js/app.js') }}"></script>
<script>
    $(function () {
        let params = {
            'access_token' : '{{ $access_token }}'
        };
        new AuthApi(params);
    });
</script>
<!-- Scripts -->
@stack('javascript')
