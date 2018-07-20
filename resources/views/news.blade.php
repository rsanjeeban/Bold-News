<!DOCTYPE html>
<html>
<head>
    <title>Prime24</title>
    <link rel="icon" href="/images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="stylesheet" href="/css/all.css" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

</head>
<body>
    <div class="container-fluid bg-white p-3">
        <div class="container">
            <img src="/images/logo.png" class="logo">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="searchform">
                <div class="search-bar">
                    <h1>Hello! and Welcome to our site</h1>
                    <form action="" method="" style="background-color:white;border-radius: 3px;" autocomplete="off">
                        <input type="text" name="searchbar" placeholder="Search News" class="p-4">
                        <button  class="fa fa-search nostyle subBut"><input type="submit" class="nostyle" value=""></button>
                    </form>
                    <div class="p-1"></div>
                <label style="font-family: 'Oswald', sans-serif;font-size: 11pt;color: #b1bcd5;">Search Suggestion :</label>
                <button class="suggest-button">BBC</button>
                <button class="suggest-button">CNN</button>
                <button class="suggest-button">Google News</button>
                <button class="suggest-button">America</button>
                <button class="suggest-button">FIFA 2018</button>
                <button class="suggest-button" style="border:1px solid #b0bed5;color:#b1bdd4;background-color: transparent;">More...</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <div class="container-fluid newspanel-one" style="/*padding: 0;*/">
        <div class="container">
            <div class="row ">
                <div class="col-md-12"><br>
                    <div class="section-title">
                        <b><h3>WELCOME TO BBC NEWS</h3></b><hr>
                    </div>
                    {{($data[0]->title)}}

                    <div class="section-content">
                            <div class="row">
@foreach ($data as $display)
<div class="box">
    <h1>{{ $display['title'] }}</h1>
</div>
@endforeach                                
                                @for ($i=0;$i<=sizeof($data);$i++)
                                    {{$data[$i]->title}}
                                @endfor
                                <div class="col-md-3 col-sm-6">
                                    <div class="article">
                                        <div class="cor-author-name">BBC</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/01.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="article">
                                        <div class="cor-author-name">CNN</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/02.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="article">
                                        <div class="cor-author-name">Google News</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/03.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="article">
                                        <div class="cor-author-name">Google News</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/03.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="article">
                                        <div class="cor-author-name">BBC</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/04.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
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
    <div class="container-fluid subcribe">
        <center><div class="container subcribe-area">
            GET UPDATES, TIPS AND OFFERS STRAIGHT TO YOUR INBOX
            <input type="text" name="subcribe">
            <input type="submit" value="SUBSCRIBE">
        </div></center>
    </div>
    <div class="container-fluid" style="background-color: #313131">
        <div class="footer">
            <br><br><br>
        </div>
    </div>
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