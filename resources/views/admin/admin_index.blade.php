<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('plugins/images/favicon.png')}}">
    <title>Workshop Managment System</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('html/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('html/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('html/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('html/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{asset('/')}}">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                           <img src="./plugins/images/large/nssf_logo.png" alt="home" class="light-logo" width="35px" height="35px" />
                            <!--This is light logo icon-->
                         
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                          
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->

                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10" action="/live_search" method="POST">
                            <input type="text" placeholder="Search..." class="form-control" name="q"> 
                            <button class="">
                                <i class="fa fa-search"></i>
                           </button>
                            @csrf
                        </form>
                    </li>
                    <li>
                      <a class="profile-pic" href="#"> <img src="/uploads/avatar/{{Auth::user()->avatar}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{asset('/admin_index')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true" style="color:#cc6600"></i>Dashboard</a>
                    </li>
                     <li>
                        <a href="{{url('/admin_input')}}" class="waves-effect"><i class="fa fa-sort-amount-desc fa-fw" aria-hidden="true" style="color:#cc6600"></i>Services</a>
                    </li>

                     <li>
                        <a href="{{url('/admin_assets_table')}}" class="waves-effect"><i class="fa fa-adn fa-fw" aria-hidden="true" style="color:#cc6600"></i>Assets</a>
                    </li>

                    <li>
                        <a href="{{url('/basic_table')}}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true" style="color:#cc6600"></i>Workshop Log</a>
                    </li>
    
                    <li>
                        <a href="{{url('/admin_report')}}" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true" style="color:#cc6600"></i>Report</a>
                    </li>

                    <li>
                        <a href="{{url('/admin_profile')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true" style="color:#cc6600"></i>Profile</a>
                    </li>
                   
                </ul>
                <div class="center p-20">
                    <a class="btn btn-danger btn-block waves-effect waves-light" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                 </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                           <h5 style="color:#f33155">{{date('D M Y')}}</h5>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <p class="lead" style="color:#f33155">&nbsp;&nbsp;Workshop Updates</p>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Store Items</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <img src="{{asset('asset/img/store1.png')}}">
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{$store}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Repair Items</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <img src="{{asset('asset/img/repair1.png')}}">
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{$repair}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">use Items</h3>
                            <ul class="list-inline two-part">
                                <li>
                                  <img src="{{asset('asset/img/release1.png')}}">
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{$release}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                     <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Workshop Comments</h3>
                            <div class="comment-center p-t-10">
                                <div class="comment-body">

                                    <div class="mail-contnet">
                                      @if($percentage > 50)
                                       <p class="lead" style="color:#f33155">The are many  items for repair in Workshop Store !</p>

                                       @else
                                        <p class="lead" style="color:#f33155">The Store Status is fine fore now !</p>
                                       @endif

                                    </div>
                                </div> 
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Store Status
                                    </div>
                                    <div class="panel-body">
                                      <b class="lead"style="color:#f33155">{{$percentage}}%</b> Items In repair
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!--row -->
                <hr>
                <!-- /.row -->
                   <div class="row">
                    <p class="lead" style="color:#f33155">&nbsp;&nbsp;Assets Updates</p>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Store Items</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <img src="{{asset('asset/img/store.png')}}">
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{$total_in_store}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">In Repair Items</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <img src="{{asset('asset/img/repair.png')}}">
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{$total_in_repair}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Use Items</h3>
                            <ul class="list-inline two-part">
                                <li>
                                   <img src="{{asset('asset/img/release.png')}}">
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{$total_in_use}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Asset Comments</h3>
                            <div class="comment-center p-t-10">
                                <div class="comment-body">

                                    <div class="mail-contnet">
                                      @if($percentage_asset > 50)
                                      <p class="lead" style="color:#f33155">The are many  items for repair in Asset Store !</p>
                                      @else
                                      <p class="lead">The store status is fine fore now !</p>
                                       @endif

                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Store Status
                                    </div>
                                    <div class="panel-body">
                                      <b style="color:#f33155">{{$percentage_asset}}%</b> Items In repair
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> &copy;Blacknative Inc. {{date('M Y')}} </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('html/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('html/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('html/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{('html/js/custom.min.js')}}"></script>
    <script src="{{asset('html/js/dashboard1.js')}}"></script>
    <script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>

</html>
