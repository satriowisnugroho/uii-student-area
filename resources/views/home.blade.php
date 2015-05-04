@extends('layouts.main')

@section('menu')
    <li class="active"><a href="{{ url('home') }}">START</a></li>
    <!-- <li><a class="scroll" href="{{ url('facilities') }}">FACILITIES</a></li> -->
    <li><a class="scroll" href="{{ url('booking') }}">BOOKING</a></li>
    <!-- <li><a class="scroll" href="{{ url('contact') }}">CONTACT US</a></li> -->
@endsection

@section('content')


    <div class="banner">
        <div class="banner-info text-center">
            <h3><label>Hello,</label> You've Reached</h3>

            <h1>STUDENT AREA</h1>
            <span></span>
            <ul>
                <!-- <li><a class="scroll" href="#">HOTEL</a><i class="line"></i></li>
                <li><a class="scroll" href="#">SPA SALOON</a><i class="line2"></i></li>
                <li><a class="scroll" href="#">FINE DINING</a></li> -->
                <!-- <div class="clearfix"></div> -->
            </ul>
        </div>
    </div>

    <!---strat-date-piker---->
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}"/>
    <script src="{{ url('js/jquery-ui.js') }}"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!---/End-date-piker---->
    <link type="text/css" rel="stylesheet" href="{{ url('css/JFGrid.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('css/JFFormStyle-1.css') }}"/>
    <script type="text/javascript" src="{{ url('js/JFCore.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/JFForms.js') }}"></script>
    <!-- Set here the key for your domain in order to hide the watermark on the web server -->
    <script type="text/javascript">
        (function () {
            JC.init({
                domainKey: ''
            });
        })();
    </script>
    <div class="online_reservation">
        <div class="b_room">
            <div class="booking_room">
                <div class="reservation">
                    <ul>
                        <li class="span1_of_1 left">
                            <h5>Date</h5>

                            <div class="book_date">
                                <form>
                                    <input class="date" id="datepicker" type="text" value="{{ date('m-d-Y') }}"
                                           onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = '{{ date('m-d-y') }}';}">
                                </form>
                            </div>
                        </li>
                        <li class="span1_of_1 left">
                            <h5>Time</h5>

                            <div class="book_date">
                                <form>
                                    <select name="time">
                                        @for($i=8;$i<18;$i++)
                                            <option value="{{ $i }}">{{ $i }}:00 - {{ $i+1 }}:00</option>
                                        @endfor
                                    </select>
                                </form>
                            </div>
                        </li>
                        <li class="span1_of_1">
                            <h5>Room type</h5>
                            <!--start section_room-->
                            <div class="section_room">
                                <select class="frm-field">
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->title }}">{{ $room->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li class="span1_of_3">
                            <div class="date_btn">
                                <form>
                                    <input type="submit" value="View"/>
                                </form>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <!---->
    <div class="package text-center">
        <div class="container">
            <h3>Book A Package</h3>

            <p>Sed euismod sem id consequat rutrum. Ut convallis lorem a orci mollis, eu vulputate libero aliquet.
                Praesent egestas nisi sed purus tincidunt faucibus. Aliquam lobortis orci lacus, sed faucibus augue
                dapibus vitae. Ut vitae mi sapien. Phasellus a eros justo.
                Curabitur odio massa, tincidunt nec nibh sit amet</p>
            <!-- requried-jsfiles-for owl -->
            <link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet">
            <script src="{{ url('js/owl.carousel.js') }}"></script>
            <script>
                $(document).ready(function () {
                    $("#owl-demo").owlCarousel({
                        items: 1,
                        lazyLoad: true,
                        autoPlay: true,
                        navigation: true,
                        navigationText: false,
                        pagination: false
                    });
                });
            </script>
            <!-- //requried-jsfiles-for owl -->
            <div id="owl-demo" class="owl-carousel">
                <div class="item text-center image-grid">
                    <ul>
                        <li><img src="images/1.jpg" alt=""></li>
                        <li><img src="images/2.jpg" alt=""></li>
                        <li><img src="images/3.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="item text-center image-grid">
                    <ul>
                        <li><img src="images/4.jpg" alt=""></li>
                        <li><img src="images/5.jpg" alt=""></li>
                        <li><img src="images/6.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="item text-center image-grid">
                    <ul>
                        <li><img src="images/7.jpg" alt=""></li>
                        <li><img src="images/8.jpg" alt=""></li>
                        <li><img src="images/9.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <!---->
    <div class="rooms text-center">
        <div class="container">
            <h3>Our Room Types</h3>

            <div class="room-grids">
                @foreach($rooms as $room)
                <div class="col-md-6 room-sec">
                    <img src="{{ asset('images/'.$room->image) }}" alt=""/>
                    <h4>{{ $room->title }}</h4>

                    <p>{{ $room->description }}</p>

                    <div class="items">
                        <li><a href="#"><span class="img1"> </span></a></li>
                        <li><a href="#"><span class="img2"> </span></a></li>
                        <li><a href="#"><span class="img3"> </span></a></li>
                        <li><a href="#"><span class="img4"> </span></a></li>
                        <li><a href="#"><span class="img5"> </span></a></li>
                        <li><a href="#"><span class="img6"> </span></a></li>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection