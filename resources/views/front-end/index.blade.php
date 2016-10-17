@extends('front-end.layouts.header')
@include('front-end.layouts.menu')



<div class="slider-bg"><!-- slider start-->
  <div id="slider" class="owl-carousel owl-theme slider">
    <div class="item"><img class="img-responsive" src="images/wedding-hub-1.jpg"  alt=" Wedding couple just married"></div>
    <div class="item"><img class="img-responsive" src="images/wedding-hub-4.jpg"  alt=" Wedding couple just married"></div>
    <div class="item"><img class="img-responsive" src="images/wedding-hub-2.jpg"  alt=" Wedding couple just married"></div>
	<div class="item"><img class="img-responsive" src="images/wedding-hub-5.jpg"  alt=" Wedding couple just married"></div>
  </div>
  <div class="find-section"><!-- Find search section-->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 finder-block">
          <div class="finder-caption">
            <h1>WEDDING HUB</h1>
            <p>Over <strong>1200+ Wedding Vendor </strong>for you special date &amp; Find the perfect venue &amp; save you date.</p>
          </div>
          <div class="finderform">
            <form>
              <div class="row">
                <div class="form-group col-md-3">
                  <select class="form-control custom-select">
                    <option class="drop">Select Category</option>
                    <option class="drop" value="Venue">Venue</option>
                    <option class="drop" value="Car Rent">Car Rent</option>
					<option class="drop" value="Catering">Catering</option>
                    <option class="drop" value="Photographer">Photographer</option>
                    <option class="drop" value="Videography">Videography</option>
                    <option class="drop" value="jewellery">Jewellery</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <select class="form-control">
                    <option class="drop">Select City</option>
                    <option class="drop" value="Trivandrum">Trivandrum</option>
                    <option class="drop" value="Kollam">Kollam</option>
                    <option class="drop" value="Pathanamthitta">Pathanamthitta</option>
                    <option class="drop" value="Alappuzha">Alappuzha</option>
                    <option class="drop" value="Kottayam">Kottayam</option>
					<option class="drop" value="Idukki">Idukki</option>
					<option class="drop" value="Ernakulam">Ernakulam</option>
					<option class="drop" value="Thrissur">Thrissur</option>
					<option class="drop" value="Palakkad">Palakkad</option>
					<option class="drop" value="Malappuram">Malappuram</option>
					<option class="drop" value="Kozhikode">Kozhikode</option>
					<option class="drop" value="Wayanad">Wayanad</option>
					<option class="drop" value="Kannur">Kannur</option>
					<option class="drop" value="Kasargod">Kasargod</option>
                  </select>
                </div>
				<div class="form-group form-button col-md-1">
                    <button class="btn btn-warning"><i class="fa fa-globe fa-style"></i></button> <p class="text ">Kazhakootam</p>
				</div>
                <div class="form-group col-md-4">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Let's Go</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Find search section--> 
</div>
<!-- slider end-->

<div class="section-space80"><!-- Feature Blog Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb60 text-center">
                    <h1>OUR<span class="wedding-vision"> VISION</span></h1>
                    <p class="italic">
                        "<b>A</b>im of <b>O</b>ur site is to provide all the information regarding <b>C</b>onvention <b>C</b>enters in <span><b> God's own country" </b></span>
                    </p>        </div>
            </div>
        </div>
        <div class="row"><!-- feature center -->
            <div class="col-md-4">
                <div class="feature-block feature-center"><!-- feature block -->
                    <div class="feature-icon"><img src="images/vendor.svg" alt=""></div>
                    <h2><a href="{{ url('/vendor-listing-bubba') }}">Find Convention Centre</a></h2>
                    <p>Here you can find all the convention centers in kerala </p><br>
                </div>
            </div>
            <!-- /.feature block -->

            <div class="col-md-4">
                <div class="feature-block feature-center"><!-- feature block -->
                    <div class="feature-icon"><img src="images/mail.svg" alt=""></div>
                    <h2><a href="{{ url('/contact-us') }}">Contact</a></h2>
                    <p>24hrs we were here for the clarifications of your doubts.</p>
                </div>
            </div>
            <!-- /.feature block -->
            <div class="col-md-4">
                <div class="feature-block feature-center"><!-- feature block -->
                    <div class="feature-icon"><img src="images/couple.svg" alt=""></div>
                    <h2><a href="#">Special Events</a></h2>
                    <p>All the special event through our hands.. You can check and join.</p>
                </div>
            </div>
            <!-- /.feature block --> 
        </div>
        <!-- /.feature center --> 
    </div>
