<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{url('dashboard/')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar-times-o"></i>
                    <span>Events</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('events.create')}}"><i class="fa fa-plus"></i> Add Events</a></li>
                    <li><a href="{{route('events.index')}}"><i class="fa fa-list"></i> List Events</a></li>
                </ul>
            </li>
            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                    <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> List Category</a></li>
                </ul>
            </li>-->
	   <li class="treeview">
                <a href="#">
                    <i class="fa fa-building-o"></i>
                    <span>Convention Center</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('conventions.create')}}"><i class="fa fa-plus"></i> Add Convention Center</a></li>
                    <li><a href="{{route('conventions.index')}}"><i class="fa fa-list"></i> List Convention Center</a></li>
                </ul>
            </li>
        <li class="treeview">
                <a href="#">
                    <i class="fa fa-car"></i>
                    <span>Car Rentals</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('carrentals.create')}}"><i class="fa fa-plus"></i> Add Car Rentals</a></li>
                    <li><a href="{{route('carrentals.index')}}"><i class="fa fa-list"></i> List Car Rentals</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-camera"></i>
                    <span>Studio</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('studio.create')}}"><i class="fa fa-plus"></i> Add Studio</a></li>
                    <li><a href="{{route('studio.index')}}"><i class="fa fa-list"></i> List Studio</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-cutlery"></i>
                    <span>Caterers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('caterers.create')}}"><i class="fa fa-plus"></i> Add Caterers</a></li>
                    <li><a href="{{route('caterers.index')}}"><i class="fa fa-list"></i> List Caterers</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-diamond"></i>
                    <span>Jewellers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('jewellers.create')}}"><i class="fa fa-plus"></i> Add Jewellers</a></li>
                    <li><a href="{{route('jewellers.index')}}"><i class="fa fa-list"></i> List Jewellers</a></li>
                </ul>
            </li>
			
        <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span>Invites</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('invites.create')}}"><i class="fa fa-plus"></i> Add Invites</a></li>
                    <li><a href="{{route('invites.index')}}""><i class="fa fa-list"></i> List Invites</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-ge"></i>
                    <span>Decorators</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('decorators.create')}}"><i class="fa fa-plus"></i> Add Decorator</a></li>
                    <li><a href="{{route('decorators.index')}}"><i class="fa fa-list"></i> List Decorator</a></li>
                </ul>
            </li>
               <li class="treeview">
                <a href="#">
                    <i class="fa fa-cut"></i>
                    <span>Beauty & Grooming</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('beauty.create')}}"><i class="fa fa-plus"></i> Add Beauty & Grooming</a></li>
                    <li><a href="{{route('beauty.index')}}"><i class="fa fa-list"></i> List Beauty & Grooming</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Apparels</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('apparels.create')}}"><i class="fa fa-plus"></i> Add Apparel</a></li>
                    <li><a href="{{route('apparels.index')}}"><i class="fa fa-list"></i> List Apparel</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-music"></i>
                    <span>Entertainments</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('entertainments.create')}}"><i class="fa fa-plus"></i> Add Entertainment</a></li>
                    <li><a href="{{route('entertainments.index')}}"><i class="fa fa-list"></i> List Entertainment</a></li>
                </ul>
            </li>
              <li class="treeview">
                <a href="#">
                    <i class="fa fa-gift"></i>
                    <span>Giveaways</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('giveaways.create')}}"><i class="fa fa-plus"></i> Add Giveway</a></li>
                    <li><a href="{{route('giveaways.index')}}"><i class="fa fa-list"></i> List Giveway</a></li>
                </ul>
            </li>
			<li class="header">Settings</li>
           <li><a href="{{url('changePassword/'.\App\Encrypt::encrypt(Sentinel::getUser()->id))}}"><i class="fa fa-circle-o text-orange"></i> <span>Change Password</span></a></li></ul>
       

             </ul>


    </section>
    <!-- /.sidebar -->
</aside>
