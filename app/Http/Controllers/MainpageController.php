<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GetData;
use App\news;

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
       $dupData=news::where('url',$url)->get();

       if(isset($dupData[0]->id)){
            echo "Set";
            for($i=0;$i<10;$i++){
                //Below for Store API News to Database
                // $this->store($data);
            }
       }else{
            // echo "unSet";
            //Below line for Testing Purpose
            $this->store($data);
       }
    //    echo $data1[0]->url;
    //    return View('index')->with(array('data1'=>$data1, 'data2'=>$data2));
    //    echo ($data['data1'][0]->source->name)    ;
    //    echo ($data1[0]->source->name);
    //    echo ($data2[0]->source->name);
    //    $data=array(data1,data2);
    //    print_r ($data[0]->data1[0]->source);
        
    }
    public function store($data)
    {
        echo ($data['data1'][0]->source->name);
        echo (count($data));
        // for($i=0;$i<10;$i++){
        //     for($i=1;$i<=count($data);$i++){

        //         $news = new news;
        //         $news->sourcename = $data["data$i"][$i]->source->name;
        //         $news->author = $data["data$i"][$i]->author;
        //         $news->title = $data["data$i"][$i]->title;
        //         $news->description = $data["data$i"][$i]->description;
        //         $news->url = $data["data$i"][$i]->url;
        //         $news->urlToImage = $data["data$i"][$i]->urlToImage;
        //         $news->publishedAt = $data["data$i"][$i]->publishedAt;
        //         $news->save();
        //         echo "Data $i Store Completed";
        //     }
        // }        
    }
}
