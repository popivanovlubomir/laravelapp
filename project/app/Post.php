<?php

namespace App;


class Post extends Model
{
    //
    // OK fields to be massive assigned - WHITELIST
//    protected $fillable = ['title', 'body'];

    // MUST BE GUEAR
//    protected $guarded = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {

        $this->validate(request(), ['body' => 'required|min:5']);

        $this->comments()->create(compact('body'));
    }
}
