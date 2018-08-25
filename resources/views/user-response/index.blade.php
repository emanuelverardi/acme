@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif

    <div class="py-5 text-center">
        <h2>User Response Area</h2>
    </div>

    <div class="row">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Questions:</h4>
            <form class="survey-form needs-validation" novalidate>
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}" required>
                <input type="hidden" name="user_survey_id" id="user_survey_id" value="" required>
                <div class="row">
                    <div class="col-md-12 mb-12">
                        <label for="firstName">* What is your name ? <span></span></label>
                        <input type="text" class="form-control" name="question-1" id="question-1" placeholder="" value=""
                               required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="firstName">* When were you born ? </label>
                        <input type="date" width="120" class="form-control" name="question-2" id="question-2"
                               placeholder="DD/MM/YYYY" value="" required>
                        <div class="invalid-feedback">
                            Valid date required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">* Marital Status</label>
                        <select class="custom-select d-block w-100" id="question-3" name="question-3" required>
                            <option value="">Choose...</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>In a relationship</option>
                            <option>Prefer not to disclose</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                </div>

                <div class="d-block my-3">
                    <label for="question-4">* Do you smoke?</label>
                    <div class="custom-control custom-radio">
                        <input id="question-4-yes" name="question-4" type="radio" class="custom-control-input" checked
                               required>
                        <label class="custom-control-label" for="question-4-yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="question-4-no" name="question-4" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="question-4-no">No </label>
                    </div>
                </div>

                <div class="d-block my-3">
                    <label for="question-5">Gender?</label>
                    <div class="custom-control custom-radio">
                        <input id="question-5-male" name="question-5" type="radio" class="custom-control-input" checked>
                        <label class="custom-control-label" for="question-5-male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="question-5-female" name="question-5" type="radio" class="custom-control-input">
                        <label class="custom-control-label" for="question-5-female">Female </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="question-6">Nationality</label>
                        <select class="custom-select d-block w-100" id="question-6" name="question-6">
                            <option value="">Choose...</option>
                            <option value="1">Irish</option>
                            <option value="2">British</option>
                            <option value="3">Spanish</option>
                            <option value="4">French</option>
                            <option value="5">Other</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Survey</button>
                <p class="lead">
                    <span class="small">Required fields are marked with the (*) symbol</span>
                </p>
            </form>
        </div>
    </div>

</div>
@endsection

@push('css')
    <link href="{{ URL::asset('js/datepicker-bootstrap/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('js/datepicker-bootstrap/css/datepicker.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('javascript')
    <script src="{{ URL::asset('js/datepicker-bootstrap/js/core.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/datepicker-bootstrap/js/datepicker.js') }}"></script>

    <script>
        $(function () {
            new Survey({});
        });
    </script>
@endpush
