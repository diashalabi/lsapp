@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-4">
        <h1 class="display-4">Welcome To LSAPP!</h1>
        <p class="lead">This is a laravel blog that let you register and create, edit and delete your own posts</p>
        @if (Auth::guest())
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        @endif
    </div>
@endsection