</div>
<!-- Feature Blog End -->
<div class="section-space80 bg-light cars">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb60 text-center">
                    <h1>FEATURED<span class="wedding-vision"><strong> WEDDING </strong></span>MOMENTS</h1>
                    <p>Are you looking for the perfect place to hold your next event? Accessible, compact, dynamic, inspirational – we can connect with all the elements you need for a great comfortable destination.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb20 col-md-6">
                    <h1>Convention Center</h1>
                </div>
                <div class="col-md-6 studio-mr">
                    <h4><a href="{{ url('/vendor-listing-bubba') }}" class="more"> More </a></h4>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="{{url('details')}}"><img src="images/convention-center-event-venue.jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="feature-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="{{url('details')}}" class="title">Al Saj Convention Centre</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Al Saj Convention Centre, Kazhakuttam, Trivandrum, India.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹85000 - ₹500000</div>
                        </div>-->
                    </div>
                    <!-- vendor details --> 
                </div>
            </div>

            <!-- /.vendor box start-->
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="#"><img src="images/convention-center-stage-decoration--arrangement.jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="rated-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="#" class="title"> RDR Convention Centre</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> RDR Convention Centre, Palayam, Trivandrum, India.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹69000 - ₹200000</div>
                        </div>-->
                    </div>
                </div>
                <!-- vendor details --> 
            </div>
            <!-- /.vendor box start-->
            <div class="col-md-4 vendor-box"><!-- vendor box start-->
                <div class="vendor-image"><!-- vendor pic --> 
                    <a href="#"><img src="images/convention-center-TVMClub.jpg" alt="wedding vendor" class="img-responsive"></a>
                    <div class="popular-label"></div>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.vendor pic -->
                <div class="vendor-detail"><!-- vendor details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Trivandrum Club</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Trivandrum Club, v, 12345, Vazhuthacadu, Trivandrm, India.</p>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(5)</span> </div>
                    </div>
                    <!-- /.caption -->
<!--                    <div class="vendor-price">
                        <div class="price">₹90000 - ₹300000</div>
                    </div>-->
                </div>
                <!-- vendor details --> 
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!-- car rentel-->
<div class="hr1"></div>
<div class="section-space30 bg-light cars">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb20 col-md-6">
                    <h1>Car Rental</h1>
                </div>
                <div class="col-md-6 studio-mr">
                    <h4><a href="{{ url('/carrental-listing') }}" class="more"> More </a></h4>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="{{url('details')}}"><img src="images/wedding-car-1.jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="feature-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-cab"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="{{url('details')}}" class="title">Southgate Travels</h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Mukalel Building, VL- 43, Vikas Lane, Kunnukuzhy, Thiruvananthapuram </p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹10,000 - ₹20,000</div>
                        </div>-->
                    </div>
                    <!-- vendor details --> 
                </div>
            </div>

            <!-- /.vendor box start-->
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="#"><img src="images/convention-center-car2.jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="rated-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-cab"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="#" class="title"> Kerala Luxury Cars</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Kerala Luxury Cars, Tc-234/24,Jacobs building, Vytilla,Ernakulam, India.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹20,000 ABOVE</div>
                        </div>-->
                    </div>
                </div>
                <!-- vendor details --> 
            </div>
            <!-- /.vendor box start-->
            <div class="col-md-4 vendor-box"><!-- vendor box start-->
                <div class="vendor-image"><!-- vendor pic --> 
                    <a href="#"><img src="images/convention-center-car3.jpg" alt="wedding vendor" class="img-responsive"></a>
                    <div class="popular-label"></div>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-cab"></i></a></div>
                </div>
                <!-- /.vendor pic -->
                <div class="vendor-detail"><!-- vendor details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Happy Journey Travels</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Happy Journey Travels, Cherot Ln, Chakkorathukulam, Kozhikode, India.</p>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(5)</span> </div>
                    </div>
                    <!-- /.caption -->
<!--                    <div class="vendor-price">
                        <div class="price">₹9,000 - ₹30000</div>
                    </div>-->
                </div>
                <!-- vendor details --> 
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--/car rentel-->
<div class="hr1"></div>
<!-- Studio -->

