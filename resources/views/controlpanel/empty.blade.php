@extends('layouts.controlpanel')

@section('content')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="notifications"></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">To be implemted ({{ Route::currentRouteName() }})</h1>
            </div>

            <div class="empty text-center text-danger">
            <p>empty</p>
            </div>

        </main>


@endsection

@push('css')
    <link rel="stylesheet"  href="{{ URL::asset('/css/jquery.dataTables.min.css') }}" type="text/css">
@endpush

@push('javascript')
    <script src="{!! asset('js/jquery.dataTables.min.js') !!}" type="text/javascript"></script>

    <script>
        $(function () {
            let params = {
                'questionListApiUrl' : '{{ url('/api/v1/questions/list') }}'
            };
            new Questions(params);
        });
    </script>
@endpush
