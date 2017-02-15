<?php

namespace App;

class Articles extends Model
{
    //

    /**
     *
     * Define relation with users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    /**
     *
     * Fetch published articles
     *
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    /**
     *
     * Fetch published articles
     *
     * @param $query
     * @return mixed
     */
    public function scopeNotPublished($query)
    {
        return $query->where('published', 0);
    }
}
