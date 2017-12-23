<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comments;
class Postcontroller extends Controller
{
    public function index()
    {
        $post = Post::getPublishedPost(); 
        return view('post.index',compact(['post']));
    }
    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('post.show', compact(['post']));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store()
    {
    /*  $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->is_published = request('published');
        $post->save();
    */
        $this->validate(request(),['title' => 'required','body'=> 'required | min:15']);

        Post::create([
            'title' => request('title'),
            'body'=> request('body'),
            'is_published' => request('published')
        ]);

        return redirect()->route('all-post');
    }
}
