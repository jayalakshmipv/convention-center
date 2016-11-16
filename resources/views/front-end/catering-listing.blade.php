@extends('front-end.layouts.header')
@include('front-end.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Catering Service | Find The Best Catering Service</title>

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
              <i class="fa icon1 fa-cutlery"></i>
          </div>
          <h1>Catering Service</h1>
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
          <li class="active">Catering Service</li>
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
          <figure class="effect-bubba"> <img src="images/cat1.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
             <h2><a href="{{url('details')}}"><font color="white">B-Six</font></a></h2>
              <p> <a href="{{url('details')}}"><font color="white">B-Six Catering, Vellayambalam, Thiruvananthapuram, Kerala.</font></a></p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/cat2.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Akshaya</h2>
              <p>Akshaya Catering, Sankar Road, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/cat3.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Noushad</h2>
              <p>Noushad Catering, Nalanchira, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/CAT4.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Anandam</h2>
              <p>Anandam Caterer, Ranjini, Karamana, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/CAT5.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Padippura</h2>
              <p>Padippura Catering , Pulimoodu Lane, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/CAT6.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Al-Arab</h2>
              <p>Al-Arab Catering , Kalippankulam Road, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/CAT7.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Royal</h2>
              <p>Royal Caterers , Kaithamukku, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/CAT8.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Harvest</h2>
              <p>Harvest Caterers , Aaramkallu, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/CAT5.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Hot Kitchen</h2>
              <p>Hot Kitchen Caterers , Manayalam, Thiruvananthapuram, Kerala.</p>
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
