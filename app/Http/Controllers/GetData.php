<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
// use App\Product;
use App\Http\Requests;
use GuzzleHttp\Client;
// use GuzzleHttp\Message\Request as GuzRequest;
// use GuzzleHttp\Message\Response;
use App\newssource;
use App\news;

class GetData extends Controller
{
	
    public function selectChannel($Name){
    	// 
    	$channelName=strtolower($Name);
		$channel=newssource::where('name', $channelName)->first();
		if(isset($channel)){
			$Api="https://newsapi.org/v2/top-headlines?sources=".$channel->sources."&apiKey=e7d6456c6e2c4067bacbfff40b6aafe1";
		}else{
			return redirect('/news/bbc');
		}
		$data=$this->GetDataFromChannel($Api);
		$dat=$data->articles;
		return $dat;
	}
	public function OpenNewsPage($Name){
		// $dat=$this->selectChannel($Name);
		// var_dump($dat);
		$sourceid=newssource::select()->where('name',$Name)->get()->pluck('sources');
		// echo $sourceid;
		$dat=news::select()->where('sourceid',$sourceid)->get()->toArray();
		$NewsChannelList=$this->LoadNewsChannel();		
		return view('news')->with(array('dat'=>$dat,'data3'=>$NewsChannelList));
	}
	public function LoadNewsChannel(){
        $cat=newssource::all()->pluck('name')->toarray();
        return $cat;
    }
	public function GetDataFromChannel($Api){

		$client=new Client();
		$res = $client->request('GET', $Api);
		$data=json_decode($res->getBody());
		return $data;
	}
	public function SearchString($Value){
		if(Request::ajax()){
			$ResultArr;
			// $Api="https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=e7d6456c6e2c4067bacbfff40b6aafe1";
			// $data=$this->GetDataFromChannel($Api);
			// for($i=0;$i<=10;$i++){
			// 	if(strpos($data->articles[$i]->title,$Value)!==false){
			// 		$ResultArr=$data->articles[$i]->title;
			// 	}
			// }
			// $dat=$data->articles[0]->title;
			return "[Live Search : Feature Development]";
		 }
	}
}
