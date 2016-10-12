@extends('front-end.layouts.header')
@include('front-end.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Convention Center | Find The Best Convention Center</title>
<div class="collapse" id="searcharea">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for...">
    <span class="input-group-btn">
    <button class="btn tp-btn-primary" type="button">Search</button>
    </span> </div>
</div>
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
 
<!-- Font used in template -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
<!--font awesome icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
<div class="tp-breadcrumb"><!-- breadcrumb start-->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Convention Center List + Map View</li>
        </ol>
      </div>
      <div class="col-md-4 text-right"> </div>
    </div>
  </div>
</div>
<!-- /.breadcrumb start-->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-7 listing-wrap"><!-- listing wrap -->
      
      <div class="row">
        <div class="filter-box" id="searchform">
          <div class="container-fluid">
            <div class="row filter-form">
              <div class="col-md-12">
                <h2>Refine Your Search</h2>
              </div>
              <form>
                <div class="col-md-3">
                  <label class="control-label" for="venuetype">Venue Type</label>
                  <select id="venuetype" name="venuetype" class="form-control">
                   <option value="">Select District</option>
                    <option value="Alappuzha">Alappuzha</option>
                    <option value="Ernakulam">Ernakulam</option>
                    <option value=" Idukki">Idukki</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kasaragod">Kasaragod</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kozhikode">Kozhikode</option>
                    <option value="Malappuram">Malappuram</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Wayanad">Wayanad</option>
                  </select>
                </div>  
                <div class="col-md-3">
                  <label class="control-label" for="capacity">Capacity</label>
                  <select id="capacity" name="capacity" class="form-control">
                      <option value="">Select Capacity</option>
                     <option value="0 - 99">0 - 99</option>
                    <option value="100 - 199">100 - 199</option>
                    <option value="200 - 299">200 - 299</option>
                    <option value="300 - 399">300 - 399</option>
                    <option value="400+">60 - 500</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label class="control-label" for="capacity">Price Range</label>
                  <select id="capacity" name="capacity" class="form-control">
                      <option value="">Select Price</option>
                     <option value="0 - 99">2500-5000</option>
                    <option value="100 - 199">5000 - 10000</option>
                    <option value="200 - 299">10000 - 20000</option>
                    <option value="300 - 399">25000- 30000</option>
                    <option value="400+">above 30000</option>
                  </select>
             <div class="price-range default-range">
                    <label for="amount" class="control-label">Price range:</label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <div id="slider-range"></div>
                  </div>
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 vendor-listing">
          <h2>Vendor Listing</h2>
        </div>
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="{{url('details')}}"><img src="images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="{{url('details')}}" class="title">Al Saj International</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i>Thiruvananthapuram, Kerala.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price"> ₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-9.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">CRYSTAL</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> Crystal Convention Center ,Nagaroor Attingal, Trivandrum.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-3.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">Soorya Prabha</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> Electrical Section KSEB, Mannanthala, Thiruvananthapuram,Kerala.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-4.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">Kottackattu</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> MC Road, Nava Jeevan, Thiruvananthapuram, Kerala.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-5.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">Girideepam</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> Mar Ivanios, Thiruvananthapuram, Kerala.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-6.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">Quilon Beach</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i>Beach Road, Thamarakulam, Kollam, Kerala.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-7.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">C.S.I</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> Chinnakada, Kollam, Kerala.691001</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-8.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">Younus</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> Asramam, Kollam, Kerala, 691001.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        <div class="col-md-4 vendor-box"><!-- venue box start-->
          <div class="vendor-image"><!-- venue pic --> 
            <a href="#"><img src="images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
          </div>
          <!-- /.venue pic -->
          <div class="vendor-detail"><!-- venue details -->
            <div class="caption"><!-- caption -->
              <h2><a href="#" class="title">Camelot</a></h2>
              <p class="location"><i class="fa fa-map-marker"></i> NH 47, Pathirapally, Alleppey, kerala.</p>
              <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
            </div>
            <!-- /.caption -->
            <div class="vendor-price">
              <div class="price">₹100000 - ₹500000</div>
            </div>
          </div>
          <!-- venue details --> 
        </div>
        <!-- /.venue box start-->
        
        <div class="col-md-12 tp-pagination"><!-- Pagination -->
          <ul class="pagination">
            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a> </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a> </li>
          </ul>
        </div>
        <!-- /.Pagination --> 
      </div>
    </div>
    <!-- /.Listing wrap -->
    <div class="col-md-5 map-wrap"><!-- map wrap-->
      <div id="googleMap"></div>
    </div>
    <!-- map wrap--> 
  </div>
</div>
@extends('front-end.layouts.footer')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM8kLe7lRwqsOP0UeJy4HJKVKqe4yv65g&callback=initMap"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Flex Nav Script --> 
<script src="js/jquery.flexnav.js" type="text/javascript"></script> 
<script src="js/navigation.js"></script> 
<script src="js/jquery.sticky.js"></script> 
<script src="js/header-sticky.js"></script> 
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script> 
<script type="text/javascript" src="js/price-slider.js"></script> 
<script>
// The following example creates complex markers to indicate beaches near
 
// to the base of the flagpole.

function initMap() {
  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 12,
     scrollwheel: false,
    center: {lat: 23.0314489, lng: 72.5788925}
  });

  setMarkers(map);
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
//var beaches = [

 // ['Florist Vendor', 23.0676033, 72.5735364, 4, 'florist.png'],
