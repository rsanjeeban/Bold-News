<!DOCTYPE html>
<html>
<head>
    <title>BoldNews</title>
    <link rel="icon" href="/images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="stylesheet" href="/css/all.css" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <br>
    <div class="container-fluid">
        <div class="container">
            <!-- <hr> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3>LATEST NEWS</h3><hr>
                    </div>
                    <div class="section-content">
                            <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <a href="{{$data1[0]['url']}}">

                                        <div class="article-1" style="background-image: url('{{$data1[0]['urlToImage']}}');">
                                            <div class="cover-color">
                                                <div class="cor-author-name" style="margin: 10px 2px 10px 10px;">{{$data1[0]['sourcename']}}</div>
                                                <div class="article-date">{!!substr($data1[0]['publishedAt'],0,10)!!}</div>
                                                <div class="article-1-body"><h4 style="font-size: 1.5rem;">{{$data1[0]['title']}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="article-2">
                                        <div class="article-2-single">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{$data2[0]['urlToImage']}}">
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>{{$data2[0]['title']}}</h4>
                                                    <div class="cor-author-name">{{$data2[0]['sourcename']}}</div>
                                                    <div class="article-date">{!!substr($data2[0]['publishedAt'],0,10)!!}  </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="article-2-single">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{$data1[1]['urlToImage']}}">
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>{{$data1[1]['title']}}</h4>
                                                    <div class="cor-author-name">{{$data1[1]['sourcename']}}</div>
                                                    <div class="article-date">{!!substr($data1[1]['publishedAt'],0,10)!!}  </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="article-2">
                                        <div class="article-2-single">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{$data2[2]['urlToImage']}}">
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>{{$data2[2]['title']}}</h4>
                                                    <div class="cor-author-name">{{$data2[2]['sourcename']}}</div>
                                                    <div class="article-date">{!!substr($data2[2]['publishedAt'],0,10)!!}  </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid newspanel-one" style="/*padding: 0;*/">
        <div class="container">
            @isset($data4Category)
            <div class="row ">
                <div class="col-md-12"><br>
                    <div class="section-title">
                        <b><h3>{{ucfirst($data4Category)}}</h3><hr></b>
                    </div>
                    <div class="section-content">
                            <div class="row">
                                @if(count($data4)<7)
                                    <?php $a=count($data4) ?>
                                @else
                                    <?php $a=7?>
                                @endif

                                @for ($i = $a; $i >= 0; $i--)
                                    <a href="{{$data4[$i]['url']}}" target="_blank">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="article">   
                                                <div class="cor-author-name">{{$data4[$i]['sourcename']}}</div>
                                                <div class="article-date">{!!substr($data4[$i]['publishedAt'],0,10)!!}  </div>
                                                <!-- <div class="menu-icon"><img src="/images/menu-options.png"></div> -->
                                                
                                                    <input name="newsId" type="hidden" value="{{$data4[$i]['id']}}">
                                                    @auth
                                                    <div class="menu-icon">
                                                        <button class="nostyle btn-submit" id="btn-submit" value="{{$data4[$i]['id']}}"><img src="/images/like.png" style="width:20px;height:auto;"></button>
                                                    </div>
                                                    @endauth
                                                <div class="article-img"><img src="{{$data4[$i]['urlToImage']}}"></div>
                                                <div class="article-body"><h4>{{$data4[$i]['title']}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                            <!--  Ajax Loading BBC Newses -->
                            <div class="more-news" id="more-newses-row1"></div>
                    </div>
                </div>
            </div>
            @endisset
            <div class="more-news" style="text-align: center;">
                <button class="more-news-button" id="getRequest">More News...</button>
            </div>
        </div>
    </div>
    <div class="container-fluid newspanel-one" style="/*padding: 0;*/">
        <div class="container">
            <div class="row ">
                <div class="col-md-12"><br>
                    <div class="section-title">
                        <b><h3>BBC NEWS</h3><hr></b>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            @for ($i = 7; $i >= 0; $i--)
                                    <a href="{{$data1[$i]['url']}}" target="_blank">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="article">   
                                                <div class="cor-author-name">{{$data1[$i]['sourcename']}}</div>
                                                <div class="article-date">{!!substr($data1[$i]['publishedAt'],0,10)!!}  </div>
                                                <!-- <div class="menu-icon"><img src="/images/menu-options.png"></div> -->
                                                
                                                    <input name="newsId" type="hidden" value="{{$data1[$i]['id']}}">
                                                    @auth
                                                    <div class="menu-icon">
                                                        <button class="nostyle btn-submit" id="btn-submit" value="{{$data1[$i]['id']}}"><img src="/images/like.png" style="width:20px;height:auto;"></button>
                                                    </div>
                                                    @endauth
                                                <div class="article-img"><img src="{{$data1[$i]['urlToImage']}}"></div>
                                                <div class="article-body"><h4>{{$data1[$i]['title']}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                            <!--  Ajax Loading BBC Newses -->
                            <div class="more-news" id="more-newses-row2"></div>
                    </div>
                </div>
            </div>
            <div class="more-news" style="text-align: center;">
                <button class="more-news-button" id="getRequest1">More News...</button>
            </div>
        </div>
    </div>
    <div class="container-fluid newspanel-one" style="/*padding: 0;*/">
        <div class="container">
            <div class="row ">
                <div class="col-md-12"><br>
                    <div class="section-title">
                        <b><h3>CNN NEWS</h3><hr></b>
                    </div>
                    <div class="section-content">
                            <div class="row" id="row">
                            @for ($i = 7; $i >= 0; $i--)
                                    <a href="{{$data2[$i]['url']}}" target="_blank">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="article">   
                                                <div class="cor-author-name">{{$data2[$i]['sourcename']}}</div>
                                                <div class="article-date">{!!substr($data2[$i]['publishedAt'],0,10)!!}  </div>
                                                @auth
                                                <div class="menu-icon">
                                                        <button class="nostyle btn-submit" id="btn-submit" value="{{$data1[$i]['id']}}"><img src="/images/like.png" style="width:20px;height:auto;"></button>
                                                    </div>
                                                @endauth
                                                <div class="article-img"><img src="{{$data2[$i]['urlToImage']}}"></div>
                                                <div class="article-body"><h4>{{$data2[$i]['title']}}</h4>
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
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // $('#getRequest').click(function(){
            $("#getRequest").click(function(){
                $.get('getRequest',function(data){
                    $('#more-newses-row1').append(data);
                })  
            });
            // switch(){

            // }j
        });
        function search_live(){
            var searchValue=document.getElementById('search-button').value;
            // alert(searchValue);
            if(searchValue.length>0){
                document.getElementById('live-results').removeAttribute("hidden");
                //Ajax Search
                $.get('search-live/'+searchValue,function(data){
                    $('#live-results-div').html("<li>"+data+"</li>");
                })  
            }
            else{
                document.getElementById('live-results').setAttribute("hidden",true);
            }
        }
        function leave_search_live(){
            document.getElementById('live-results').setAttribute("hidden",true);
        }
        
    </script>
</body>
@auth
<script>
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    $(".btn-submit").click(function(e){
        e.preventDefault();
        var articleId = $(this).val();
        var userid="{{auth::user()->name}}";
        $.ajax({
            type:'get',
            url:'/saveNews',
            data:{articleId:articleId,userid:userid},
            success:function(data){
                alert(data);
            }
        });
    });
</script>
@endauth
</html>