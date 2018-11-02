<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class NewsController extends Controller
{
    public function GetNews(){
        return user::all();
    }
}