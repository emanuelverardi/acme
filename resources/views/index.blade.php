@extends('layouts.app')

@section('content')

    @if(Session::has('auth'))
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            {{ Session::get('auth') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">ACME Limited</h1>
    <p class="lead">Welcome to ACME's Q & A system. Please, select your login option below. </p>
</div>

<div class="card-deck mb-3 text-center">

    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">User Response Area</h4>
        </div>
        <div class="card-body">
            <a href="{{ url('/login?r=ur') }}" class="btn btn-lg btn-block btn-primary">Go to User Area</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Control Panel</h4>
        </div>
        <div class="card-body">
            <a href="{{ url('/login?r=cp') }}" class="btn btn-lg btn-block btn-primary">Go to Control Panel</a>
        </div>
    </div>

</div>
@endsection
