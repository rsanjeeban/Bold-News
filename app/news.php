<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public function UserLikeNews(){
    	return $this->belongsToMany('App\UserLikeNews');	
    }
    
}
