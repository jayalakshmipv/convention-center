<head>
<style>
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/page-loader.gif') 50% 50% no-repeat rgb(300,300,300);
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
</head>
<div class="loader"></div>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-3 logo">
        <div class="navbar-brand"> <a href="{{ url('/') }}"Home><img src="images/logo.png" alt="Wedding Vendors" class="img-responsive"></a></div>
      </div>
      <div class="col-md-9">
        <div class="navigation">
          <div class="menu-button">Menu</div>
          <ul data-breakpoint="800" class="flexnav">
            <li class="active"><a href="{{ url('/') }}">Home</a>
            </li>
            <li><a href="#">Search</a>
                 <ul>
                <li><a href="{{ url('/listing-row-map') }}" title="Home" class="animsition-link">Filter</a></li>
<!--                <li><a href="vendor-listing-sidebar.html" title="Home" class="animsition-link">List / Sidebar Left</a></li>
                <li><a href="vendor-listing-no-sidebar.html" title="Home" class="animsition-link">List / No Sidebar</a></li>
                <li><a href="vendor-listing-top-map.html" title="Home" class="animsition-link">Top Map / List</a></li>
                <li><a href="vendor-list-4-colmun.html" title="Home" class="animsition-link">4 Column List</a></li>
                <li><a href="vendor-list-3-colmun.html" title="Home" class="animsition-link">3 Column List</a></li>
                <li><a href="vendor-list-horizontal.html" title="Home" class="animsition-link">Horizontal List </a></li>
                <li><a href="vendor-list-new.html" title="Home" class="animsition-link">List Variations </a></li>-->
                <li><a href="{{ url('/vendor-listing-bubba') }}">All Centers</a></li>
<!--                <li><a href="vendor-listing-ocean.html">Ocean Style Listing</a></li>-->
              </ul>
            </li>
                
            <li><a href="{{ url('/event') }}">Blog</a>
             
            </li>
<!--            <li><a href="#">Event</a></li>-->
            <li><a href="{{ url('/pricing-plan') }}">Pricing List</a></li>
            <li><a href="{{ url('/about-us') }}">About us</a></li>
             <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
<!--              <ul>
                <li><a href="vendor-details.html">Vendor Simple</a></li>
                <li><a href="vendor-details-tabbed.html">Vendor Tabbed</a></li>
                <li><a href="vendor-profile.html">Vendor Profile</a></li>
              </ul>-->
            <!--<li><a href="venue-listing.html" title="Home" class="animsition-link">Suppliers</a>
              <ul>
                <li><a href="venue-listing.html">Venue List</a></li>
                <li><a href="photography-listing.html">Photographer List</a></li>
                <li><a href="dresses-listing.html">Dresses List</a></li>
                <li><a href="florist-listing.html">Florist List</a></li>
                <li><a href="videography-listing.html">Videography List</a></li>
                <li><a href="cake-listing.html">Cake List</a></li>
                <li><a href="music-listing.html">Music List</a></li>
              </ul>
            </li>-->
           <!-- <li><a href="#">Contact us</a>
            </li>
            <li><a href="{{ url('/contact-us') }}">Contact us</a>

              <ul>
                <li><a href="planning-to-do.html">To Do List</a></li>
                <li><a href="planning-budget.html">Budget Planner</a></li>
                <li><a href="planning-table-arrangement.html">Seating Planner</a></li>
                <li><a href="planning-guest-list.html">Guest List</a></li>
                <li><a href="couple-landing-page.html">Couple Signup (LP)</a></li>
                <li><a href="couple-dashboard.html">Couple Admin</a></li>
                <li><a href="dashboard-vendor.html">Vendor Admin</a></li>
                
              </ul>
            </li>
            <li><a href="#">Features</a>
              <ul>
                <li><a href="#">Blog</a>
                  <ul>
                    <li><a href="blog.html">Blog Listing</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                </li>-->
                <!--<li><a href="about-us.html">About us</a></li>-->
               
                
                
                <!--<li><a href="faq.html">FAQ's</a></li>
                <li><a href="404-error.html">404 Error</a></li>-->
              
                <!--<li><a href="#">Shortcodes</a>
                  <ul>
                    <li><a href="shortcode-columns.html">Column</a></li>
                    <li><a href="shortcode-accordion.html">Accordion</a></li>
                    <li><a href="shortcode-tabs.html">Tabs</a></li>
                    <li><a href="shortcode-pagination.html">Paginations</a></li>
                    <li><a href="shortcode-typography.html">Typography</a></li>
                    <li><a href="shortcode-accordion.html">Accordion</a></li>
                    <li><a href="shordcods-alerts.html">Alert</a></li>
                  </ul>
                </li>
                <li><a href="wedding-guideline.html">Template Guideline</a></li>
              </ul>
            </li>
            <li><a href="#">Real Weddings</a>
              <ul>
                <li><a href="real-wedding-listing.html">Listing</a></li>
                <li><a href="real-wedding-single.html">Real Wedding Single</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>