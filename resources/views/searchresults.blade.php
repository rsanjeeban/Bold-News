<!DOCTYPE html>
<html>
<head>
    <title>Prime24</title>
    <link rel="icon" href="/images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="stylesheet" href="/css/all.css" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <style>
        a,a:hover{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="searchform" style="padding:15px;background-image:url('/images/bg-searchpage.jpg')">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-3">
                        <a href="{{url('/')}}"><div class="container">
                            <center><img src="/images/logo.png" class="logo"></center>
                        </div></a>
                        </div>
                        <div class="col-md-9">
                        <form action="results" method="GET" style="background-color:white;border-radius: 3px;" autocomplete="off">
                            <!-- {{ csrf_field() }} -->
                            <input type="text" value="{{$searchString}}" name="searchbar" placeholder="Search News" class="p-4" id="search-button" onkeyup="search_live()" onblur="leave_search_live()">
                            <button  class="fa fa-search nostyle subBut"><input type="submit" class="nostyle" value=""></button>
                        </form>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" style="background-color:#fafbfb;">
        <h1>Results : {{$searchString}}</h1>
        <div class="container"></div>
        <div class="row">
        
    <div class="col-md-12"><br>
        <div class="section-content">
                <div class="row" id="row">
                    @for($i=0; $i<count($data);$i++)
                        <a href="{{$data[$i]['url']}}" target="_blank">
                            <div class="col-md-3 col-sm-6">
                                <div class="article">   
                                    <div class="cor-author-name">{{$data[$i]['sourcename']}}</div>
                                    <div class="article-date">{!!substr($data[$i]['publishedAt'],0,10)!!}  </div>
                                    <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                    <div class="menu-icon"><img src="/images/like.png"></div>
                                    <div class="article-img"><img src="{{$data[$i]['urlToImage']}}"></div>
                                    <div class="article-body"><h4>{{$data[$i]['title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
        </div>
    </div>
</div>
@extends('layouts.footer')

    </div>
</body>
</html>