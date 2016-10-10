@extends('front-end.layouts.header')
@include('front-end.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Convention center| Find The Best convention centers</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
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

<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Convention Center Blog</h1>
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
          <li><a href="{{ url('/') }}>Home</a></li>
          <li class="active">News</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8 content-left"><!-- content left -->
        <div class="row">
          <div class="col-md-12 post-holder">
            <div class="well-box">
              <div class="sticky-sign"><i class="fa fa-bookmark"></i></div>
              <!-- blog holder -->
              <div class="post-image"><a href="#"><img src="images/clive-marriage.jpg" class="img-responsive" alt=""></a></div>
              <h3 class="post-title"><a href="#">BOLLYWOOD ICON RESHMA MARRIAGE  </a></h3>
              <div class="post-meta"> <span class="date-meta">ON <a href="#">August 5, 2015</a> /</span> <span class="admin-meta">BY <a href="#">Lerry Martho</a> /</span> <span class="tag-meta">IN <a href="#">Writing</a> /</span> <span class="comment-meta">2 <a href="#">Comments</a></span> </div>
              <p>Tncidunt auris vestibulum turpis aliquam pretium nisl nec urna tincidunt, ut molestie sem  a ex molestie Donec viverra mauris ut nulla eleifend accumsan fficitur orem ipsum dolor sit amet consectetur adipiscing elit. Duis id imperdiet ex.</p>
              <a href="#" button class="button"><span>Hover </span></a></button> </div>
          </div>
          <!-- /.blog holder -->
          <div class="col-md-12 post-holder"><!-- blog holder -->
            <div class="well-box">
              <div class="post-image"><a href="#"><img src="images/Fotolia_4727411_M-735006.jpg" class="img-responsive" alt=""></a></div>
              <h3 class="post-title"><a href="#"><marquee>FOOD FOR YOUR FEST</a></marquee></h3>
              <div class="post-meta"> <span class="date-meta">ON <a href="#">August 5, 2015</a> /</span> <span class="admin-meta">BY <a href="#">Lerry Martho</a> /</span> <span class="tag-meta">IN <a href="#">Writing</a> /</span> <span class="comment-meta">2 <a href="#">Comments</a></span> </div>
              <p> Aliquam pretium nisl nec urna tincidunt, ut molestie sem tincidunt. Mauris vestibulum turpis a ex molestie Donec viverra mauris ut nulla eleifend accumsan. efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id imperdiet ex.</p>
              <a href="#" button class="button"><span>Hover </span></a></button> </div>
          </div>
          <!-- /.blog holder -->
          <!--
          <div class="col-md-12 post-holder"><!-- /.blog holder -->
          <!--
            <div class="well-box">
              <h1 class="post-title">Quote of The Day Post</h1>
              <div class="post-meta"> <span class="date-meta">ON <a href="#">August 5, 2015</a> /</span> <span class="admin-meta">BY <a href="#">Lerry Martho</a> /</span> <span class="tag-meta">IN <a href="#">Writing</a> /</span> <span class="comment-meta">2 <a href="#">Comments</a></span> </div>
              <blockquote>
                <p>"Packages and web page editors umorem Ipsum is simply offed dummy text ofer the web
                  page editors."</p>
                <span>- Johnson deynies</span> </blockquote>
            </div>
          </div>

          <!-- /.blog holder -->
          <div class="col-md-12 post-holder "><!-- blog holder -->
            <div class="well-box">
              <div class="post-image"><a href="#"><img src="images/convention-cnter-kerala-trivandrum-conerence-hall (1).jpg" class="img-responsive" alt=""></a></div>
              <h3 class="post-title"><a href="#">10th ANNUAL MEETING FOR WOMEN FORUM</a></h3>
              <div class="post-meta"> <span class="date-meta">ON <a href="#">August 5, 2015</a> /</span> <span class="admin-meta">BY <a href="#">Lerry Martho</a> /</span> <span class="tag-meta">IN <a href="#">Writing</a> /</span> <span class="comment-meta">2 <a href="#">Comments</a></span> </div>
              <p>Donec viverra mauris ut nulla eleifend accumsan. Aliquam pretium nisl nec urna tincidunt, ut molestie sem tincidunt. Mauris vestibulum turpis a ex molestie efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id imperdiet ex.</p>
              <a href="#" button class="button"><span>Hover </span></a></button> </div>
          </div>
          <!-- /.blog holder -->
          <div class="col-md-12 post-holder "><!-- blog holder -->
            <div class="well-box">
              <h1 class="post-title"><a href="#">Heading Title for Standard Post</a></h1>
              <div class="post-meta"> <span class="date-meta">ON <a href="#">August 5, 2015</a> /</span> <span class="admin-meta">BY <a href="#">Lerry Martho</a> /</span> <span class="tag-meta">IN <a href="#">Writing</a> /</span> <span class="comment-meta">2 <a href="#">Comments</a></span> </div>
              <p>Integer non erat vel diam feugiat blandit. Nam id consequat elit. Nulla facilisi. Proin feugiat sapien neque, vulputate faucibus eros rutrum non. Integer et malesuada est, eget ultrices libero. Praesent iaculis suscipit massa, quis semper risus. hasellus et rutrum diam.</p>
              <a href="#" button class="button"><span>Hover </span></a></button></div>
          </div>
          <!-- /.blog holder -->
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
      <!-- /.content left -->
      <div class="col-md-4 right-sidebar"><!-- right sidebar -->
        <div class="row">
          <div class="col-md-12 widget widget-search"><!-- widget -->
            <div class="well-box">
              <h2 class="widget-title">Search bar</h2>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-primary btn-lg" type="button"> <i class="fa fa-search"></i> </button>
                </span> </div>
              <!-- /input-group --> 
            </div>
          </div>
          <!-- /.widget -->
          <div class="col-md-12 widget widget-category"><!-- widget -->
            <div class="well-box">
              <h2 class="widget-title">Categories</h2>
              <ul class="listnone angle-double-right">
                <li><a href="#">Waterside</a> <span>(4)</span></li>
                <li><a href="#">Romantic</a> <span>(2)</span></li>
                <li><a href="#">Outside Weddings</a> <span>(6)</span></li>
                <li><a href="#">Palace</a> <span>(4)</span></li>
                <li><a href="#">Manor House</a> <span>(8)</span></li>
              </ul>
            </div>
          </div>
          <!-- /.widget -->
          <div class="col-md-12 widget widget-recent-post"><!-- widget -->
            <div class="well-box">
              <h2 class="widget-title">Recent Posts</h2>
              <div class="rc-post-holder row">
                <div class="col-md-5">
                  <div class="post-image"><a href="#"><img src="images/post-pic.jpg" class="img-responsive" alt=""></a></div>
                </div>
                <div class="rc-post col-md-7">
                  <h3><a href="#" class="link">Heading title here</a></h3>
                  <div class="post-meta"> <span class="date-meta">ON <a href="#">October 7, 2015</a></span> </div>
                </div>
              </div>
              <div class="rc-post-holder row">
                <div class="col-md-5">
                  <div class="post-image"><a href="#"><img src="images/post-pic-2.jpg" class="img-responsive" alt=""></a></div>
                </div>
                <div class="rc-post col-md-7">
                  <h3><a href="#" class="link">Heading title here</a></h3>
                  <div class="post-meta"> <span class="date-meta">ON <a href="#">October 6, 2015</a></span> </div>
                </div>
              </div>
              <div class="rc-post-holder row">
                <div class="col-md-5">
                  <div class="post-image"><a href="#"><img src="images/post-pic-3.jpg" class="img-responsive" alt=""></a></div>
                </div>
                <div class="rc-post col-md-7">
                  <h3><a href="#" class="link">Heading title here</a></h3>
                  <div class="post-meta"> <span class="date-meta">ON <a href="#">October 5, 2015</a></span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.widget -->
          <div class="col-md-12 widget widget-archive"><!-- widget -->
            <div class="well-box">
              <h2 class="widget-title">Archives</h2>
              <select id="selectbasic" name="selectbasic" class="form-control">
                <option value="1">August 2015</option>
                <option value="2">July 2015</option>
                <option value="2">June 2015</option>
              </select>
            </div>
          </div>
          <!-- /.widget -->
          <div class="col-md-12 widget widget-tag"><!-- widget -->
            <div class="well-box">
              <h2 class="widget-title">Tags</h2>
              <a href="#">Palace</a> <a href="#">Romantic</a> <a href="#">Manor House</a> <a href="#">Hotel</a> <a href="#">Garden Wedding</a> <a href="#">Boutique</a> <a href="#">Intimate</a> </div>
          </div>
          <!-- /.widget --> 
        </div>
      </div>
      <!-- /.right sidebar --> 
      
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Flex Nav Script --> 
<script src="js/jquery.flexnav.js" type="text/javascript"></script> 
<script src="js/navigation.js"></script> 
<script src="js/jquery.sticky.js"></script> 
<script src="js/header-sticky.js"></script>
</body>
</html>
@extends('front-end.layouts.footer')