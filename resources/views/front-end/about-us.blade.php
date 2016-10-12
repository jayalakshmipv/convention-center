
@extends('front-end.layouts.header')
@include('front-end.layouts.menu')

<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="page-header text-center">
          <div class="icon-circle"><i class="icon icon-size-60 icon-loving-home icon-white"></i> </div>
          <h1>About Convention center</h1>
          <p>Convention Centre offers one of the most beautiful settings in the world and convenient access to all the major visitor amenities in the downtown core.</p>
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
          <li class="active">About Convention Center</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-3 side-nav" id="leftCol">
        <div class="hide-side">
          <ul class="listnone nav" id="sidebar">
            <li class="active">{{ Html::link('#aboutus', 'About us')}}</li>
          <!--  <li>{{ Html::link('#team', 'Meet The Team')}}-->
<!--            <li>{{ Html::link('#howwork', 'How it works')}}-->
            <li>{{ Html::link('#history', 'Our History')}}
          </ul> 
        </div>
      </div>
      <div class="col-md-9 content-right">
        <div class="row">
          <div class="col-md-12">
            <div class="aboutus" id="aboutus">
              <h1>We Make Your Dreams.</h1>
              <p>Welcome to convention, launch in 2015. We pride our selves on being a trusted friend someone to take on this journey with you making it fun from the start.</p>
              <p>We will  support you and advise you. We are never short of suggestions or inspiring ideas.Our matchless, which makes finding beautiful wedding venue easier and one less thing for you to worry about.With our inspir blog, suggestions and sensational offers, no one understands weddings better than we do.</p>
            </div>
          </div>
<!--          <div class="col-md-12">
            <div class="call-to-action well-box mt30">

              <h1>ONLINE BOOKING</h1>
              <h3 class="point">Advice &amp; Guide. | Save your date. | Forever free.</h3>
              <img src="images/cycle-graphic.png" alt="" class="graphic img-responsive"> <a href="#" class="btn btn-default btn-lg">Get start today</a> </div>
          </div>-->
        <!--  <div class="col-md-12 team-section" id="team">
            <h1>Our Founder</h1>
            <div class="row">
              <div class="col-md-4"><img src="images/convention-center-trivandrum-officials.jpg" alt="" class="img-responsive img-circle"></div>
              <div class="col-md-8">
                <h2>Tisha chauhan</h2>
                <p>Nullam pellentesque congue ante ellentesque eget odio faucibus laoreet at pulvinar augueras ornare tincidunt nibh sodales tempus urabitur justo elit laoreet sed elit quis auctor placerat magna.</p>
                <p>Find her on Twitter at <a href="#">@tishachauhan</a></p>
              </div>
            </div>
            <div class="row team-section">
              <div class="col-md-3 text-center team-block">
                <div class="team-pic"><!-- team pic --> 
             <!--     <a href="#"><img src="images/convention-center-trivandrum-officials-women.jpg" class="img-responsive" alt=""></a> </div>
                <!-- /.team pic -->
            <!--    <h2><a href="#">Zella Drake</a></h2>
                <span>Chief Executive Officer</span>
                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
              </div>
              <div class="col-md-3 text-center team-block">
                <div class="team-pic"><!-- team pic --> 
               <!--   <a href="#"><img src="images/convention-center-kerala-trivandrum2-owners.jpg" class="img-responsive" alt=""></a> </div>
                <!-- /.team pic -->
          <!--      <h2><a href="#">Marie Ashcroft</a></h2>
                <span>Chief Executive Officer</span>
                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
              </div>   
              <div class="col-md-3 text-center team-block">
                <div class="team-pic"><!-- team pic --> 
          <!--        <a href="#"><img src="images/convention-center-kerala-trivandrum1-officials.jpg" class="img-responsive" alt=""></a> </div>
                <!-- /.team pic -->
            <!--    <h2><a href="#">Avery Moseley</a></h2>
                <span>Chief Executive Officer</span>
                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
              </div>
              <div class="col-md-3 text-center team-block">
                <div class="team-pic"><!-- team pic --> 
        <!--          <a href="#"><img src="images/convention-center-trivandrum-officials.jpg" class="img-responsive" alt=""></a> </div>
                <!-- /.team pic -->
      <!--          <h2><a href="#">Jimmie Tucker</a></h2>
                <span>Chief Executive Officer</span>
                <div class=""> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
