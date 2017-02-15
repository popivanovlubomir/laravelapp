<?php

namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //
    // OK fields to be massive assigned - WHITELIST
//    protected $fillable = ['title', 'body'];

    // MUST BE GUEAR
//    protected $guarded = ['title', 'body'];
}
