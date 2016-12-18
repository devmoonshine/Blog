@extends('templates/app')

@section('main')
    <div class="content">
        <h3>Tagged in: {{ $tag->name }}</h3>
        @include('post/partials/list', [
            'posts' => $posts
        ])
    </div>
    <div class="sidebar">

    </div>
@endsection