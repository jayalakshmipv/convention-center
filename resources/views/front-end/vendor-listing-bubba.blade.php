
@extends('front-end.layouts.header')
@include('front-end.layouts.menu')
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
              <i class="icon icon-size-60  icon-list icon-white"></i>
          </div>
          <h1>All Convention Center</h1>
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
          <li class="active">All Convention Center</li>
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
          <figure class="effect-bubba"> <img src="images/vendor-1.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
             <h2><a href="{{url('details')}}"><font color="white">Al Saj International</font></a></h2>
              <p> <a href="{{url('details')}}"><font color="white">NH.47 Kazhakoottam, Thiruvananthapuram, Kerala.</font></a></p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-8.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>CRYSTAL</h2>
              <p>Crystal Convention Center ,Nagaroor Attingal, Trivandrum.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-3.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Soorya Prabha</h2>
              <p>Electrical Section KSEB, Mannanthala, Thiruvananthapuram,Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-4.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Kottackattu</h2>
              <p>MC Road, Nava Jeevan, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-5.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Girideepam</h2>
              <p>Mar Ivanios, Thiruvananthapuram, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-6.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Quilon Beach</h2>
              <p>Beach Road, Thamarakulam, Kollam, Kerala.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-7.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>C.S.I</h2>
              <p>Chinnakada, Kollam, Kerala, 691001.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-8.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Younus</h2>
              <p>Asramam, Kollam, Kerala, 691001.</p>
              <p class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="col-md-4 vendor-box">
        <div class="grid">
          <figure class="effect-bubba"> <img src="images/vendor-9.jpg" alt="wedding venue" class="img-responsive">
            <figcaption>
              <h2>Camelot</h2>
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