//  ['Dresses Vendor', 23.0676413, 72.560375, 5, 'dress.png'],
 // ['Venue Vendor', 23.0683954, 72.5306521, 3, 'venue.png'],
//  ['Venue Vendor', 23.0715393, 72.5849452, 2, 'venue.png'],
//  ['Dresses Vendor', 23.0206091, 72.5026789, 1, 'dress.png'],
//  ['Photography Vendor', 23.0358085, 72.6200942, 1, 'photography.png'],
//  ['Videography Vendor', 22.9748713, 72.5891307, 1, 'videography.png'],
//  ['Favour & gift Vendor', 23.1125045, 72.5641729, 1, 'favour-gift.png'],
//  ['Jwellery Vendor', 23.0384031, 72.5267135, 1, 'jwellery.png'],
//  ['Cake Vendor', 23.0028003, 72.5399962, 1, 'cake.png']
 // ];

///function setMarkers(map) {
  // Adds markers to the map.

  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.

  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
 // var shape = {
//    coords: [1, 1, 1, 20, 18, 20, 18, 1],
 //   type: 'poly'
  //};
//  for (var i = 0; i < beaches.length; i++) {
  //  var beach = beaches[i];
   // var image = {
   // url: 'images/'+beach[4],

    // This marker is 20 pixels wide by 32 pixels high.
   // size: new google.maps.Size(32, 49),
    // The origin for this image is (0, 0).
 //   origin: new google.maps.Point(0, 0),
 ///   // The anchor for this image is the base of the flagpole at (0, 32).
  //  anchor: new google.maps.Point(0, 49)
 // };
 // var marker = new google.maps.Marker({
  //    position: {lat: beach[1], lng: beach[2]},
   //   map: map,
   //   icon: image,
    //  shape: shape,
    //  title: beach[0],
     // zIndex: beach[3]
  //  });
  //var content = "Vendor: " + beach[0];  
  //var infowindow = new google.maps.InfoWindow()
  //google.maps.event.addListener(marker,'mouseover', (function(marker,content,infowindow){ 
       // return function() {
      //     infowindow.setContent(content);
       //    infowindow.open(map,marker);
      //  };
   // })(marker,content,infowindow));


 // }
//}
</script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM8kLe7lRwqsOP0UeJy4HJKVKqe4yv65g&callback=initMap"></script>
</body>
</html>
