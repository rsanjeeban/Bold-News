<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Product;
use App\Http\Requests;
use GuzzleHttp\Client;
// use GuzzleHttp\Message\Request as GuzRequest;
// use GuzzleHttp\Message\Response;

class GetData extends Controller
{
	
    public function selectChannel($Name){
    	// 
    	$channelName=strtolower($Name);
    	// echo "<h1>",$channelName."</h1><br>";
    	switch($channelName){
    		case "bbc"			:$channel="bbc-news";break;
    		case "cnn"			:$channel="cnn";break;
    		case "googlenews"	:$Api="https://jsonplaceholder.typicode.com/posts";break;
    		default  			:$Api="https://jsonplaceholder.typicode.com/posts";break;		
		}
		$Api="https://newsapi.org/v2/top-headlines?sources=".$channel."&apiKey=e7d6456c6e2c4067bacbfff40b6aafe1";
    	// echo $Api;
    	// $Data=GetData($Api);
			// return view("news",compact($Data));
		// return view('news')->with("name","Sanjee");
		$data=$this->GetDataFromChannel($Api);
		$dat=$data->articles;
		return view('news',compact(['dat']));
	}

	public function GetDataFromChannel($Api){
		
		$client=new Client();
		$res = $client->request('GET', $Api);
		$data=json_decode($res->getBody());
		return $data;
	}
	public function SearchString(){
		if(Request::ajax()){
		return $Value;
		}
	}
}
