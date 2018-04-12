<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 -->
 <!doctype html>
<html>
<head>
    <title>VINI | Login</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel="stylesheet" href="css/login.css">
</head>
    <body>
        <!-- NAVIGATION BAR -->
            <nav>
                <a href="#"><img src="images\logogray2.png"></a>
            </nav>
        <!-- /NAVIGATION BAR -->

        <!-- FORM -->
        <div class="form">

            <!-- LOGIN TYPE -->
            <ul class="tab-group">
                <li class="tab active"><a href="#student">Student</a></li>
                <li class="tab"><a href="#teacher">Teacher</a></li>
            </ul>
            <!-- /LOGIN TYPE -->
          
            <div class="tab-content">
                <!-- STUDENT LOGIN -->
                <div id="student">          
                    <form action="" method="post">
                        <!-- STUDENT NUMBER -->
                        <div class="field-wrap">
                            <label>Student Number<span class="req">*</span></label>
                            <input type="text"required autocomplete="off"/>
                        </div>
                        <!-- /STUDENT NUMBER -->

                        <!-- STUDENT PASSWORD -->
                        <div class="field-wrap">
                            <label>Password<span class="req">*</span></label>
                            <input type="password"required autocomplete="off"/>
                        </div>
                        <!-- /STUDENT PASSWORD -->

                        <button class="button button-block"/>Log In</button>
                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                    </form>
                </div>
                <!-- /STUDENT LOGIN -->

                <!-- TEACHER LOGIN -->
                <div id="teacher">  
                    <form action="/" method="post">

                        <!-- PROF ID -->
                        <div class="field-wrap">
                            <label>Prof ID<span class="req">*</span></label>
                           <input type="text"required autocomplete="off"/>
                        </div>
                        <!-- /PROF ID -->

                        <!-- PROF PASSWORD -->
                        <div class="field-wrap">
                            <label>Password<span class="req">*</span></label>
                            <input type="password"required autocomplete="off"/>
                        </div>
                        <!-- /PROF PASSWORD -->

                        <button class="button button-block"/>Log In</button>
                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                    </form>
                </div> 
                <!-- /TEACHER LOGIN -->

            </div>  
        </div> <!-- /FORM -->
    </body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="js/login.js"></script>
</html>
