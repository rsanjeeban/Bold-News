<html>
<head>
    <title>Register</title>
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
            <div class="col-md-4" style="padding-left: 60px;padding-right: 60px">
                <div class="loginform text-center">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    <img src="/images/logo.png" style="width:200px;"><br><br>
                                <h2 style="font-size:20pt;">REGISTRATION</h2><br>
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="User Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="someone@example.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100 loginbutton">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        Already have an account? <a href="/login" style="color:#c0392b;">Sign in now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>