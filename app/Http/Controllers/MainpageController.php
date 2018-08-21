<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GetData;

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
       return View('index')->with(array('data1'=>$data1, 'data2'=>$data2));
    //    echo $data->data1->source->name;
    //    echo ($data1[0]->source->name);
    //    echo ($data2[0]->source->name);
    //    $data=array(data1,data2);
    //    print_r ($data[0]->data1[0]->source);
        
    }
}
