<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>UII Student Area</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ url('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sweet-alert.css') }}"/>
    <script src="{{ asset('js/sweet-alert.min.js') }}"></script>
</head>
<body>
<!--header starts-->
<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <a href="{{ url('home') }}"><img src="{{ url('images/logo.png') }}"/></a>
            </div>
            <span class="menu"> </span>

            <div class="m-clear"></div>
            <div class="top-menu">
                <ul>
                    @yield('menu')
                    <li><a class="scroll" href="{{ url('auth/logout') }}">LOG OUT</a></li>
                </ul>
                <script>
                    $("span.menu").click(function () {
                        $(".top-menu ul").slideToggle(200);
                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @yield('content')
</div>
<!-- <div class="fotter">
	 <div class="container">
		 <h3>143 City Located Hotels World Wide</h3>
		 <h4>"Hospitality, Quality & Good Locations. We only provide you with the best hotels" - John Deo</h4>
		 <i class="man"></i>
	 </div>
</div> -->
<!---->
<div class="fotter-info">
    <div class="container">
        <div class="col-md-5 details">
            <div class="hotel-info">
                <h4>ABOUT THIS WEB</h4>

                <p>Suspendisse erat mi, tincidunt sit amet massa quis, commodo fermentum diam. Sed nec dui nec nunc
                    tempor interdum.</p>

                <p>Ut vulputate augue urna, ut porta dolor imperdiet a. Vestibulum nec leo eu magna aliquam ornare.</p>
            </div>
            <div class="news">
                <h4>LATEST NEWS</h4>
                <h5>Grand Hotel Joins DeluxelHotels</h5>
                <a href="#">15 AUG</a>
                <h5>Happy Chirstmas To Everyone</h5>
                <a href="#">15 AUG</a>
                <h5>Best Places To Visit 2014</h5>
                <a href="#">15 AUG</a>
                <h5>Various Offers</h5>
                <a href="#">15 AUG</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-7 details">
            <div class="join">
                <h4>JOIN</h4>

                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus
                    vestibulum blandit egestas.
                    Nam id lectus vel orci luctus consectetur eget id elit. In tortor odio, pellentesque eu arcu sit
                    amet, lacinia euismod nisi. Aliquam sodales tristique mauris ac fermentum.
                    Donec vel varius ipsum. Pellentesque vitae mollis massa. </p>

                <p>There is no costs or whatsoever so sign up today!</p>
                <a href="#">READ MORE</a>
            </div>
            <div class="member">
                <h4>MEMBERS AREA</h4>

                <form>
                    <p>Username</p>
                    <input type="text" placeholder="" required/>

                    <p>Password</p>
                    <input type="password" placeholder="" required/>
                    <input type="submit" value="LOGIN"/>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <h6>Template by <a href="http://w3layouts.com/">W3layouts</h6>
</div>
<!---->

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

    @if(Session::has('successMessage'))
        swal('Berhasil' , '{{ Session::get('successMessage') }}', 'success');
    @endif

    @if(Session::has('errorMessage'))
        swal('Maaf' , '{{ Session::get('errorMessage') }}', 'warning');
    @endif
</script>

</body>
</html>