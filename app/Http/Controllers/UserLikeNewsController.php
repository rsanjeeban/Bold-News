<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLikeNews;
use App\news;
use Auth;

class UserLikeNewsController extends Controller
{
    public function saveUserLikeNewes(){
        $ArticleId=$_GET['articleId'];
        $userId=$_GET['userid'];
        // echo "Hello $d";
        $newsData=news::where('id',"$ArticleId")->get();
        $News=new UserLikeNews();
        $News->username=$userId;
        $News->newsid=$ArticleId;
        $News->title=$newsData[0]['title'];
        $News->sourcename=$newsData[0]['sourcename'];
        $News->publishedAt=$newsData[0]['publishedAt'];
        $News->url=$newsData[0]['url'];
        $News->save();
        return "Save Successfully";
    }
    public function UnlikeArticle(){
        $ArticleId=$_GET['ArticleId'];
        $title=UserLikeNews::select('title')->where('id',"$ArticleId")->get()->toArray();
        $username=Auth::user()->name;
        $LikeNews=UserLikeNews::where('username',"$username")->get()->toArray();
        UserLikeNews::where('id',"$ArticleId")->delete();
        return redirect()->action('HomeController@index',["title"=>$title]);
    }
}
