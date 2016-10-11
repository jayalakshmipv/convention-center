@extends('front-end.layouts.header')
@include('front-end.layouts.menu')

<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="page-header text-center">
          
          <h1>Al Saj International microsite</h1>
          <p>Microsite only available for premium members only.</p>
         
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Al Saj International</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container tabbed-page st-tabs">
    <div class="row tab-page-header">
      <div class="col-md-8 title"> <a href="#" class="label-primary">Boutique</a>
        <h1>Al Saj International</h1>
        <p class="location"><i class="fa fa-map-marker"></i>NH.47 Kazhakoottam, Thiruvananthapuram, Kerala 695585</p>
        <hr>
        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
      </div>
      <div class="col-md-4 venue-data">
        <div class="venue-info"><!-- venue-info-->
          <div class="capacity">
            <div>Capacity:</div>
            <span class="cap-people"> 50000 - 100000 </span> </div>
          <div class="pricebox">
            <div>Avg price:</div>
            <span class="price">₹100000</span></div>
        </div>
        <!--<a href="#inquiry" class="btn btn-default btn-lg btn-block">Book Venue</a>--> </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#photo" title="Gallery" aria-controls="photo" role="tab" data-toggle="tab"> <i class="fa fa-photo"></i> <span class="tab-title">Photo</span></a></li>
          <li role="presentation">
          <a href="#about" title="about info" aria-controls="about" role="tab" data-toggle="tab">
          <i class="fa fa-info-circle"></i>
          <span class="tab-title">About</span>
          </a>
          </li>
          <li role="presentation"><a href="#onmap" title="Location" aria-controls="onmap" role="tab" data-toggle="tab"> <i class="fa fa-map-marker"></i> <span class="tab-title">On map</span></a></li>
          <li role="presentation"><a href="#video" title="Video" aria-controls="video" role="tab" data-toggle="tab"> <i class="fa fa-youtube-play"></i> <span class="tab-title">Video</span></a></li>
          <li role="presentation"><a href="#amenities" title="Amenities" aria-controls="amenities" role="tab" data-toggle="tab"> <i class="fa fa-asterisk"></i> <span class="tab-title">Amenities</span></a></li>
          <li role="presentation"><a href="#reviews" title="Review" aria-controls="reviews" role="tab" data-toggle="tab"> <i class="fa fa-commenting"></i> <span class="tab-title">Reviews</span></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"><!-- tab content start-->
          <div role="tabpanel" class="tab-pane fade in active" id="photo">
            <div id="sync1" class="owl-carousel">
              <div class="item"> <img src="images/vendor-1.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-2.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-3.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-4.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-5.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-6.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-7.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-8.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-9.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-1.jpg" alt="" class="img-responsive"> </div>
            </div>
            <div id="sync2" class="owl-carousel">
              <div class="item"> <img src="images/vendor-1.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-2.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-3.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-4.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-5.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-6.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-7.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-8.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-9.jpg" alt="" class="img-responsive"> </div>
              <div class="item"> <img src="images/vendor-1.jpg" alt="" class="img-responsive"> </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="about">
            <div class="venue-details">
              <h2>Venue Details</h2>
              <p>Al-Saj Convention Centre in Trivandrum is one of the biggest convention centres in Kerala. Of the many wedding venues in the south of Kerala, Al-Saj Convention Centre is the largest and most easily accessible.</p>
      
               
                <h2>Convention Hall Facilities </h2>
                <ul class="check-circle">
                  <li>Milky Way – 3000 pax</li>
                  <li>Sun Ray – 1500 pax</li>
                  <li>Moon Beam – 200 pax</li>
                </ul>
                 </div>
            
          </div>
          <div role="tabpanel" class="tab-pane fade" id="onmap">
            <div id="googleMap" class="map"><div style="width: 100%"><iframe width="100%" height="400" src="http://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=600&hl=ru&q=NH%20%24%26%2Ckazhakootam%2Cthiruvananthapuram+(al%20saj)&ie=UTF8&t=&z=14&iwloc=A&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/en/custom-google-maps/">Create a custom Google Map</a> 
    by <a href="http://www.mapsdirections.info/en/">UK Maps</a></iframe></div><br /></div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="video"> 
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9"> 
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/djT7wgrMzZY" frameborder="0" allowfullscreen></iframe>"></iframe>
              <a href="javascript:void(0)"><img src="images/video.jpg" alt="" class="img-responsive"></a> </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="amenities">
            <div class="row">
              <div class="col-md-6 venue-amenities">
                <h2>Center Facilities</h2>
                <ul class="check-circle list-group">
                  <li class="list-group-item">Wedding Hall </li>
                  <li class="list-group-item">Dining </li>
                  <li class="list-group-item">In House Catering</li>
                  <li class="list-group-item">Dining </li>
                  <li class="list-group-item">DJ Facilities </li>
                  <li class="list-group-item">Personal Chef</li>
                  <li class="list-group-item">Guest Parking</li>
                  <li class="list-group-item">Seating Amenities</li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="reviews"> 
            <!-- comments -->
            <div class="customer-review">
              <div class="row">
                <div class="col-md-12">
                  <h1>Couples Review</h1>
                  <div class="review-list"> 
                    <!-- First Comment -->
                    <div class="row">
                      <div class="col-md-2 col-sm-2 hidden-xs">
                        <div class="user-pic"> <img class="img-responsive img-circle" src="images/convention-center-microsite-image1.jpg" alt=""> </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="panel panel-default arrow left">
                          <div class="panel-body">
                            <div class="text-left">
                              <h3>The whole experience was Excellent</h3>
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            </div>
                            <div class="review-post">
                              <p> One of the prominent venues in trivandrum. Great for marriages, out door events, engagements, parties, etc. More than enough parking space for cars and buses. </p>
                            </div>
                            <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Second Comment -->
                    <div class="row">
                      <div class="col-md-2 col-sm-2 hidden-xs">
                        <div class="user-pic"> <img class="img-responsive img-circle" src="images/convention-center-microsite-image2.jpg" alt=""> </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="panel panel-default arrow left">
                          <div class="panel-body">
                            <div class="text-left">
                              <h3>The Facilities were Fantastic!</h3>
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            </div>
                            <div class="review-post">
                              <p> Nyc place...spacious...helping staff...quite atmosphere and good rooms....splendid open space and parking area...even we can have a barbeque part outside.. </p>
                            </div>
                            <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Third Comment -->
                    <div class="row">
                      <div class="col-md-2 col-sm-2 hidden-xs">
                        <div class="user-pic"> <img class="img-responsive img-circle" src="images/convention-center-microsite-image3.jpg" alt=""> </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="panel panel-default arrow left">
                          <div class="panel-body">
                            <div class="text-left">
                              <h3> Aenean elementum dictum estsit amet ullamcorper</h3>
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            </div>
                            <div class="review-post">
                              <p>Nyc place...spacious...helping staff...quite atmosphere and good rooms....splendid open space and parking area...even we can have a barbeque part outside..</p>
                            </div>
                            <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="review"> <a class="btn tp-btn-primary btn-block tp-btn-lg" role="button" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="review"> Write A Review </a> </div>
                  <div class="collapse review-list review-form" id="review">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h1>Write Your Review</h1>
                        <form class="">
                          <div class="rating-group">
                            <div class="radio radio-success radio-inline">
                              <input type="radio" name="radio1" id="radio1" value="option2">
                              <label for="radio1" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i></span> </label>
                            </div>
                            <div class="radio radio-success radio-inline">
                              <input type="radio" name="radio1" id="radio2" value="option3">
                              <label for="radio2" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                            </div>
                            <div class="radio radio-success radio-inline">
                              <input type="radio" name="radio1" id="radio3" value="option3">
                              <label for="radio3" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                            </div>
                            <div class="radio radio-success radio-inline">
                              <input type="radio" name="radio1" id="radio4" value="option4">
                              <label for="radio4" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                            </div>
                            <div class="radio radio-success radio-inline">
                              <input type="radio" name="radio1" id="radio5" value="option5">
                              <label for="radio5" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                            </div>
                          </div>
                          
                          <!-- Text input-->
                          <div class="form-group">
                            <label class=" control-label" for="name">Name</label>
                            <div class="">
                              <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                            </div>
                          </div>
                          
                          <!-- Text input-->
                          <div class="form-group">
                            <label class=" control-label" for="email">E-Mail</label>
                            <div class=" ">
                              <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                          </div>
                          
                          <!-- Text input-->
                          <div class="form-group">
                            <label class=" control-label" for="reviewtitle">Review Title</label>
                            <div class=" ">
                              <input id="reviewtitle" name="reviewtitle" type="text" placeholder="Review Title" class="form-control input-md" required>
                            </div>
                          </div>
                          
                          <!-- Textarea -->
                          <div class="form-group">
                            <label class=" control-label">Write Review</label>
                            <div class="">
                              <textarea class="form-control" rows="8">Write Review</textarea>
                            </div>
                          </div>
                          <!-- Button -->
                          <div class="form-group">
                            <button name="submit" class="btn tp-btn-default tp-btn-lg">Submit Review</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab content start--> 
      </div>
    </div>
   <div class="row">
      <div class="col-md-8" >
        <div class="side-box" id="inquiry">
          <h2>Send Enquiry</h2>
          <p>Fill in your details and a Specialist will get back to you shortly.</p>
          <form class="">
            
            <!-- Text input-->
            <div class="form-group">
              <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
              <div class="">
                <input id="name-one" name="name-one" type="text" placeholder="Name" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
           <div class="form-group">
              <label class="control-label" for="phone">Phone:<span class="required">*</span></label>
              <div class="">
                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                <span class="help-block"> </span> </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="control-label" for="email-one">E-Mail:<span class="required">*</span></label>
              <div class="">
                <input id="email-one" name="email-one" type="text" placeholder="E-Mail" class="form-control input-md" required>
              </div>
            </div>
            
            <div class="form-group">
                            <label class=" control-label">Message</label>
                            <div class="">
                              <textarea class="form-control" rows="8">Write Your Message</textarea>
                            </div>
                          </div>
            <!-- Select Basic -->
           <!--  <div class="default-calender">
                <div class="form-group">
                  <label class="control-label" for="weddingdate">Wedding Date<span class="required">*</span></label>
                  <div class="">
                    <div class="input-group">
                      <input type="text" class="form-control" id="weddingdate" placeholder="Wedding Date" >
                      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar"></i></span> </div>
                  </div>
                </div>
                </div>
            
            
            <div class="form-group">
              <label class="control-label" for="guest">Number of Guests:<span class="required">*</span></label>
              <div class="">
                <select id="guest" name="guest" class="form-control">
                  <option value="35 to 50">35 to 50</option>
                  <option value="50  to 65">50  to 65</option>
                  <option value="65 to 85">65 to 85</option>
                  <option value="85 to 105">85 to 105</option>
                </select>
              </div>
            </div>-->
            <!-- Multiple Radios -->
           <!-- <div class="form-group">
              <label class="control-label">Send me info via</label>
              <div class="checkbox checkbox-success">
                <input type="checkbox" name="checkbox" id="checkbox-0" value="1"   class="styled">
                <label for="checkbox-0" class="control-label"> E-Mail </label>
              </div>
              <div class="checkbox checkbox-success">
                <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled" >
                <label for="checkbox-1" class="control-label"> Need Call back </label>
              </div>
            </div>-->
            <div class="form-group">
              <button name="submit" class="btn btn-primary btn-lg btn-block">Send </button>
            </div>
          </form>
        </div>
      </div>
<!--      <div class="col-md-4">
        <div class="profile-sidebar side-box"> 
          <!-- SIDEBAR USERPIC 
          <div class="profile-userpic"> <img src="images/profile_user.jpg" class="img-responsive img-circle" alt=""> </div>
          <div class="profile-usertitle">
            <div class="profile-usertitle-name">
              <h2>John Wilburn</h2>
            </div>
            <div class="profile-address"> <i class="fa fa-map-marker"></i> Studio spaces,110 Pennington, London, E1W 2BB </div>
             
            <div class="profile-website"> <i class="fa fa-link"></i> <a href="#">http://www.myvenue.com</a> </div>
          </div>
        </div>
      </div>-->
      <div class="col-md-4">
        <div class="social-sidebar side-box">
          <ul class="listnone follow-icon">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
 
@include('front-end.layouts.footer')

<script src="http://maps.googleapis.com/maps/api/js"></script> 
<script>
var myCenter=new google.maps.LatLng(23.0314489,72.5788925);


function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:9,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,

  icon:'images/pinkball.png'
  });

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"Hello Address"
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script> 
<script type="text/javascript" src="js/price-slider.js"></script>
<script>
  $( function() {
    $("#weddingdate").datepicker();
  } );
  </script>
</body>
</html>
