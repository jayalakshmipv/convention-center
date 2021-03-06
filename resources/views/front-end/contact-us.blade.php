
@extends('front-end.layouts.header')
@include('front-end.layouts.menu')

<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.page header -->
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Contact us</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="well-box">
          <p>Please fill out the form below and we will get back to you as soon as possible.</p>
          <form >
            
            <!-- Text input-->
            <div class="form-group">
              <label class="control-label" for="first">First Name <span class="required">*</span></label>
              <input id="first" name="first" type="text" placeholder="First Name" class="form-control input-md" required>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="lastname">Last Name <span class="required">*</span></label>
              <div class=" ">
                <input id="lastname" name="lastname" type="text" placeholder="Last name" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="email">E-Mail <span class="required">*</span></label>
              <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="phone">Phone <span class="required">*</span></label>
              <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
            </div>
            
            <!-- Select Basic -->
<!--            <div class="form-group">
              <label class=" control-label" for="category">Category <span class="required">*</span></label>
              <select id="category" name="category" class="form-control selectpicker">
                <option value="Couple">Couple</option>
                <option value="Vendor">Vendor</option>
                <option value="Advertisement">Advertisement</option>
                <option value="Suggestion">Suggestion</option>
              </select>
            </div>-->
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="  control-label" for="message">Message</label>
              <textarea class="form-control" rows="6" id="message" name="message">Write Your Message</textarea>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <button id="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 contact-info">
        <div class="well-box">
          <ul class="listnone">
            <li class="address">
              <h2><i class="fa fa-map-marker"></i>Location</h2>
              <p>  Head Office,</p><p>
                  Smart Business Centre,</p><p> No-29,Thejaswini 
                   Technopark,Trivandrum-695 581
                 </p>
            </li>
            <li class="email">
              <h2><i class="fa fa-envelope"></i>E-Mail</h2>
              <p>info@imrokraft.com</p>
            </li>
            <li class="call">
              <h2><i class="fa fa-phone"></i>Contact</h2>
              <p>(0471) 6555644 </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="well-box">
          <h2>Need Help ?</h2>
          <p>Are you an advertiser enquiring about advertising in You &amp; Your Wedding or on weddingvendor? Please <a href="#">click here </a>to contact the advertising team.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="map" id="googleMap"><div style="width: 100%"><iframe width="100%" height="600" src="http://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=600&hl=ru&q=Technopark%2CTrivandrum+(Imrokraft%20solutions)&ie=UTF8&t=&z=14&iwloc=A&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/en/custom-google-maps/">Create a custom Google Map</a> by <a href="http://www.mapsdirections.info/en/">UK Maps</a></iframe></div><br /></div>


@include('front-end.layouts.footer')


<!--<script>
var myCenter=new google.maps.LatLng(23.0203458,72.5797426);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:9,
  scrollwheel: false,
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
</script>-->
</body>
</html>
