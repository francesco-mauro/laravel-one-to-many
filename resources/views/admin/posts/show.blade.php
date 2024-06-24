@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>
@endsection