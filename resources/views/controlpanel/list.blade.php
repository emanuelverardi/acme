@extends('layouts.controlpanel')

@section('content')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <div class="notifications"></div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">All Questions</h1>
                <button type="button" class="btn btn-primary" onclick="Questions.resetFormCreateQuestionModal()" data-toggle="modal"
                        data-target="#createQuestionModal"
                >Create New Question</button>
            </div>

            <table id="questions-table" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Question Text</th>
                    <th>Answer Structure</th>
                    <th>Answer Type Metadata </th>
                    <th>Is Mandatory</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Question Text</th>
                    <th>Answer Structure</th>
                    <th>Answer Type Metadata </th>
                    <th>Is Mandatory</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </main>

        @include('controlpanel.includes.delete-question-modal')
        @include('controlpanel.includes.create-question-modal')

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
