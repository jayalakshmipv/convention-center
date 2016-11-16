@extends('front-end.layouts.header')
@include('front-end.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Wedding Hub | Find The Best That Suits For Your Wedding </title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
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
<div class="collapse" id="searcharea">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for...">
    <span class="input-group-btn">
    <button class="btn tp-btn-primary" type="button">Search</button>
    </span> </div>
</div>
 
<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="page-header text-center">
          <div class="icon-circle"> 
              <i class="fa icon1 fa-gift"></i>
          </div>
          <h1>Giveaways</h1>
          <!--<p>Venue Listing Bubba Style for multiple use.</p>-->
        
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.page header -->
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Giveaways</li>
        </ol>
      </div>
    
    </div>
  </div>
</div>
 
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift-2.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
             <h2><a href="{{url('details')}}"><font color="white">Archies</font></a></h2>
              <p> <a href="{{url('details')}}"><font color="white">Vellayambalam, Thiruvananthapuram, Kerala 695003 Phone:0471 272 4030</font></a></p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift-1.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2> Catalyst Giveaways</h2>
              <p>  Sankar Road,Kozhikode, Kerala 695010 Phone: 0471 272 2501</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift3.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Gifts</h2>
              <p>Sree Nadesha Complex, Step Junction, Kochi, Kerala 695015</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift3.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Diana gifts</h2>
              <p>MC Road, Nava Jeevan, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift-1.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Gift World</h2>
              <p>Mar Ivanios, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift-2.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2> Redballon </h2>
              <p>Beach Road, Thamarakulam, Kollam, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift3.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Gift City</h2>
              <p>Chinnakada, Kollam, Kerala, 691001.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift-2.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Dreamz</h2>
              <p>Asramam, Kollam, Kerala, 691001.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/gift3.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Special</h2>
              <p>NH 47, Pathirapally, Alleppey, kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      
      <!-- ... --> 
      
    </div>
    <div class="row">
      <div class="col-md-12 tp-pagination">
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
    </div>
  </div>
</div>
@extends('front-end.layouts.footer')
</body>
</html>