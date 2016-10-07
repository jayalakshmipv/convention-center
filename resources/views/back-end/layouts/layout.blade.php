<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- token for laravel ajax calls -->
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- DATA TABLES -->
        <link href="{{ URL::asset('backend-style/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link rel="stylesheet" href="{{ URL::asset('backend-style/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- Morris charts -->
          <link rel="stylesheet" href="{{ URL::asset('backend-style/plugins/morris/morris.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{URL::asset('backend-style/plugins/select2/select2.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('backend-style/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ URL::asset('backend-style/dist/css/skins/_all-skins.min.css') }}">
<!--        <link rel="stylesheet" href="{{ URL::asset('backend-style/css/style.css') }}">-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-purple sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="../../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Admin</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs">Welcome 
                                       
                                    </span>

                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <p>

                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!--div class="pull-left">
                                            <a href="{{url('profile')}}" class="btn btn-default profile_new btn-flat">Profile</a>
                                        </div-->
                                        <div class="pull-right">
                                            <a href="{{ url('/logout') }}" class="btn btn-default sign_new btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

            </header>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @yield('title')
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    </ol-->
                </section>

                <!-- Main content -->
                <section class="content">

                    @yield('body')

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <div class="loading-screen">
                <div class="loading-icon">
                    <div class="sk-wave">
                        <div class="sk-rect sk-rect1"></div>
                        <div class="sk-rect sk-rect2"></div>
                        <div class="sk-rect sk-rect3"></div>
                        <div class="sk-rect sk-rect4"></div>
                        <div class="sk-rect sk-rect5"></div>
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="http://imrokraft.com">Imrokraft</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <!-- DATA TABES SCRIPT -->
        <script src="{{ URL::asset('backend-style/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('backend-style/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="{{ URL::asset('backend-style/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ URL::asset('backend-style/plugins/morris/morris.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{URL::asset('backend-style/plugins/select2/select2.full.min.js')}}"></script>
        <!-- SlimScroll -->
        <script src="{{ URL::asset('backend-style/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ URL::asset('backend-style/plugins/fastclick/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('backend-style/dist/js/app.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ URL::asset('backend-style/dist/js/demo.js') }}"></script>

        <script src="{{ URL::asset('backend-style/dist/js/bootstrap-datepicker.js') }}"></script>


  
    </body>
</html>
