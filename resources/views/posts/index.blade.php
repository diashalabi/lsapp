@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4 p-3">
                        <img src="/storage/cover_images/{{ $post->cover_image }}" class="card-image img-fluid">
                    </div>
                    <div class="col-md-8 pt-3">
                        <div class="card-body">
                            <h3 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <p class="card-text"><small class="text-muted">Written on {{ $post->created_at }} by {{ $post->user->name }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection