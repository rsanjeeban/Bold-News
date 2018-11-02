<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
class SearchController extends Controller
{
    function searchFromDatabase(){
        $searchString=$_GET["searchbar"]; 
        $SearchData=news::select()->where("description",'like',"%$searchString%")->get()->toArray();
        // return $SearchData;
        return view('searchresults')->with(array('data'=>$SearchData,'searchString'=>$searchString));
    }
}
