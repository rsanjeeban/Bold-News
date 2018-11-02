<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLikeNews extends Model
{
    public function news(){
    	return $this->belongsToMany('App\news');
    }
}
