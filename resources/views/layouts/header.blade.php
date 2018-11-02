<script src="{{ asset('js/app.js') }}" defer></script>
<div class="container-fluid bg-white p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('index')}}">
                        <img src="/images/logo.png" class="logo">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="news-category">
                        <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="form-control form-control-lg" name="category"   >
                            <option value="">Choose News Channel </option>
                            @for($i=0;$i<count($data3);$i++)
                                <option value="{{url('news')}}/{{$data3[$i]}}">{{$data3[$i]}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <div class="row">
                            <div class="col-md-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            </div>
                            <div class="col-md-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </div>
                        </div>

                        @else
                            
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link fa notification dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            Dashboard
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </div>
                        </div>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="searchform">
                <div class="search-bar">
                    <h1>Hello! and Welcome to our site</h1>
                    <form action="results" method="GET" style="background-color:white;border-radius: 3px;" autocomplete="off">
                    <!-- {{ csrf_field() }} -->
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