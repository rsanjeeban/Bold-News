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
    @include('layouts.header')
    <div class="container-fluid newspanel-one" style="/*padding: 0;*/">
        <div class="container">
            <div class="row ">
                <div class="col-md-12"><br>
                    <div class="section-title">                    
                        <b><h3>WELCOME TO {{$dat[0]['sourcename']}}</h3></b><hr>
                    </div>

                    <div class="section-content">
                            <div class="row">
                                @for ($i = 0; $i < count($dat); $i++)
                                    <a href="{{$dat[$i]['url']}}" target="_blank">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="article">   
                                                <div class="cor-author-name">{{$dat[$i]['sourcename']}}</div>
                                                <div class="article-date">{!!substr($dat[$i]['publishedAt'],0,10)!!}  </div>
                                                <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                                <div class="menu-icon"><img src="/images/like.png"></div>
                                                <div class="article-img"><img src="{{$dat[$i]['urlToImage']}}"></div>
                                                <div class="article-body"><h4>{{$dat[$i]['title']}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endfor
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="more-news" style="text-align: center;">
                <button class="more-news-button">More News...</button>
            </div>
        </div>
    </div>
    <br>
    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        $.ajax({
            url:"https://jsonplaceholder.typicode.com/posts",
            dataType:'jsonp',
            success:function(results){
                var Data=results;
                console.log(Data[1].title);
            }
        })
    </script>
</body>

</html>