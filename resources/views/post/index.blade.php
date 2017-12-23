@extends('layouts.master')

@section('title')
    All Post
@endsection

@section('content')
  <h1>Post</h1>
    <ul>
    @foreach($post as $post)
        <li>
            <a href="{{ route('single-post', ['id' => $post->id]) }}">
            {{ $post->title }}</a>
        </li>
    @endforeach
    </ul>
@endsection
