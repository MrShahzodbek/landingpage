@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to our Landing Page</h1>
        <p class="lead">This is a simple landing page built with Laravel and Bootstrap.</p>
        <a href="#" class="btn btn-primary btn-lg">Learn more</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Feature 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in turpis tellus. Suspendisse ac tellus libero.</p>
                <a href="#" class="btn btn-default">Learn more</a>
            </div>
            <div class="col-md-4">
                <h2>Feature 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in turpis tellus. Suspendisse ac tellus libero.</p>
                <a href="#" class="btn btn-default">Learn more</a>
            </div>
            <div class="col-md-4">
                <h2>Feature 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in turpis tellus. Suspendisse ac tellus libero.</p>
                <a href="#" class="btn btn-default">Learn more</a>
            </div>
        </div>
    </div>
@endsection
