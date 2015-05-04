@extends('layouts.main')

@section('menu')
	<li><a href="{{ url('home') }}">START</a></li>
	<li class="active"><a class="scroll" href="{{ url('facilities') }}">FACILITIES</a></li>
	<li><a class="scroll" href="{{ url('booking') }}">BOOKING</a></li>
	<li><a class="scroll" href="{{ url('contact') }}">CONTACT US</a></li>
@endsection

@section('content')

<!---->
<div class="main_bg">
	 <div class="container">
		 <div class="main">	          
			   <ul class="service_list">
				 <li>
					 <div class="ser_img">
						    <a href="details.html">
							<img src="images/ser_pic1.jpg" alt="" />
							<span class="next"> </span>
							</a>
				      </div>	
						<a href="details.html"><h3>Wifi-Internet</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details.html">Lorem ipsum</a></h4>
				 </li>
				 <li>
					 <div class="ser_img">
							<a href="details.html">
							<img src="images/ser_pic2.jpg" alt="" />
							<span class="next"> </span>
							</a>
					 </div>	
					 <a href="details.html"><h3>Airy lobby pool</h3></a>
					 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
					 <h4><a href="details.html">Nulla accumsan</a></h4>
				 </li>
				 <li>
					 <div class="ser_img">
							<a href="details.html">
							<img src="images/ser_pic3.jpg" alt="" />
							<span class="next"> </span>
							</a>
					 </div>						
						<a href="details.html"><h3>Laundry</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a href="details.html">Vestilum feliing</a></h4>
				 </li>
				 <li>
					 <div class="ser_img">
							<a href="details.html">
							<img src="images/ser_pic4.jpg" alt="" />
							<span class="next"> </span>
							</a>
					 </div>						
						<a href="details.html"><h3>Spa</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a href="details.html">Nulla commodo</a></h4>
				 </li>
					<div class="clear"></div>
			  </ul>
			  
			  <ul class="service_list top">
				 <li>
					 <div class="ser_img">
						 <a href="details.html">
						 <img src="images/ser_pic5.jpg" alt="" />
						 <span class="next"> </span>
						 </a>
					 </div>						
						<a href="details.html"><h3>Best Cooking</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details.html">Lorem ipsum</a></h4>
				 </li>
				 <li>
					 <div class="ser_img">
					     <a href="details.html">
						 <img src="images/ser_pic6.jpg" alt="" />
						 <span class="next"> </span>
						 </a>
				     </div>						
					    <a href="details.html"><h3>Swim-up bar</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a href="details.html">Nulla accumsan</a></h4>
				 </li>
			     <li>
				     <div class="ser_img">
							<a href="details.html">
							<img src="images/ser_pic7.jpg" alt="" />
							<span class="next"> </span>
							</a>
					 </div>	
						<a href="details.html"><h3>Services</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a href="details.html">Vestilum feliing</a></h4>											
			     </li>
				 <li>
					 <div class="ser_img">
						 <a href="details.html">
						 <img src="images/ser_pic8.jpg" alt="" />
						 <span class="next"> </span>
						 </a>
					 </div>		
						<a href="details.html"><h3>Special Dishes</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details.html">Lorem ipsum</a></h4>
				 </li>
					<div class="clear"></div>
			  </ul>
			 <div class="clear"></div>
		   </div>
	  </div>
</div>	

@endsection