<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Login &raquo; UII Student Area</title>
    <link href="{{ url('css/login/style.css') }}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="{{ asset('css/sweet-alert.css') }}"/>
    <script src="{{ asset('js/sweet-alert.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Simple Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements" ./>
    <script type="application/x-javascript">
        addEventListener("load", function () {
                    setTimeout(hideURLbar, 0);
                }, false
        );
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700'
          rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
<h1></h1>

<div class="login">

    <div class="ribbon-wrapper h2 ribbon-red">
        <div class="ribbon-front">
            <h2>User Login</h2>
        </div>
        <div class="ribbon-edge-topleft2"></div>
        <div class="ribbon-edge-bottomleft"></div>
    </div>
    <form method="POST" action="{{ url('auth/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ul>
            <li>
	            <i class=" icon user"></i>
                <input name="nim" type="text" class="text" value="{{ old('nim') }}" placeholder="NIM">
            </li>
            <li>
	            <i class=" icon lock"></i>
                <input name="password" type="password" placeholder="password">
            </li>
        </ul>
        <div class="submit">
            <input type="submit" value="Log in">
        </div>
    </form>
</div>
<script>
    @if(count($errors) || Session::has('errorMessage'))

    var text2 = ""
    @foreach($errors->all() as $error)
    text2 += "- {{ $error }}" + "\n"
    @endforeach

    text2 += "{{ Session::get('errorMessage') }}"

    swal({
        title: "Whooops!",
        text: "" + text2 + "",
        type: "warning"
    });
    @endif
</script>
<!--start-copyright-->
<!-- <div class="copy-right">
     <p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>
</div> -->
<!--//end-copyright-->
</body>
</html>