<div class="section-space30 bg-light cars">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb20 col-md-6">
                    <h1>Studio</h1>
                </div>
                <div class="col-md-6 studio-mr">
                    <h4><a href="{{ url('/studio-listing') }}" class="more"> More </a></h4>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="{{url('details')}}"><img src="images/convention-center-studio1.jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="feature-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-camera"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="{{url('details')}}" class="title">iris Studio</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> iris Studio, Tirur Thuchan Parambu Rd, Tirur, Kerala 676101</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹25000 - ₹100000</div>
                        </div>-->
                    </div>
                    <!-- vendor details --> 
                </div>
            </div>

            <!-- /.vendor box start-->
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="#"><img src="images/convention-center-studio2.jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="rated-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-camera"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="#" class="title"> babas Studio</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> babas, Saraswathy Bhavan,Pazhavangadi, Thiruvananthapuram, Kerala 695036</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹69000 - ₹200000</div>
                        </div>-->
                    </div>
                </div>
                <!-- vendor details --> 
            </div>
            <!-- /.vendor box start-->
            <div class="col-md-4 vendor-box"><!-- vendor box start-->
                <div class="vendor-image"><!-- vendor pic --> 
                    <a href="#"><img src="images/convention-center-studio3.jpg" alt="wedding vendor" class="img-responsive"></a>
                    <div class="popular-label"></div>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-camera"></i></a></div>
                </div>
                <!-- /.vendor pic -->
                <div class="vendor-detail"><!-- vendor details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Tween Studio</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Tween Studios,Anjili Rd, Cantonment South, Kollam, Kerala 691001
                            Phone: 098093 13161.</p>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(5)</span> </div>
                    </div>
                    <!-- /.caption -->
<!--                    <div class="vendor-price">
                        <div class="price">₹40000 - ₹100000</div>
                    </div>-->
                </div>
                <!-- vendor details --> 
            </div>
        </div>
    </div>
</div>

<!--\ Studio  -->
<div class="hr1"></div>
<!-- catering -->

<div class="section-space30 bg-light cars">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title mb20 col-md-6">
                    <h1>Catering</h1>
                </div>
                <div class="col-md-6 studio-mr">
                    <h4><a href="#" class="more"> More </a></h4>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="{{url('details')}}"><img src="images/weddinghubcat (1).jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="feature-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-cutlery"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="{{url('details')}}" class="title">B-Six Catering</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i>B-Six Catering, Sasthamangalam Rd, Vellayambalam, Thiruvananthapuram, Kerala 695003 Phone:0471 272 4030</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹25000 - ₹100000</div>
                        </div>-->
                    </div>
                    <!-- vendor details --> 
                </div>
            </div>

            <!-- /.vendor box start-->
            <div class="col-md-4"><!-- vendor box start-->
                <div class="vendor-box">
                    <div class="vendor-image"><!-- vendor pic --> 
                        <a href="#"><img src="images/weddinghubcat (2).jpg" alt="wedding vendor" class="img-responsive"></a>
                        <div class="rated-label"></div>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-cutlery"></i></a></div>
                    </div>
                    <!-- /.vendor pic -->
                    <div class="vendor-detail"><!-- vendor details -->
                        <div class="caption"><!-- caption -->
                            <h2><a href="#" class="title"> Akshaya Catering</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Akshaya Catering, Sankar Road, Thiruvananthapuram, Kerala 695010 Phone: 0471 272 2501</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span> </div>
                        </div>
                        <!-- /.caption -->
<!--                        <div class="vendor-price">
                            <div class="price">₹69000 - ₹200000</div>
                        </div>-->
                    </div>
                </div>
                <!-- vendor details --> 
            </div>
            <!-- /.vendor box start-->
            <div class="col-md-4 vendor-box"><!-- vendor box start-->
                <div class="vendor-image"><!-- vendor pic --> 
                    <a href="#"><img src="images/weddinghubcat (3).jpg" alt="wedding vendor" class="img-responsive"></a>
                    <div class="popular-label"></div>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-cutlery"></i></a></div>
                </div>
                <!-- /.vendor pic -->
                <div class="vendor-detail"><!-- vendor details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Noushad Catering</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i>Noushad Catering, Sree Nadesha Complex, Step Junction, Nalanchira, Thiruvananthapuram, Kerala 695015</p>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(5)</span> </div>
                    </div>
                    <!-- /.caption -->
<!--                    <div class="vendor-price">
                        <div class="price">₹40000 - ₹100000</div>
                    </div>-->
                </div>
                <!-- vendor details --> 
            </div>
        </div>
    </div>
