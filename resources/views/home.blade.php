@extends('layouts.app')


@section('content')
    <div class="search-section">
        <div class="masthead single-masthead">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-md-auto">
                        <h1 class="text-center">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="mb-3">
        </div>
    </div>
@endsection
