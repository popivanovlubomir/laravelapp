<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Post $post)
    {

        $post->addComment(request('body'));

        return back();
    }
}
