<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class NewsController extends Controller
{
    public function GetNews(){
        return user::all();
    }
    public function checkNews(){
        
        $lastNews=user::orderBy('id','desc')->first();
        return $lastNews;
    }
}