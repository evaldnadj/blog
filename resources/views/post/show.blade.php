@extends('layouts.master')

    @section('title')
    Single Post
    @endsection

    @section('content')
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body }}</p>

      
      <hr/>
      <h4>Comments:</h4>
      <ul class='list-unstyled'>
        @foreach($post->comments as $comment)
        <li>


            {{ $comment->text }}

        </li>
        @endforeach
      </ul>
    
      <form  method="POST" action="{{ route('comments-post', ['post_id' => $post->id]) }}">
      {{ csrf_field() }}
      <textarea  name ='body'> </textarea>
      <button type="submit">Submit</button>
      </form>

    @endsection
