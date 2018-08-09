<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
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
            <div class="col-md-4" style="padding-left: 60px;padding-right: 60px">
                <div class="loginform text-center">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf   
                        <img src="/images/logo.png" style="width:200px;"><br><br>
                        <h2 style="font-size:20pt;">MEMBER LOGIN</h2><br>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="someone@example.com" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary w-100 loginbutton">
                                    {{ __('Register') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                        Don't have a SpeedNews account? <br><a href="/register" style="color:#c0392b;">Sign up now</a>
                    </form>
                </div>
                
            </div>
        </div>    
    </div>
    
</div>

</body>
</html>