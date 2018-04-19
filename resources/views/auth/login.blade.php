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
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <!-- <input type="hidden" name="userType" value="s"> -->
                         @if ($errors->has('IDnum') || $errors->has('password'))                           
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('IDnum') }}</strong>
                            </div>
                        @endif
                        <!-- STUDENT NUMBER -->
                        <div class="field-wrap{{ $errors->has('IDnum') ? ' has-error ' : '' }}">
                            <label>Student Number<span class="req">*</span></label>
                            <input type="text" name="IDnum" value="{{ old('IDnum') }}" required autocomplete="off" name="IDnum"/>
                        </div>                      
                        <!-- /STUDENT NUMBER -->

                        <!-- STUDENT PASSWORD -->
                        <div class="field-wrap{{ $errors->has('password') ? ' has-error ' : '' }}">
                            <label>Password<span class="req">*</span></label>
                            <input type="password" required autocomplete="off" name="password" />
                        </div>   
                        <!-- /STUDENT PASSWORD -->                

                        <!-- <input type="submit" name="login" value="Login"/> -->
                        <button type="submit" class="button button-block"/>Log In</button>
                        <p class="forgot"><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                    </form>
                </div>
                <!-- /STUDENT LOGIN -->

                <!-- TEACHER LOGIN -->
                <div id="teacher">  
                    <form method="post" action="{{ route('login') }}">  
                        {{ csrf_field() }}
                        <!-- <input type="hidden" name="userType" value="t"> -->
                         @if ($errors->has('IDnum') || $errors->has('password'))                           
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('IDnum') }}</strong>
                            </div>
                        @endif                     
                        <!-- PROF ID -->
                        <div class="field-wrap{{ $errors->has('IDnum') ? ' has-error ' : '' }}">
                            <label>Prof ID<span class="req">*</span></label>
                            <input type="text" name="IDnum" value="{{ old('IDnum') }}" required autocomplete="off" name="IDnum"/>
                        </div>
                        <!-- /PROF ID -->

                        <!-- PROF PASSWORD -->
                        <div class="field-wrap{{ $errors->has('password') ? ' has-error ' : '' }}">
                            <label>Password<span class="req">*</span></label>
                            <input type="password" required autocomplete="off" name="password" />
                        </div>
                        <!-- /PROF PASSWORD -->

                        <button type="submit" class="button button-block"/>Log In</button>
                        <p class="forgot"><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                    </form>
                </div> 
                <!-- /TEACHER LOGIN -->

            </div>  
        </div> <!-- /FORM -->
    </body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="js/login.js"></script>
</html>