<!--        <div class="row">
          <div class="col-md-12 how-it-works" id="howwork">
            <h1>How It Works</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac purus eleifend, eleifend risus feugiat, consectetur extiam fermentum ligula ipsumincipsum dolor sit quis nisi dolor. </p>
            <div class="row">
              <div class="col-md-6 how-it-desc">
                <h2>Find the Convention center</h2>
                <p>Sed id mollis exnteger eu veeger eu vehicula exliquam ultrices quis sem sed rutrumpendisse potentt laoreet faucibusus.</p>
              </div>
              <div class="col-md-4 text-center how-it-icon"> <img src="images/vendor-1.svg" alt=""> </div>
            </div>
            <div class="row">
              <div class="col-md-4 text-center how-it-icon"> <img src="images/list.svg" alt=""> </div>
              <div class="col-md-6 how-it-desc">
                <h2>Our Values</h2>
                <p>Respect
                   Responsibility
                   Passion
                   Innovation
                   Collaboration
                   Excellence.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 how-it-desc">
                <h2>Hire the Right Convention center</h2>
                <p>Aliquam ultrices quis sem sed rutrumpendisse potenti. Nam commodo nisi ut laoreet faucibus lacus neque mollis nequeue libero at quam. </p>
              </div>
              <div class="col-md-4 text-center how-it-icon"> <img src="images/vendor-done.svg" alt=""> </div>
            </div>
          </div>
        </div>-->
          <div class="col-md-12 content-right">
        <div class="row">
          <div class="col-md-12 history" id="history">
            <h1>History</h1>
            <p>A convention center conference centre outside is a large building that is designed to hold a convention, where individuals and groups gather to promote and share common interests. Convention centers typically offer sufficient floor area to accommodate several thousand attendees. Very large venues, suitable for major trade shows, are sometimes known as exhibition centres. Convention centers typically have at least one auditorium and may also contain concert halls, lecture halls, meeting rooms, and conference rooms. Some large resort area hotels include a convention center.  </p>
          </div>
          <div class="col-md-12">
            <ul class="timeline">
            <!--  <li>
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <div class="history-pic"> <img src="images/convention-center-kerala-trivandrum-history.jpg" class="img-responsive" alt=""> </div>
                  <div class="tl-heading">
                    <h1>2012</h1>
                  </div>
                  <div class="tl-body">
                    <h3>The convention center Begins</h3>
                    <p>We have a strong base and ensure value-added service in every client engagement. Our business model is supported by a strong foundation towards commitment and quality. 
                        Our solutions focus on leveraging the latest technologies in innovative ways which boost your bottom line and ensure that your products and services redefine the way the industry functions..</p>
                  </div>
                </div>
              </li>
            <!--  <li class="timeline-inverted">
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <div class="history-pic"> <img src="images/convention-center-kerala-trivandrum-first-office.Jpg" class="img-responsive" alt=""> </div>
                  <div class="tl-heading">
                    <h1>2013</h1>
                  </div>
                  <div class="tl-body">
                    <h3>The First Office</h3>
                    <p>
                       Our high-performance business strategy builds on our expertise in technology and outsourcing to help clients perform at the highest levels so they can create sustainable value for their customers and shareholders. Using our deep industry knowledge, expertise and technology capabilities, 
                       we identify new business and technology trends and develop solutions to help clients around the world in achieving their goals and beyond..</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <div class="tl-heading">
                    <h1>2015</h1>
                  </div>
                  <div class="tl-body">
                    <h3>Expansion </h3>
                    <p>Our lean approach towards application development and providing solutions is what differentiates Imrokraft from various other businesses and helps us go the extra mile in increasing client satisfaction and accelerating our own growth</p>
                  </div>
                </div>
              </li>-->
              <li class="timeline-inverted">
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                 <div class="history-pic"> <img src="images/convention-center-kerala-trivandrum-first-office.Jpg" class="img-responsive" alt=""> </div>
                  <div class="tl-heading">
                    <h1>2016</h1>
                  </div>
                  <div class="tl-body">
                    <h3>Today Convention Center</h3>
                    <p> A convention center conference centre outside is a large building that is designed to hold a convention, where individuals and groups gather to promote and share common interests. Convention centers typically offer sufficient floor area to accommodate several thousand attendees. Very large venues, suitable for major trade shows, are sometimes known as exhibition centres. Convention centers typically have at least one auditorium and may also contain concert halls, lecture halls, meeting rooms, and conference rooms. Some large resort area hotels include a convention center.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
@include('front-end.layouts.footer')
