@extends('layouts.main')

@section('menu')
    <li><a href="{{ url('home') }}">START</a></li>
    <!-- <li><a class="scroll" href="{{ url('facilities') }}">FACILITIES</a></li> -->
    <li class="active"><a class="scroll" href="{{ url('booking') }}">BOOKING</a></li>
    <!-- <li><a class="scroll" href="{{ url('contact') }}">CONTACT US</a></li> -->
@endsection

@section('content')

    <div class="contact-bg2">
        <div class="container">
            <div class="booking">
                <h3>Booking</h3>

                <div class="col-md-2"></div>
                <div class="col-md-8 booking-form">
                    <form action="{{ url('booking/store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <h5>ROOM</h5>
                        <select name="room_id" style="width: 30%">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id}}"
                                        {{ old('room_id') == $room->id ? 'selected' : '' }}>
                                    {{ $room->title }}
                                </option>
                            @endforeach
                        </select>
                        <h5>TIME</h5>
                        <select name="time" class="arrival">
                            @for($i=8;$i<18;$i++)
                                <option value="{{ $i }}" {{ old('time') == $i ? 'selected' : '' }}>
                                    {{ $i }}:00 - {{ $i+1 }}:00
                                </option>
                            @endfor
                        </select>
                        <h5>DATE</h5>
                        <input class="date" id="datepicker"
                               type="text" name="date"
                               value="{{ old('date') }}"
                               placeholder="{{ date('Y-m-d') }}"
                               onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = '{{ date('Y-m-d') }}';}"
                               style="width: 20%;padding-left: 22px;">
                        <!---strat-date-piker---->
                        <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}"/>
                        <script src="{{ url('js/jquery-ui.js') }}"></script>
                        <script>
                            $(function () {
                                $("#datepicker,#datepicker1").datepicker();
                            });
                        </script>
                        <!---/End-date-piker---->
                        <h5 class="mem">MEMBERS</h5>
                        <input min="1" type="number" id="quantity" name="members" value="{{ old('members') }}"
                               class="form-control input-small">
                        <h5>DESCRIPTION</h5>
                        <textarea name="description">{{ old('description') }}</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </form>
                </div>
                <div class="col-md-2"></div>
                <!-- <div class="col-md-4 booking-news">
                    <h4>Latest News</h4>
                    <div class="LatestNews">
                        <h6><a href="#">Starting New Ventures for a Current Bussi</a></h6>
                        <span>01-7-2014 </span>
                        <p>Faworki bonbon marshmallow caramels applicake tart gummi bears liquorice.</p>
                    </div>
                    <div class="LatestNews">
                        <h6><a href="#">Starting New Ventures for a Current Bussi</a></h6>
                        <span>01-7-2014 </span>
                        <p>Faworki bonbon marshmallow caramels applicake tart gummi bears liquorice.</p>
                    </div>
                       <div class="LatestNews">
                        <h6><a href="#">Starting New Ventures for a Current Bussi</a></h6>
                        <span>01-7-2014 </span>
                        <p>Faworki bonbon marshmallow caramels applicake tart gummi bears liquorice.</p>
                    </div>
                    <div class="LatestNews">
                        <h6><a href="#">Starting New Ventures for a Current Bussi</a></h6>
                        <span>01-7-2014 </span>
                        <p>Faworki bonbon marshmallow caramels applicake tart gummi bears liquorice.</p>
                    </div>
                </div> -->

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    </div>

@endsection