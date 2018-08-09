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
                        <input type="text" name="searchbar" placeholder="Search News" class="p-4" id="search-button" onkeyup="search_live()" onblur="leave_search_live()">
                        <button  class="fa fa-search nostyle subBut"><input type="submit" class="nostyle" value=""></button>
                    </form>
                    
                    <div class="livesearch">
                        <ul style="display:contents" id="live-results" hidden>
                            <div id="live-results-div">

                            </div>
                        </ul>
                    </div>
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
                                    
                                    <div class="article-1">
                                        <div class="cover-color">
                                            <div class="cor-author-name" style="margin: 10px 2px 10px 10px;">BBC</div>
                                            <div class="article-date">August 21 2018</div>
                                            <div class="article-1-body"><h4 style="font-size: 1.5rem;">Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <d  iv class="col-md-6 col-sm-6">
                                    <div class="article-2">
                                        <div class="article-2-single">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="/images/01.jpg">
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                                    <div class="cor-author-name">BBC</div>
                                                    <div class="article-date">August 21 2018</div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="article-2-single">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="/images/02.jpg">
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                                    <div class="cor-author-name">BBC</div>
                                                    <div class="article-date">August 21 2018</div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="article-2-single">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="/images/03.jpg">
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                                    <div class="cor-author-name">BBC</div>
                                                    <div class="article-date">August 21 2018</div>
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
            <div class="row ">
                <div class="col-md-12"><br>
                    <div class="section-title">
                        <b><h3>FIFA 2018</h3><hr></b>
                    </div>
                    <div class="section-content">
                            <div class="row">
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
                                        <div class="cor-author-name">BBC</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/04.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Ajax Loading BBC Newses -->
                            <div class="more-news" id="more-newses-row1"></div>
                    </div>
                </div>
            </div>
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
                                        <div class="cor-author-name">BBC</div>
                                        <div class="article-date">August 21 2018</div>
                                        <div class="menu-icon"><img src="/images/menu-options.png"></div>
                                        <div class="article-img"><img src="/images/04.jpg"></div>
                                        <div class="article-body"><h4>Brett Kavanaugh picked for Supreme Court by President Trump</h4>
                                        </div>
                                    </div>
                                </div>
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
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // $('#getRequest').click(function(){
            $("#getRequest,#getRequest1").click(function(){
                $.get('getRequest',function(data){
                    $('#more-newses-row1').hide();                    
                    $('#more-newses-row1').append(data);
                    $('#more-newses-row1').show(200);       
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

</html>