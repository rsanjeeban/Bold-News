<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLikeNews;
use App\news;
// use Illuminate\Support\Facades\Auth;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        $username=Auth::user()->name;
        $LikeNews=UserLikeNews::where('username',"$username")->get()->toArray();
        // $newsId=$LikeNews[0]['newsid'];
        // $Data=news::where('id',"$newsId")->get();
        // echo "<pre>";
        //     var_dump($LikeNews);
        // echo "</pre>";
        if(isset($_GET['title'])){
            $title=$_GET['title'];
            return view('home')->with(["data"=>$LikeNews,"title"=>$title]);
        }else{
            return view('home')->with(["data"=>$LikeNews]);
        }
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
