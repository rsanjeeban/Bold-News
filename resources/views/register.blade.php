<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet"/> -->
    
</head>
<body>
<div class="pageBackground">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="row"    >
            <div class="col-md-8 bg-white" style="padding-left:0;padding-right: 0;">
                <div class="login-left-image">
                    <img src="/images/news-back.jpg" class="col-md">
                </div>
            </div>
            <div class="col-md-4">
                <div class="loginform text-center">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        <img src="/images/logo.png" style="width:200px;"><br><br>
                        
                        <h2 style="font-size:20pt;">REGISTRATION</h2><br>
                        s
                        <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="User Name" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <br><br>
                        <input id="email" type="email" class="w-75 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="someone@example.com" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <br><br>
                        
                        <input id="password" type="password" class="w-75 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <br><br>

                        <input id="password-confirm" type="password" class="w-75" name="password_confirmation" required placeholder="Retype Password"><br>
                        <input type="checkbox">Show Password <br>   
                        <!-- <input type="submit" value="Register Now" class="btn btn-primary w-75 loginbutton"><br><br> -->
                        <button type="submit" class="btn btn-primary w-75 loginbutton">
                            {{ __('Register') }}
                        </button><br>
                        Already have an account? <a href="/login" style="color:#c0392b;">Sign in now</a>
                        
                    </form>
                </div>
                
            </div>
        </div>    
    </div>
    
</div>

</body>
</html>