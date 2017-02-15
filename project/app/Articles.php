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


}
