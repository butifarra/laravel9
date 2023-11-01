@extends('layouts.app')
@section('title','Blog')
@section('content')
<h1>Blog</h1>
<a href="{{route('posts.create')}}">Create new post</a>

@foreach ($posts as $post )
<h2>
    <a href="{{route('posts.show', $post)}}">{{$post->title}}
</h2>
@endforeach
@endsection