</div>
@include('front-end.layouts.footer')
<!--\ catering  -->
<!--div class="section-space80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title mb60 text-center">
          <h1>Top Wedding Locations</h1>
          <p>Here are the Top Wedding Locations in Kerala that may change your Wedding Concepts...</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 location-block"> 
        <div class="vendor-image"> <a href="#"><img src="images/convention-center-kerala-trivandrum-al saj-conventions.jpg" alt="" class="img-responsive"></a>  <a href="#" class="venue-lable"><span class="label label-default">Trivandrum </span></a> <p class="text">Al Saj Convention Center, NH.47 Kazhakoottam, Thiruvananthapuram, Kerala 695585</p> </div>
      </div>
        
      <div class="col-md-4 location-block">  
        <div class="vendor-image"><a href="#"><img src="images/convention-center-kerala-kollam-raviz-conventions.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Kollam</span></a> <p class="text">Raviz Convention Center, Thevally, Mathilil, Kerala 691601</p></div>
      </div>
        
      <div class="col-md-4 location-block">  
        <div class="vendor-image"> <a href="#"><img src="images/convention-center-kerala-kottayam-pala-sunstar-conventions.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Kottayam</span></a> <p class="text">SunStar Convention Center, oorassala ,Olikandam Road,Pala, Arunapuram, Pala, Kerala 686574</p></div>
      </div>
        
      <div class="col-md-8 location-block"> 
        <div class="vendor-image"> <a href="#"><img src="images/convention-center-kerala-alappuzha-camelot-conventions.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Alappuzha</span></a> <p class="text">Camelot Convention Center, NH 47, Pathirappally, Poomkavu, Alappuzha, Kerala 688521</p></div>
      </div>
       
      <div class="col-md-4 location-block">  
        <div class="vendor-image"> <a href="#"><img src="images/convention-center-kerala-ernakulam-lee meridian-kochi-conventions.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Kochi</span></a> <p class="text">Le Meridien Convention Center, Maradu, Kochi, Kerala 68230</p></div>
      </div>
         
    </div>
  </div>
</div-->
<!-- /.top location -->
<!--<div class="section-space80 bg-light"> Testimonial Section 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title mb60 text-center">
          <h1>Just Get Married Happy Couple</h1>
          <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 tp-testimonial">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item testimonial-block">
            <div class="couple-pic"><img src="images/couple.jpg" alt="" class="img-circle"></div>
            <div class="feedback-caption">
              <p>"Had our wedding on 15th may 2015 and have to say Jenny and the team made it a wonderful and enjoyable day were Notting was a problem from the build up to the day."</p>
            </div>
            <div class="couple-info">
              <div class="name">Dave Macwan</div>
              <div class="date">Thu, 21st June, 2015</div>
            </div>
          </div>
          <div class="item testimonial-block">
            <div class="couple-pic"><img src="images/couple-2.jpg" alt="" class="img-circle"></div>
            <div class="feedback-caption">
              <p>"Vestibulum vitae neque urna. Duis ut mauris mi. Sed vehicula vestibulum finias their default model text and a search for lorem ipsum will uncover manym elit posuerenia eget sem."</p>
            </div>
            <div class="couple-info">
              <div class="name">Marry &amp; Leary</div>
              <div class="date">Thu, 13th July, 2015</div>
            </div>
          </div>
          <div class="item testimonial-block">
            <div class="couple-pic"><img src="images/couple-3.jpg" alt="" class="img-circle"></div>
            <div class="feedback-caption">
              <p>"Had our wedding on 15th Oct 2015 and have to say Jenny and the team made it a wonderful and enjoyable day were Notting was a problem from the build up to the day."</p>
            </div>
            <div class="couple-info">
              <div class="name">Jhon Doe &amp; Doe Jassica</div>
              <div class="date">Thu, 21st Aug, 2015</div>
            </div>
          </div>
          <div class="item testimonial-block">
            <div class="couple-pic"><img src="images/couple-4.jpg" alt="" class="img-circle"></div>
            <div class="feedback-caption">
              <p>"Etiam ut metus nisi. Sed non laoreet nisi tinciin interdum risus felis enjoyable day were Notting was a problem from the build up to the dayvel eleifend milaoreet consectetur."</p>
            </div>
            <div class="couple-info">
              <div class="name">Dave Macwan</div>
              <div class="date">Thu, 12th Sept, 2015</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->
<!-- /. Testimonial Section -->
<!--div class="section-space80"> Call to action 
  <div class="container">
    <div class="row">
      <div class="col-md-6 couple-block">
        <div class="couple-icon"><img src="images/couple.svg" alt=""></div>
        <h2>Are you couple find the venue ?</h2>
        <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <a href="#" class="btn btn-primary">Find Vendor</a> </div>
      <div class="col-md-6 vendor-block">
        <div class="vendor-icon"><img src="images/vendor.svg" alt=""></div>
        <h2>Are you wedding vender ?</h2>
        <p>Fusce eget elementum quam, vel tempor justo. Ut imperdiet eget sapien dictum aliquam. Nulla maximus sodales dignissim.</p>
        <a href="#" class="btn btn-primary">Add Your Listing</a></div>
    </div>
  </div>
</div>-->
<!-- /. Call to action -->
</body>
</html>
