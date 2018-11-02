<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GetData;
use App\news;
use App\newssource;
use App\webinfo;

class MainpageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function home(GetData $GetController){
       $data1= $GetController->selectChannel("bbc"); 
       $data2= $GetController->selectChannel("cnn");
       $data=[
           'data1'=>$data1,
           'data2'=>$data2
       ];
       $url=$data1[0]->url;
    //    echo $url."<br>";
       $dupData=news::where('url',$url)->get();
    //    var_dump($dupData);

       if(isset($dupData[0]->id)){
            // echo "Set";
            $bbcNews=news::select()->where('sourcename',"BBC NEWS")->orderBy('id', 'desc')->take(8)->get()->toarray();
            $cnnNews=news::select()->where('sourcename',"CNN")->orderBy('id', 'desc')->take(8)->get()->toarray();
            $NewsChannelList=$this->LoadNewsChannel();
            $homePageNewsString=webinfo::select()->where('name','HomePageNewsString')->get()->toarray();
            $CategoryStr=$homePageNewsString[0]['detail'];
            // echo $CategoryStr;
            $homePageCatNews=news::select()->where("description",'like',"%$CategoryStr%")->get()->toArray();
            // var_dump($homePageCatNews);

            return View(' index')->with(array('data1'=>$bbcNews, 'data2'=>$cnnNews,'data3'=>$NewsChannelList,'data4'=>$homePageCatNews,'data4Category'=>$CategoryStr));

        }else{
            // echo "unSet";
            $this->store($data);
            $bbcNews=news::select()->where('sourcename',"BBC NEWS")->orderBy('id', 'desc')->take(8)->get()->toarray();
            // var_dump($bbcNews);
            $cnnNews=news::select()->where('sourcename',"CNN")->orderBy('id', 'desc')->take(8)->get()->toarray();
            $NewsChannelList=$this->LoadNewsChannel();
            return View(' index')->with(array('data1'=>$bbcNews, 'data2'=>$cnnNews,'data3'=>$NewsChannelList));
        }
    }
    public function store($data)
    {
        for($x=1;$x<=count($data);$x++){
            for($i=0;$i<10;$i++){
                $news = new news;
                $news->sourceid = $data["data$x"][$i]->source->id;
                $news->sourcename = $data["data$x"][$i]->source->name;
                $news->author = $data["data$x"][$i]->author;
                $news->title = $data["data$x"][$i]->title;
                $news->description = $data["data$x"][$i]->description;
                $news->url = $data["data$x"][$i]->url;
                $news->urlToImage = $data["data$x"][$i]->urlToImage;
                $news->publishedAt = $data["data$x"][$i]->publishedAt;
                $news->save();
                // $Sourname=$data["data$x"][$i]->source->name;
                // echo "Data $Sourname $i Store Completed<br>";
            }       
        }
    }
    public function LoadNewsChannel(){
        $cat=newssource::all()->pluck('name')->toarray();
        return $cat;
    }
}