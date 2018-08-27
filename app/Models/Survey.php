<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * The User that belong to the Question.
     */
    public function user()
    {
        return $this->belongsToMany('App\User', 'user_survey');
    }
}
