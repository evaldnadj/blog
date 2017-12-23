<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comments;

class CommentsController extends Controller
{
    public function store($postId)

    {
    $this->validate(request(),['body' => 'required | max:250']);

    $comment = new Comments;
    $comment->post_id = $postId;
    $comment->text = request('body');
    $comment->save();

    return redirect()->route('single-post',['id'=> $postId]);
    }
}
