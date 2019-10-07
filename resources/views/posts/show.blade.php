@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
    <h1 class="mt-3">{{ $post->title }}</h1>
    <div class="text-center">
        <img src="/storage/cover_images/{{ $post->cover_image }}" class="img-fluid mb-4">
    </div>
    <div>
        <p class="lead">{!! nl2br($post->body) !!}</p>
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-secondary">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif
@endsection