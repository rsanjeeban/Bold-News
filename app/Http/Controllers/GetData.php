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
	
    function GetFromChannel($Name){
    	
    	$channelName=strtolower($Name);
    	// echo "<h1>",$channelName."</h1><br>";
    	switch($channelName){
    		case "bbc"			:$Api="https://jsonplaceholder.typicode.com/posts";break;
    		case "cnn"			:$Api="https://jsonplaceholder.typicode.com/posts";break;
    		case "googlenews"	:$Api="https://jsonplaceholder.typicode.com/posts";break;
    		default  			:$Api="https://jsonplaceholder.typicode.com/posts";break;		
    	}
    	// echo $Api;
    	// $Data=GetData($Api);
    	$client=new Client();
		$res = $client->request('GET', $Api);
		$data=json_decode($res->getBody());
		// for($i=0;$i<10;$i++){
		// 	echo $Data[$i]->title."<br>";
		// }
		// return view("news",compact($Data));
		// return view('news')->with("name","Sanjee");
		$name="Test";
		return view('news',compact(['data']));
    }
}
